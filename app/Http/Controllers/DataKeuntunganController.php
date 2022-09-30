<?php

namespace App\Http\Controllers;

use App\Models\DataKeuntungan;
use App\Models\DataRekap;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Excel;
use Carbon\Carbon;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Modules\Guilds\Entities\Guild;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Auth;

class DataKeuntunganController extends Controller
{
    public function keuntungan(){
        $user=auth()->user();
        $tahun = [];
        $dtlpsn = DetailPesanan::all();

        foreach(DetailPesanan::all() as $dtpsnan){
            if(!in_array($dtpsnan->created_at->format('Y'), $tahun)){
                $tahun[] = $dtpsnan->created_at->format('Y');
            }
        }

        $date = date('y-m-d');
        $data_keuntungans_today = DetailPesanan::where('total', '=', $date)->count();

        $data_keuntungans = DetailPesanan::count();

        $rekap_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_jan != 0){
            $msk_jan = $rekap_jan - 0;
        }else{
            $msk_jan = $rekap_jan;
        }
        $rekap_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_feb != 0){
            $msk_feb = $rekap_feb - $msk_jan;
        }else{
            $msk_feb = $rekap_feb;
        }
        $rekap_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_mar != 0){
            $msk_mar = $rekap_mar - $msk_feb;
        }else{
            $msk_mar = $rekap_mar;
        }
        $rekap_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_apr != 0){
            $msk_apr = $rekap_apr - $msk_mar;
        }else{
            $msk_apr = $rekap_apr;
        }
        $rekap_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_mei != 0){
            $msk_mei = $rekap_mei - $msk_apr;
        }else{
            $msk_mei = $rekap_mei;
        }
        $rekap_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_jun != 0){
            $msk_jun = $rekap_jun - $msk_mei;
        }else{
            $msk_jun = $rekap_jun;
        }
        $rekap_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_jul != 0){
            $msk_jul = $rekap_jul - $msk_jun;
        }else{
            $msk_jul = $rekap_jul;
        }
        $rekap_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_agu != 0){
            $msk_agu = $rekap_agu - $msk_jul;
        }else{
            $msk_agu = $rekap_agu;
        }
        $rekap_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_sep != 0){
            $msk_sep = $rekap_sep - $msk_agu;
        }else{
            $msk_sep = $rekap_sep;
        }
        $rekap_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_okt != 0){
            $msk_okt = $rekap_okt - $msk_sep;
        }else{
            $msk_okt = $rekap_okt;
        }
        $rekap_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_nov != 0){
            $msk_nov = $rekap_nov - $msk_okt;
        }else{
            $msk_nov = $rekap_nov;
        }
        $rekap_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        if($rekap_des != 0){
            $msk_des = $rekap_des - $msk_nov;
        }else{
            $msk_des = $rekap_des;
        }


        $data = [
            [
                'bulan' => 'januari',
                'hasil' => $msk_jan
            ],
            [
                'bulan' => 'februari',
                'hasil' => $msk_feb
            ],
            [
                'bulan' => 'maret',
                'hasil' => $msk_mar
            ],
            [
                'bulan' => 'april',
                'hasil' => $msk_apr
            ],
            [
                'bulan' => 'mei',
                'hasil' => $msk_mei
            ],
            [
                'bulan' => 'juni',
                'hasil' => $msk_jun
            ],
            [
                'bulan' => 'juli',
                'hasil' => $msk_jul
            ],
            [
                'bulan' => 'agustus',
                'hasil' => $msk_agu
            ],
            [
                'bulan' => 'september',
                'hasil' => $msk_sep
            ],
            [
                'bulan' => 'oktober',
                'hasil' => $msk_okt
            ],
            [
                'bulan' => 'november',
                'hasil' => $msk_nov
            ],
            [
                'bulan' => 'desember',
                'hasil' => $msk_des
            ],
        ];


        return view('data-keuntungan', compact(['data','user', 'msk_jan', 'msk_feb', 'msk_mar', 'msk_apr', 'msk_mei', 'msk_jun', 'msk_jul', 'msk_agu', 'msk_sep', 'msk_okt', 'msk_nov', 'msk_des', 'tahun']));
    }
    // public function logout(Request $request){
    //     Auth::logout();
    //     return redirect ('/menu-utama')->with('success',' Anda Berhasil Logout');
    //     if(Auth::attempt($request->only('logout'))){
    //         return redirect('/dashboard')->with('success',' Anda Tidak Bisa Mengaksesnya');
    //     }
    // }

    public function ajax(Request $request){
        $bulanTahun = $request->Tahun;
        $rekap_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_jan != 0){
            $msk_jan = $rekap_jan - 0;
        }else{
            $msk_jan = $rekap_jan;
        }
        $rekap_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_feb != 0){
            $msk_feb = $rekap_feb - $msk_jan;
        }else{
            $msk_feb = $rekap_feb;
        }
        $rekap_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_mar != 0){
            $msk_mar = $rekap_mar - $msk_feb;
        }else{
            $msk_mar = $rekap_mar;
        }
        $rekap_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_apr != 0){
            $msk_apr = $rekap_apr - $msk_mar;
        }else{
            $msk_apr = $rekap_apr;
        }
        $rekap_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_mei != 0){
            $msk_mei = $rekap_mei - $msk_apr;
        }else{
            $msk_mei = $rekap_mei;
        }
        $rekap_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_jun != 0){
            $msk_jun = $rekap_jun - $msk_mei;
        }else{
            $msk_jun = $rekap_jun;
        }
        $rekap_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_jul != 0){
            $msk_jul = $rekap_jul - $msk_jun;
        }else{
            $msk_jul = $rekap_jul;
        }
        $rekap_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_agu != 0){
            $msk_agu = $rekap_agu - $msk_jul;
        }else{
            $msk_agu = $rekap_agu;
        }
        $rekap_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_sep != 0){
            $msk_sep = $rekap_sep - $msk_agu;
        }else{
            $msk_sep = $rekap_sep;
        }
        $rekap_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_okt != 0){
            $msk_okt = $rekap_okt - $msk_sep;
        }else{
            $msk_okt = $rekap_okt;
        }
        $rekap_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_nov != 0){
            $msk_nov = $rekap_nov - $msk_okt;
        }else{
            $msk_nov = $rekap_nov;
        }
        $rekap_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        if($rekap_des != 0){
            $msk_des = $rekap_des - $msk_nov;
        }else{
            $msk_des = $rekap_des;
        }

        $dataTableInOut = [
            ['bulans' => 'Januari-'.$bulanTahun, 'keuntungan' =>$msk_jan ],
            ['bulans' => 'Februari-'.$bulanTahun, 'keuntungan' => $msk_feb ],
            ['bulans' => 'Maret-'.$bulanTahun, 'keuntungan' => $msk_mar ],
            ['bulans' => 'April-'.$bulanTahun, 'keuntungan' => $msk_apr ],
            ['bulans' => 'Mei-'.$bulanTahun, 'keuntungan' =>$msk_mei ],
            ['bulans' => 'Juni-'.$bulanTahun, 'keuntungan' =>$msk_jun  ],
            ['bulans' => 'Juli-'.$bulanTahun, 'keuntungan' =>$msk_jul ],
            ['bulans' => 'Agustus-'.$bulanTahun, 'keuntungan' =>$msk_agu ],
            ['bulans' => 'September-'.$bulanTahun, 'keuntungan' => $msk_sep],
            ['bulans' => 'Oktober-'.$bulanTahun, 'keuntungan' => $msk_okt],
            ['bulans' => 'November-'.$bulanTahun, 'keuntungan' => $msk_nov] ,
            ['bulans' => 'Desember-'.$bulanTahun, 'keuntungan' =>$msk_des ]];

            $datatable = DataTables::of($dataTableInOut)->make(true);
            return $datatable;


    }

    public function ajaxgraphic(Request $request){
        $rekap_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_jan != 0){
            $msk_jan = $rekap_jan - 0;
        }else{
            $msk_jan = $rekap_jan;
        }
        $rekap_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_feb != 0){
            $msk_feb = $rekap_feb - $msk_jan;
        }else{
            $msk_feb = $rekap_feb;
        }
        $rekap_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_mar != 0){
            $msk_mar = $rekap_mar - $msk_feb;
        }else{
            $msk_mar = $rekap_mar;
        }
        $rekap_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_apr != 0){
            $msk_apr = $rekap_apr - $msk_mar;
        }else{
            $msk_apr = $rekap_apr;
        }
        $rekap_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_mei != 0){
            $msk_mei = $rekap_mei - $msk_apr;
        }else{
            $msk_mei = $rekap_mei;
        }
        $rekap_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_jun != 0){
            $msk_jun = $rekap_jun - $msk_mei;
        }else{
            $msk_jun = $rekap_jun;
        }
        $rekap_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_jul != 0){
            $msk_jul = $rekap_jul - $msk_jun;
        }else{
            $msk_jul = $rekap_jul;
        }
        $rekap_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_agu != 0){
            $msk_agu = $rekap_agu - $msk_jul;
        }else{
            $msk_agu = $rekap_agu;
        }
        $rekap_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_sep != 0){
            $msk_sep = $rekap_sep - $msk_agu;
        }else{
            $msk_sep = $rekap_sep;
        }
        $rekap_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_okt != 0){
            $msk_okt = $rekap_okt - $msk_sep;
        }else{
            $msk_okt = $rekap_okt;
        }
        $rekap_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_nov != 0){
            $msk_nov = $rekap_nov - $msk_okt;
        }else{
            $msk_nov = $rekap_nov;
        }
        $rekap_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        if($rekap_des != 0){
            $msk_des = $rekap_des - $msk_nov;
        }else{
            $msk_des = $rekap_des;
        }

        $data = [
            "msk_jan" => $msk_jan,
            "msk_feb" => $msk_feb,
            "msk_mar" => $msk_mar,
            "msk_apr" => $msk_apr,
            "msk_mei" => $msk_mei,
            "msk_jun" => $msk_jun,
            "msk_jul" => $msk_jul,
            "msk_agu" => $msk_agu,
            "msk_sep" => $msk_sep,
            "msk_okt" => $msk_okt,
            "msk_nov" => $msk_nov,
            "msk_des" => $msk_des,
        ];

        return $data;
    }

    public function exportuntungpdf($bulanTahun){
        $rekap_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_jan != 0){
            $msk_jan = $rekap_jan - 0;
        }else{
            $msk_jan = $rekap_jan;
        }
        $rekap_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_feb != 0){
            $msk_feb = $rekap_feb - $msk_jan;
        }else{
            $msk_feb = $rekap_feb;
        }
        $rekap_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_mar != 0){
            $msk_mar = $rekap_mar - $msk_feb;
        }else{
            $msk_mar = $rekap_mar;
        }
        $rekap_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_apr != 0){
            $msk_apr = $rekap_apr - $msk_mar;
        }else{
            $msk_apr = $rekap_apr;
        }
        $rekap_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_mei != 0){
            $msk_mei = $rekap_mei - $msk_apr;
        }else{
            $msk_mei = $rekap_mei;
        }
        $rekap_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_jun != 0){
            $msk_jun = $rekap_jun - $msk_mei;
        }else{
            $msk_jun = $rekap_jun;
        }
        $rekap_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_jul != 0){
            $msk_jul = $rekap_jul - $msk_jun;
        }else{
            $msk_jul = $rekap_jul;
        }
        $rekap_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_agu != 0){
            $msk_agu = $rekap_agu - $msk_jul;
        }else{
            $msk_agu = $rekap_agu;
        }
        $rekap_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_sep != 0){
            $msk_sep = $rekap_sep - $msk_agu;
        }else{
            $msk_sep = $rekap_sep;
        }
        $rekap_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_okt != 0){
            $msk_okt = $rekap_okt - $msk_sep;
        }else{
            $msk_okt = $rekap_okt;
        }
        $rekap_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_nov != 0){
            $msk_nov = $rekap_nov - $msk_okt;
        }else{
            $msk_nov = $rekap_nov;
        }
        $rekap_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_des != 0){
            $msk_des = $rekap_des - $msk_nov;
        }else{
            $msk_des = $rekap_des;
        }

        $dataTableInOut = [
            ['bulans' => 'Januari-'.$bulanTahun, 'keuntungan' =>$msk_jan ],
            ['bulans' => 'Februari-'.$bulanTahun, 'keuntungan' => $msk_feb ],
            ['bulans' => 'Maret-'.$bulanTahun, 'keuntungan' => $msk_mar ],
            ['bulans' => 'April-'.$bulanTahun, 'keuntungan' => $msk_apr ],
            ['bulans' => 'Mei-'.$bulanTahun, 'keuntungan' =>$msk_mei ],
            ['bulans' => 'Juni-'.$bulanTahun, 'keuntungan' =>$msk_jun  ],
            ['bulans' => 'Juli-'.$bulanTahun, 'keuntungan' =>$msk_jul ],
            ['bulans' => 'Agustus-'.$bulanTahun, 'keuntungan' =>$msk_agu ],
            ['bulans' => 'September-'.$bulanTahun, 'keuntungan' => $msk_sep],
            ['bulans' => 'Oktober-'.$bulanTahun, 'keuntungan' => $msk_okt],
            ['bulans' => 'November-'.$bulanTahun, 'keuntungan' => $msk_nov] ,
            ['bulans' => 'Desember-'.$bulanTahun, 'keuntungan' =>$msk_des ]];
        view()->share('data', $dataTableInOut);
        $pdf = PDF::loadview('datakeuntungan-pdf');
        return $pdf->download('DataKeuntungan.pdf');
    }
    public function exportuntungexcel($bulanTahun){

        $rekap_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_jan != 0){
            $msk_jan = $rekap_jan - 0;
        }else{
            $msk_jan = $rekap_jan;
        }
        $rekap_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_feb != 0){
            $msk_feb = $rekap_feb - $msk_jan;
        }else{
            $msk_feb = $rekap_feb;
        }
        $rekap_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_mar != 0){
            $msk_mar = $rekap_mar - $msk_feb;
        }else{
            $msk_mar = $rekap_mar;
        }
        $rekap_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_apr != 0){
            $msk_apr = $rekap_apr - $msk_mar;
        }else{
            $msk_apr = $rekap_apr;
        }
        $rekap_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_mei != 0){
            $msk_mei = $rekap_mei - $msk_apr;
        }else{
            $msk_mei = $rekap_mei;
        }
        $rekap_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_jun != 0){
            $msk_jun = $rekap_jun - $msk_mei;
        }else{
            $msk_jun = $rekap_jun;
        }
        $rekap_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_jul != 0){
            $msk_jul = $rekap_jul - $msk_jun;
        }else{
            $msk_jul = $rekap_jul;
        }
        $rekap_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_agu != 0){
            $msk_agu = $rekap_agu - $msk_jul;
        }else{
            $msk_agu = $rekap_agu;
        }
        $rekap_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_sep != 0){
            $msk_sep = $rekap_sep - $msk_agu;
        }else{
            $msk_sep = $rekap_sep;
        }
        $rekap_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_okt != 0){
            $msk_okt = $rekap_okt - $msk_sep;
        }else{
            $msk_okt = $rekap_okt;
        }
        $rekap_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_nov != 0){
            $msk_nov = $rekap_nov - $msk_okt;
        }else{
            $msk_nov = $rekap_nov;
        }
        $rekap_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        if($rekap_des != 0){
            $msk_des = $rekap_des - $msk_nov;
        }else{
            $msk_des = $rekap_des;
        }

        $dataTableInOut = [
            ['bulans' => 'Januari-'.$bulanTahun, 'keuntungan' =>$msk_jan ],
            ['bulans' => 'Februari-'.$bulanTahun, 'keuntungan' => $msk_feb ],
            ['bulans' => 'Maret-'.$bulanTahun, 'keuntungan' => $msk_mar ],
            ['bulans' => 'April-'.$bulanTahun, 'keuntungan' => $msk_apr ],
            ['bulans' => 'Mei-'.$bulanTahun, 'keuntungan' =>$msk_mei ],
            ['bulans' => 'Juni-'.$bulanTahun, 'keuntungan' =>$msk_jun  ],
            ['bulans' => 'Juli-'.$bulanTahun, 'keuntungan' =>$msk_jul ],
            ['bulans' => 'Agustus-'.$bulanTahun, 'keuntungan' =>$msk_agu ],
            ['bulans' => 'September-'.$bulanTahun, 'keuntungan' => $msk_sep],
            ['bulans' => 'Oktober-'.$bulanTahun, 'keuntungan' => $msk_okt],
            ['bulans' => 'November-'.$bulanTahun, 'keuntungan' => $msk_nov] ,
            ['bulans' => 'Desember-'.$bulanTahun, 'keuntungan' =>$msk_des ]];

        //Excel PHP
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load(public_path('excel/form_exportt.xlsx'));
        $sheet = $spreadsheet->getActiveSheet();

        $baris = 3;
        $nomer = 1;
        foreach($dataTableInOut as $row){
            $sheet->setCellValue('A'.$baris, $nomer);
            $sheet->setCellValue('B'.$baris, $row['bulans']);
            $sheet->setCellValue('C'.$baris, $row['keuntungan']);
            $nomer++;
            $baris++;
        }
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="datakeuntungan.xlsx"');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        return $writer->save('php://output');
    }
}
