<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\DataBarang;
use App\Models\DataSupplier;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;
use Illuminate\Support\Facades\DB;

class DataBarangController extends Controller
{
    public function barang(){
        $user=auth()->user();
        $data = DataBarang::with('kategori')->get();
        $kat = Kategori::all();
        $supp = DataSupplier::all();

        $db = DB::table('data_barangs')->select(DB::raw('MAX(RIGHT(kode_barang,4)) as kode'));
        $kd ="";
        if ($db->count()>0) {
            foreach($db->get() as $d){
                $tmp = ((int)$d->kode)+1;
                $kd = sprintf('%04s', $tmp);
            }
        } else {
            $kd = "0001";
        }

        return view('data-barang', compact('data', 'kat','user','supp','kd'));
    }

    public function insertbarang(request $request){

        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:data_barangs,kode_barang',
            'kategori_id' => 'required',
            'nama_supplayer_id' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'total_beli' => 'required',
            'deskripsi' => 'required',
            // 'gambar' => 'required',
        ]);
         messages: ([
            'kode_barang.required' => 'Kode Barang is required',
            'kategori_id.required' => 'Kategori is required',
            'nama_supplayer_id.required' => 'Nama Supplayer is required',
            'nama_barang.required' => 'Nama Barang is required',
            'stok.required' => 'Stok is required',
            'harga_jual.required' => 'Harga Jual is required',
            'harga_beli.required' => 'Harga Beli is required',
            'deskripsi.required' => 'Deskripsi is required',
            // 'gambar.required' => 'Gambar is required',

            function ($attribute, $value, $fail) {
                if (DataBarang::whereKode_Barang($value)->whereActive(0)->count() > 0) {
                    $fail($attribute.' is already Kode.');
                }
            },
         ]);

        // dd($request->all());
        $data = DataBarang::create($request->all());

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('barang')->with('success',' Data Berhasil Di Tambah');
    }

    public function updatebarang(request $request, $id){
        $data = DataBarang::with('kategori')->find($id);
        $data->update($request->all());
        $kat = Kategori::all();
        $supp = DataSupplier::all();

        if($request->hasFile('gambar')){

            $destination ='gambarproduk/'.$data->foto;

            $request->file('gambar')->move('gambarproduk/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('barang',compact('kat','supp'))->with('success',' Data Berhasil Di Edit');
    }

    public function delete($id){
        $count_detail = count(DetailPesanan::where('nama_barang_id', '=', $id)->get());
        if ($count_detail > 0) {
            return back()->with('error', 'Nama Barang Masih Digunakan');
        }
        $count_kategori = count(Kategori::where('kategorii', '=', $id)->get());
        if ($count_kategori > 0) {
            return back()->with('error', 'Kategori Masih Digunakan');
        }
        $data = DataBarang::with('kategori')->findorfail($id);
        $data->delete();
        $kat = Kategori::all();
        $supp = DataSupplier::all();

        return redirect()->route('barang', compact('kat','supp'))->with('success',' Data Berhasil Di Hapus');
    }


    //kategori//
    public function kategori(){

        $user=auth()->user();
        // $post = DataBarang::withCount('nama_barang')->first();
        // $posts = DataBarang::find($jid)
        //     ->posts()
        //     ->with('nama_produk')
        //     ->where('reply_to', 0)
        //     ->orderBy('pid', 'DESC');
        $data = Kategori::with('databarang')->get();
        $dataw = Kategori::get('id');
        return view('kategori', compact('data','user'));
    }
    public function insertkategori(request $request){

        $validatedData = $request->validate([
            'kategorii' => 'required',
        ]);
        messages:([
            'kategorii.required' => 'kategori is required',
        ]);

        $data = Kategori::create($request->all());

        return redirect()->route('kategori')->with('success',' Data Berhasil Di Tambah');
    }
    public function updatekategori(request $request, $id){
        $data = Kategori::find($id);
        $data->update($request->all());

        return redirect()->route('kategori')->with('success',' Data Berhasil Di Edit');
    }
    public function deletekategori($id){
        $count_databarang = count(DataBarang::where('kategori_id', '=', $id)->get());
        if ($count_databarang > 0) {
            return back()->with('error', 'Kategori Masih Digunakan');
        }
        $data = kategori::findorfail($id);
        $data->delete();

        return redirect()->route('kategori')->with('success',' Data Berhasil Di Hapus');
}

//trash data barang//
public function sampah()
{

 //menampilkan data yg dihapus
 $user=auth()->user();
 $data = DataBarang::onlyTrashed()->get();
//  return view('data_trash_barang', ['data' => $data]);
 return view('data_trash_barang', compact('data', 'user'));
}

public function kembalikan_sampah($id)
{
     // restore data yang dihapus
     $data = DataBarang::onlyTrashed()->where('id',$id);
     $data->restore();
     return redirect('/sampah')->with('success','Data Berhasil Di Pulihkan Semua');
}
public function kembalikan_semua_sampah()
{

     $data = DataBarang::onlyTrashed();
     $data->restore();

     return redirect('/sampah')->with('success','Data Berhasil Di Pulihkan Semua');
}
public function hapus_permanen_sampah($id)
{
     // hapus permanen data guru
     $data = DataBarang::onlyTrashed()->where('id',$id);
     $data->forceDelete();

     return redirect('/sampah')->with('success','Data Berhasil di Hapus Permanen');
}
public function hapus_permanen_semua_sampah()
{
     // hapus permanen semua data guru yang sudah dihapus
     $data = DataBarang::onlyTrashed();
     $data->forceDelete();

     return redirect('/sampah')->with('success','Semua Data Berhasil di Hapus Permanen');
}

//trash kategori//
public function sampahh()
{

 //menampilkan data yg dihapus
 $user=auth()->user();
 $data = Kategori::onlyTrashed()->get();
//  return view('kategori_trash', ['data' => $data]);
 return view('kategori_trash', compact('data','user'));
}

public function kembalikan_sampahh($id)
{
     // restore data yang dihapus
     $data = Kategori::onlyTrashed()->where('id',$id);
     $data->restore();
     return redirect('/sampahh')->with('success','Data Berhasil Di Pulihkan');
}
public function kembalikan_semua_sampahh()
{

     $data = Kategori::onlyTrashed();
     $data->restore();

     return redirect('/sampahh')->with('success','Data Berhasil Di Pulihkan Semua');
}
public function hapus_permanen_sampahh($id)
{
     // hapus permanen data guru
     $count_kategori_trash = count(DataBarang::where('kategori_id', '=', $id)->get());
     if ($count_kategori_trash > 0) {
         return back()->with('error', 'Kategori Masih Digunakan');
     }
     $data = Kategori::onlyTrashed()->where('id',$id);
     $data->forceDelete();

     return redirect('/sampahh')->with('success','Data Berhasil Di Hapus Permanen');
}
public function hapus_permanen_semua_sampahh()
{
     // hapus permanen semua data guru yang sudah dihapus
     $data = Kategori::onlyTrashed();
     $data->forceDelete();

     return redirect('/sampahh')->with('success','Semua Data Berhasil Di Hapus Permanen');
}
}
