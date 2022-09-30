<?php

namespace App\Http\Controllers;
use App\Models\DataRekap;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use App\Models\DataKeuntungan;
use App\Models\DataPemesan;
use App\Models\DataSupplier;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\DetailPesanan;

class DashboardController extends Controller
{

    public function index(Request $request){
        return view('menu-utama');

        // if(Auth::attempt($request->only('email','password'))){
        //     return redirect('/dashboard');
        // }
        // return redirect('/login');
    }

    // public function __construct(){
    //     $this->middleware('auth');
    // }



  public function dashboard(){
    $user=auth()->user();
    $suppliercount   = DataSupplier::count();
    $pemesancount = DataPemesan::count();
    $barangcount = DataBarang::count();
    $data = DataKeuntungan::all();
        $date = date('y-m-d');
        $data_keuntungans_today = DataKeuntungan::where('hasilkeuntungan', '=', $date)->count();

        $data_keuntungans = DataKeuntungan::count();
        $data_keuntungans = DataKeuntungan::count();

        // $msk_jan = DataKeuntungan::where('bulan', '=', 'Januari')->sum(DB::raw('hasilkeuntungan'));
        // $msk_feb = DataKeuntungan::where('bulan', '=','Februari')->sum(DB::raw('hasilkeuntungan'));
        // $msk_mar = DataKeuntungan::where('bulan', '=','Maret')->sum(DB::raw('hasilkeuntungan'));
        // $msk_apr = DataKeuntungan::where('bulan', '=','April')->sum(DB::raw('hasilkeuntungan'));
        // $msk_mei = DataKeuntungan::where('bulan', '=','Mei')->sum(DB::raw('hasilkeuntungan'));
        // $msk_jun = DataKeuntungan::where('bulan', '=','Juni')->sum(DB::raw('hasilkeuntungan'));
        // $msk_jul = DataKeuntungan::where('bulan', '=','Juli')->sum(DB::raw('hasilkeuntungan'));
        // $msk_agu = DataKeuntungan::where('bulan', '=','Agustus')->sum(DB::raw('hasilkeuntungan'));
        // $msk_sep = DataKeuntungan::where('bulan', '=','September')->sum(DB::raw('hasilkeuntungan'));
        // $msk_okt = DataKeuntungan::where('bulan', '=','Oktober')->sum(DB::raw('hasilkeuntungan'));
        // $msk_nov = DataKeuntungan::where('bulan', '=','November')->sum(DB::raw('hasilkeuntungan'));
        // $msk_des = DataKeuntungan::where('bulan', '=','Desember')->sum(DB::raw('hasilkeuntungan'));


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


        return view('dashboard', compact(['data', 'msk_jan', 'msk_feb', 'msk_mar', 'msk_apr', 'msk_mei', 'msk_jun', 'msk_jul', 'msk_agu', 'msk_sep', 'msk_okt', 'msk_nov', 'msk_des','suppliercount','barangcount','pemesancount','user']));
    }



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


    }

