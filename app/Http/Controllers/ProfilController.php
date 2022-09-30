<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChangePasswordRequest;


class ProfilController extends Controller
{
    public function profil(){
        $user=auth()->user();
        $data = User::all();
        return view('profile-user', compact('data','user'));
    }

    public function updateprofil(request $request){
        $data = User::find(Auth::id());
        $data->update($request->all());
        //dd($request->all());

        if($request->hasFile('foto')){

            $destination ='fotoprofil/'.$data->image;

            $request->file('foto')->move('fotoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('profil')->with('success',' Data Berhasil Di Edit');
    }


    public function changePassword()
    {
        return view('profile-user');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {

       $old_password = auth()->user()->password;
       $user_id = auth()->user()->id;

       if (Hash::check($request->input('old_password'), $old_password)){
        $user = User::find($user_id);

        $user->password = Hash::make($request->input('password'));

        if ($user->save()){
            return redirect()->back()->with('success', 'Ganti Password Berhasil');
        }else{
            return redirect()->back()->with('error', 'Password Lama Salah');
        }

       }else{
           return redirect()->back()->with('error', 'Password Lama Salah');
       }
    }
}
