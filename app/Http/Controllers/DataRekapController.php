<?php

namespace App\Http\Controllers;
use App\Models\DataRekap;
use App\Exports\DataRekapExport;
use App\Models\DataBarang;
use App\Models\DataSupplier;
use App\Models\DetailPesanan;
use Carbon\Carbon;
use DataTables;
use PDF;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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

class DataRekapController extends Controller
{
    public function rekap(){
        $user=auth()->user();
        $date = date('Y-m');
        $data_rekap_today = DetailPesanan::where('total', '=', $date)->count();
        $data_rekap_today = DataBarang::where('total_beli', '=', $date)->count();

        $tahun = [];
        $dtlpsn = DetailPesanan::all();

        foreach(DetailPesanan::all() as $dtpsnan){
            if(!in_array($dtpsnan->created_at->format('Y'), $tahun)){
                $tahun[] = $dtpsnan->created_at->format('Y');
            }
        }

        $data_rekap = DetailPesanan::count();
        $data_rekap = DataBarang::count();

        $msk_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));
        $msk_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->sum(DB::raw('total'));

        $klr_jan = DataBarang::whereMonth('created_at', '01')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_feb = DataBarang::whereMonth('created_at', '02')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_mar = DataBarang::whereMonth('created_at', '03')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_apr = DataBarang::whereMonth('created_at', '04')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_mei = DataBarang::whereMonth('created_at', '05')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_jun = DataBarang::whereMonth('created_at', '06')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_jul = DataBarang::whereMonth('created_at', '07')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_agu = DataBarang::whereMonth('created_at', '08')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_sep = DataBarang::whereMonth('created_at', '09')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_okt = DataBarang::whereMonth('created_at', '10')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_nov = DataBarang::whereMonth('created_at', '11')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));
        $klr_des = DataBarang::whereMonth('created_at', '12')->whereYear('created_at', date('Y'))->sum(DB::raw('total_beli'));


        return view('data-rekapbulanan', compact([ 'msk_jan', 'msk_feb', 'msk_mar', 'msk_apr', 'msk_mei', 'msk_jun', 'msk_jul', 'msk_agu', 'msk_sep', 'msk_okt', 'msk_nov', 'msk_des', 'klr_jan', 'klr_feb', 'klr_mar', 'klr_apr', 'klr_mei', 'klr_jun', 'klr_jul', 'klr_agu', 'klr_sep', 'klr_okt', 'klr_nov', 'klr_des', 'tahun','user']));
    }
    public function ajax(Request $request){
        $bulanTahun = $request->Tahun;
        $msk_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));
        $msk_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total'));

        $klr_jan = DataBarang::whereMonth('created_at', '01')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_feb = DataBarang::whereMonth('created_at', '02')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_mar = DataBarang::whereMonth('created_at', '03')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_apr = DataBarang::whereMonth('created_at', '04')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_mei = DataBarang::whereMonth('created_at', '05')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_jun = DataBarang::whereMonth('created_at', '06')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_jul = DataBarang::whereMonth('created_at', '07')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_agu = DataBarang::whereMonth('created_at', '08')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_sep = DataBarang::whereMonth('created_at', '09')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_okt = DataBarang::whereMonth('created_at', '10')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_nov = DataBarang::whereMonth('created_at', '11')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));
        $klr_des = DataBarang::whereMonth('created_at', '12')->whereYear('created_at', $request->Tahun)->sum(DB::raw('total_beli'));

        $dataTableInOut = [
            ['bulans' => 'Januari-'.$bulanTahun, 'pemasukan' => $msk_jan, 'pengeluaran' => $klr_jan ],
            ['bulans' => 'Februari-'.$bulanTahun, 'pemasukan' => $msk_feb, 'pengeluaran' => $klr_feb ],
            ['bulans' => 'Maret-'.$bulanTahun, 'pemasukan' => $msk_mar, 'pengeluaran' => $klr_mar ],
            ['bulans' => 'April-'.$bulanTahun, 'pemasukan' => $msk_apr, 'pengeluaran' => $klr_apr ],
            ['bulans' => 'Mei-'.$bulanTahun, 'pemasukan' => $msk_mei, 'pengeluaran' => $klr_mei ],
            ['bulans' => 'Juni-'.$bulanTahun, 'pemasukan' => $msk_jun, 'pengeluaran' => $klr_jun ],
            ['bulans' => 'Juli-'.$bulanTahun, 'pemasukan' => $msk_jul, 'pengeluaran' => $klr_jul ],
            ['bulans' => 'Agustus-'.$bulanTahun, 'pemasukan' => $msk_agu, 'pengeluaran' => $klr_agu ],
            ['bulans' => 'September-'.$bulanTahun, 'pemasukan' => $msk_sep, 'pengeluaran' => $klr_sep ],
            ['bulans' => 'Oktober-'.$bulanTahun, 'pemasukan' => $msk_okt, 'pengeluaran' => $klr_okt ],
            ['bulans' => 'November-'.$bulanTahun, 'pemasukan' => $msk_nov, 'pengeluaran' => $klr_nov ],
            ['bulans' => 'Desember-'.$bulanTahun, 'pemasukan' => $msk_des, 'pengeluaran' => $klr_des ]];

        $datatable = DataTables::of($dataTableInOut)->make(true);
        return $datatable;
    }

     public function ajaxgraphic(Request $request){
        $msk_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));
        $msk_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total'));

        $klr_jan = DataBarang::whereMonth('created_at', '01')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_feb = DataBarang::whereMonth('created_at', '02')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_mar = DataBarang::whereMonth('created_at', '03')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_apr = DataBarang::whereMonth('created_at', '04')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_mei = DataBarang::whereMonth('created_at', '05')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_jun = DataBarang::whereMonth('created_at', '06')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_jul = DataBarang::whereMonth('created_at', '07')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_agu = DataBarang::whereMonth('created_at', '08')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_sep = DataBarang::whereMonth('created_at', '09')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_okt = DataBarang::whereMonth('created_at', '10')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_nov = DataBarang::whereMonth('created_at', '11')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));
        $klr_des = DataBarang::whereMonth('created_at', '12')->whereYear('created_at', $request->bulanTahun)->sum(DB::raw('total_beli'));

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

            "klr_jan" => $klr_jan,
            "klr_feb" => $klr_feb,
            "klr_mar" => $klr_mar,
            "klr_apr" => $klr_apr,
            "klr_mei" => $klr_mei,
            "klr_jun" => $klr_jun,
            "klr_jul" => $klr_jul,
            "klr_agu" => $klr_agu,
            "klr_sep" => $klr_sep,
            "klr_okt" => $klr_okt,
            "klr_nov" => $klr_nov,
            "klr_des" => $klr_des,
        ];

        return $data;
    }

    public function exportpdf($bulanTahun){

        $msk_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));

        $klr_jan = DataBarang::whereMonth('created_at', '01')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_feb = DataBarang::whereMonth('created_at', '02')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_mar = DataBarang::whereMonth('created_at', '03')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_apr = DataBarang::whereMonth('created_at', '04')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_mei = DataBarang::whereMonth('created_at', '05')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_jun = DataBarang::whereMonth('created_at', '06')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_jul = DataBarang::whereMonth('created_at', '07')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_agu = DataBarang::whereMonth('created_at', '08')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_sep = DataBarang::whereMonth('created_at', '09')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_okt = DataBarang::whereMonth('created_at', '10')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_nov = DataBarang::whereMonth('created_at', '11')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_des = DataBarang::whereMonth('created_at', '12')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));

        $dataTableInOut = [
            ['bulans' => 'Januari-'.$bulanTahun, 'pemasukan' => $msk_jan, 'pengeluaran' => $klr_jan ],
            ['bulans' => 'Februari-'.$bulanTahun, 'pemasukan' => $msk_feb, 'pengeluaran' => $klr_feb ],
            ['bulans' => 'Maret-'.$bulanTahun, 'pemasukan' => $msk_mar, 'pengeluaran' => $klr_mar ],
            ['bulans' => 'April-'.$bulanTahun, 'pemasukan' => $msk_apr, 'pengeluaran' => $klr_apr ],
            ['bulans' => 'Mei-'.$bulanTahun, 'pemasukan' => $msk_mei, 'pengeluaran' => $klr_mei ],
            ['bulans' => 'Juni-'.$bulanTahun, 'pemasukan' => $msk_jun, 'pengeluaran' => $klr_jun ],
            ['bulans' => 'Juli-'.$bulanTahun, 'pemasukan' => $msk_jul, 'pengeluaran' => $klr_jul ],
            ['bulans' => 'Agustus-'.$bulanTahun, 'pemasukan' => $msk_agu, 'pengeluaran' => $klr_agu ],
            ['bulans' => 'September-'.$bulanTahun, 'pemasukan' => $msk_sep, 'pengeluaran' => $klr_sep ],
            ['bulans' => 'Oktober-'.$bulanTahun, 'pemasukan' => $msk_okt, 'pengeluaran' => $klr_okt ],
            ['bulans' => 'November-'.$bulanTahun, 'pemasukan' => $msk_nov, 'pengeluaran' => $klr_nov ],
            ['bulans' => 'Desember-'.$bulanTahun, 'pemasukan' => $msk_des, 'pengeluaran' => $klr_des ]];

        view()->share('data', $dataTableInOut);
        $pdf = PDF::loadview('datarekap-pdf');
        return $pdf->download('DataRekap.pdf');
    }

    public function exportexcel($bulanTahun){
        $msk_jan = DetailPesanan::whereMonth('created_at', '01')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_feb = DetailPesanan::whereMonth('created_at', '02')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_mar = DetailPesanan::whereMonth('created_at', '03')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_apr = DetailPesanan::whereMonth('created_at', '04')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_mei = DetailPesanan::whereMonth('created_at', '05')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_jun = DetailPesanan::whereMonth('created_at', '06')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_jul = DetailPesanan::whereMonth('created_at', '07')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_agu = DetailPesanan::whereMonth('created_at', '08')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_sep = DetailPesanan::whereMonth('created_at', '09')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_okt = DetailPesanan::whereMonth('created_at', '10')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_nov = DetailPesanan::whereMonth('created_at', '11')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));
        $msk_des = DetailPesanan::whereMonth('created_at', '12')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total'));

        $klr_jan = DataBarang::whereMonth('created_at', '01')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_feb = DataBarang::whereMonth('created_at', '02')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_mar = DataBarang::whereMonth('created_at', '03')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_apr = DataBarang::whereMonth('created_at', '04')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_mei = DataBarang::whereMonth('created_at', '05')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_jun = DataBarang::whereMonth('created_at', '06')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_jul = DataBarang::whereMonth('created_at', '07')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_agu = DataBarang::whereMonth('created_at', '08')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_sep = DataBarang::whereMonth('created_at', '09')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_okt = DataBarang::whereMonth('created_at', '10')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_nov = DataBarang::whereMonth('created_at', '11')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));
        $klr_des = DataBarang::whereMonth('created_at', '12')->whereYear('created_at', '=', $bulanTahun)->sum(DB::raw('total_beli'));

        $dataTableInOut = [
            ['bulans' => 'Januari-'.$bulanTahun, 'pemasukan' => $msk_jan, 'pengeluaran' => $klr_jan ],
            ['bulans' => 'Februari-'.$bulanTahun, 'pemasukan' => $msk_feb, 'pengeluaran' => $klr_feb ],
            ['bulans' => 'Maret-'.$bulanTahun, 'pemasukan' => $msk_mar, 'pengeluaran' => $klr_mar ],
            ['bulans' => 'April-'.$bulanTahun, 'pemasukan' => $msk_apr, 'pengeluaran' => $klr_apr ],
            ['bulans' => 'Mei-'.$bulanTahun, 'pemasukan' => $msk_mei, 'pengeluaran' => $klr_mei ],
            ['bulans' => 'Juni-'.$bulanTahun, 'pemasukan' => $msk_jun, 'pengeluaran' => $klr_jun ],
            ['bulans' => 'Juli-'.$bulanTahun, 'pemasukan' => $msk_jul, 'pengeluaran' => $klr_jul ],
            ['bulans' => 'Agustus-'.$bulanTahun, 'pemasukan' => $msk_agu, 'pengeluaran' => $klr_agu ],
            ['bulans' => 'September-'.$bulanTahun, 'pemasukan' => $msk_sep, 'pengeluaran' => $klr_sep ],
            ['bulans' => 'Oktober-'.$bulanTahun, 'pemasukan' => $msk_okt, 'pengeluaran' => $klr_okt ],
            ['bulans' => 'November-'.$bulanTahun, 'pemasukan' => $msk_nov, 'pengeluaran' => $klr_nov ],
            ['bulans' => 'Desember-'.$bulanTahun, 'pemasukan' => $msk_des, 'pengeluaran' => $klr_des ]];
        // dd($dataTableInOut);
        //Excel PHP
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load(public_path('excel/form_export.xlsx'));
        $sheet = $spreadsheet->getActiveSheet();

        $baris = 3;
        $nomer = 1;
        foreach($dataTableInOut as $row){
            $sheet->setCellValue('A'.$baris, $nomer);
            $sheet->setCellValue('B'.$baris, $row['bulans']);
            $sheet->setCellValue('C'.$baris, $row['pemasukan']);
            $sheet->setCellValue('D'.$baris, $row['pengeluaran']);
            $nomer++;
            $baris++;
        }
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="datarekap.xlsx"');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        return $writer->save('php://output');
        // view()->share('data', $dataTableInOut);
        // return Excel::download(new DataRekapExport, 'datarekap.xlsx');
    }
}
