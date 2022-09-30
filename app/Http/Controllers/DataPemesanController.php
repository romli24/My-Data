<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Kategori;
use App\Models\DataBarang;
use App\Models\DataPemesan;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;
use Illuminate\Support\Facades\DB;

class DataPemesanController extends Controller
{
    public function pemesan(){
        $user=auth()->user();
        $data = DataPemesan::with('pesanan')->get();

        $db = DB::table('data_pemesans')->select(DB::raw('MAX(RIGHT(kodepemesan,4)) as kode'));
        $kd ="";
        if ($db->count()>0) {
            foreach($db->get() as $d){
                $tmp = ((int)$d->kode)+1;
                $kd = sprintf('%04s', $tmp);
            }
        } else {
            $kd = "0001";
        }


        return view('data-pemesan', compact('data','user','kd'));
    }

    public function insertpemesan(request $request){

        $validatedData = $request->validate([
            'kodepemesan' => 'required|unique:data_pemesans,kodepemesan',
            'namapemesan' => 'required',
            'alamat' => 'required',
            'notelpon' => 'required',

        ]);
         messages: ([
            'kodepemesan.required' => 'Kode Pemesan is required',
            'namapemesan.required' => 'Nama Pemesan is required',
            'alamat.required' => 'Alamat is required',
            'notelpon.required' => 'No Telephone is required',

            function ($attribute, $value, $fail) {
                if (DataPemesan::whereKodepemesan($value)->whereActive(0)->count() > 0) {
                    $fail($attribute.' is already Kode.');
                }
            },
         ]);

        // dd($request->all());
        $data = DataPemesan::create($request->all());

        return redirect()->route('pemesan')->with('success',' Data Berhasil Di Tambah');
    }


    public function updatepemesan(request $request, $id){
        $data = DataPemesan::find($id);
        $data->update($request->all());

        return redirect()->route('pemesan')->with('success',' Data Berhasil Di Edit');
    }

   public function deletedata($id){
    $data = DataPemesan::find($id);
    $data->delete();
    return redirect()->route('pemesan')->with('success',' Data Berhasil Di Hapus');
}

    //trash pemesan
    public function trashh()
    {

    //menampilkan data yg dihapus
    $user=auth()->user();
    $data = DataPemesan::onlyTrashed()->get();
    //  return view('data_trash_pemesan', ['data','user' => $data, $user]);
    return view('data_trash_pemesan', compact('data','user'));
    }

    public function kembalikann($id)
    {
        // restore data yang dihapus
        $data = DataPemesan::onlyTrashed()->where('id',$id);
        $data->restore();
        return redirect('/trashh')->with('success',' Data Berhasil Di Pulihkan');
    }
    public function kembalikan_semuaa()
    {

        $data = DataPemesan::onlyTrashed();
        $data->restore();

        return redirect('/trashh')->with('success',' Data Berhasil Di Pulihkan Semua');
    }
    public function hapus_permanenn($id)
    {
        // hapus permanen data guru
        $data = DataPemesan::onlyTrashed()->where('id',$id);
        $data->forceDelete();

        return redirect('/trashh')->with('success',' Data Berhasil Di Hapus Permanen');
    }
    public function hapus_permanen_semuaa()
    {
            // hapus permanen semua data guru yang sudah dihapus
            $data = DataPemesan::onlyTrashed();
            $data->forceDelete();

            return redirect('/trashh')->with('success','Semua Data Berhasil Di Hapus Permanen');
    }


//detail pesanan//
public function __construct()
{
    $this->DetailPesanan = new DetailPesanan();
}

    public function detail($kode){
        $user=auth()->user();
        $data = DetailPesanan::with('namabarang','kodepemesan','hargajual')->where('kode_pemesan_id', '=', $kode)->get();
        $barang = DataBarang::all();

        return view('detail-pesanan', compact('data','barang','kode','user'));
    }

    public function insertpesanan(request $request,$id){

        $validatedData = $request->validate([
            'nama_barang_id' => 'required',
            'harga_jual_id' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
        ]);
         messages: ([
            'nama_barang_id.required' => 'Nama Barang is required',
            'harga_jual_id.required' => 'Harga is required',
            'jumlah.required' => 'Jumlah is required',
            'total.required' => 'Total is required',

            function ($attribute, $value, $fail) {
                if (DataPemesan::whereKodepemesan($value)->whereActive(0)->count() > 0) {
                    $fail($attribute.' is already Kode.');
                }
            },
        ]);

        $brg = DataBarang::find($request->nama_barang_id);
        if ($brg->stok < $request->jumlah) {

            return redirect()->route('detail',$id)->with('error',' Jumlah Stok Tidak Mencukupi');

        } else {

            $data = DetailPesanan::create(array_merge($request->all(),[
            "kode_pemesan_id"=> $id
        ]));

            //pengurangan stok//
            $brg = DataBarang::FindOrFail($request->nama_barang_id);
            $brg->stok -=  $request->jumlah;
            $brg->save();

            return redirect()->route('detail',$id)->with('success',' Data Berhasil Di Tambah');
        }



    }

    public function updatepesanan(request $request, $id, $kode){
        $brg = DataBarang::find($request->nama_barang_id);
        $data = DetailPesanan::find($id);
        $brg->update([
            'stok' => $brg->stok + $data->jumlah
        ]);
// dd($brg);
        if ($brg->stok < $request->jumlah) {
            $brg->update([
                'stok' => $brg->stok - $data->jumlah
            ]);
            return redirect()->route('detail',$id)->with('error',' Jumlah Stok Tidak Mencukupi');

        } else {
            $data->update(array_merge($request->all(),[
                "kode_pemesan_id"=> $kode
            ]));

            //pengurangan stok//
            $brg = DataBarang::FindOrFail($request->nama_barang_id);
            $brg->stok -=  $request->jumlah;
            $brg->save();

            return redirect()->route('detail',$kode)->with('success',' Data Berhasil Di Edit');
        }

        $data->update($request->all());

        return redirect()->route('detail', $kode)->with('success',' Data Berhasil Di Edit');
    }

   public function deletepesanan($id, $kode){
    $data = DetailPesanan::find($id);
    $data->delete();
    return redirect()->route('detail',$kode)->with('success',' Data Berhasil Di Hapus');
   }

   //trash detail pesanan
   public function trash($kode)
   {

    //menampilkan data yg dihapus
    $user=auth()->user();
    $data = DetailPesanan::onlyTrashed()->get();
    return view('data_trash', compact('data', 'kode','user'));
   }

public function kembalikan($kode, $id)
{
        // restore data yang dihapus
    	$data = DetailPesanan::onlyTrashed()->where('id',$id);
    	$data->restore();
    	return redirect('/trash/'.$kode)->with('success',' Data Berhasil Di Pulihkan');
}
public function kembalikan_semua($kode)
{
    	$data = DetailPesanan::onlyTrashed();
    	$data->restore();

    	return redirect('/trash/'.$kode)->with('success',' Data Berhasil Di Pulihkan Semua');
}
public function hapus_permanen($kode, $id)
{
    	// hapus permanen data guru
    	$data = DetailPesanan::onlyTrashed()->where('id',$id);
    	$data->forceDelete();

    	return redirect('/trash/'.$kode)->with('success',' Data Berhasil Di Hapus permanen');
}
public function hapus_permanen_semua($kode)
{
    	// hapus permanen semua data guru yang sudah dihapus
    	$data = DetailPesanan::onlyTrashed();
    	$data->forceDelete();

    	return redirect('/trash/'.$kode)->with('success','Semua Data Berhasil di Hapus Permanen');
}




}
