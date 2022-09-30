<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataSupplierController extends Controller
{
    public function supplier(){
        $user=auth()->user();
        $data = DataSupplier::all();

        $db = DB::table('data_suppliers')->select(DB::raw('MAX(RIGHT(kodesupplayer,4)) as kode'));
        $kd ="";
        if ($db->count()>0) {
            foreach($db->get() as $d){
                $tmp = ((int)$d->kode)+1;
                $kd = sprintf('%04s', $tmp);
            }
        } else {
            $kd = "0001";
        }

        return view('data-supplier', compact('data','user','kd'));
    }
    public function insertdata3(request $request){

            $validatedData = $request->validate([
                'kodesupplayer' => 'required|unique:data_suppliers,kodesupplayer',
                'namasupplayer' => 'required',
                'notelpon' => 'required',
                'alamat' => 'required',
            ]);
             messages: ([
                'kodesupplayer.required' => 'Kode Supplier is required',
                'namasupplayer.required' => 'Nama Supplayer is required',
                'notelpon.required' => 'No Telephone is required',
                'alamat.required' => 'Alamat is required',
             ]);

            // dd($request->all());
            $data = DataSupplier::create($request->all());

            return redirect()->route('supplier')->with('success',' Data Berhasil Di Tambah');
        }

        public function updatesupplier(request $request, $id){
            $data = DataSupplier::find($id);
            $data->update($request->all());

            return redirect()->route('supplier')->with('success',' Data Berhasil Di Edit');
        }
        public function deletesupplier($id){
            $count_databarang = count(DataBarang::where('nama_supplayer_id', '=', $id)->get());
        if ($count_databarang > 0) {
            return back()->with('error', 'Nama Supplayer Ini Masih Digunakan');
        }
            $data = DataSupplier::find($id);
            $data->delete();

            return redirect()->route('supplier')->with('success',' Data Berhasil Di Hapus');
        }

        //trash data supplayer//
        public function sampahsup()
        {

        //menampilkan data yg dihapus
        $user=auth()->user();
        $data = DataSupplier::onlyTrashed()->get();
        return view('data_trash_supplayer', compact('data','user'));
        }

        public function kembalikan_sampahsup($id)
        {
            // restore data yang dihapus
            $data = DataSupplier::onlyTrashed()->where('id',$id);
            $data->restore();
            return redirect('/sampahsup')->with('success','Data Berhasil Di Pulihkan');
        }
        public function kembalikan_semua_sampahsup()
        {
            //memulihkan semua data
            $data = DataSupplier::onlyTrashed();
            $data->restore();
            return redirect('/sampahsup')->with('success','Data Berhasil Di Pulihkan Semua');
        }
        public function hapus_permanen_sampahsup($id)
        {
            // hapus permanen data supplayer
            $count_databarang = count(DataBarang::where('nama_supplayer_id', '=', $id)->get());
            if ($count_databarang > 0) {
                return back()->with('error', 'Nama Supplayer Masih Digunakan');
            }
            $data = DataSupplier::onlyTrashed()->where('id',$id);
            $data->forceDelete();
            return redirect('/sampahsup')->with('success','Data Berhasil Di Hapus Permanen');
        }
        public function hapus_permanen_semua_sampahsup()
        {
            // hapus permanen semua data supplayer yang sudah dihapus
            $data = DataSupplier::onlyTrashed();
            $data->forceDelete();
            return redirect('/sampahsup')->with('success','Semua Data Berhasil Di Hapus Permanen');
        }
    }

