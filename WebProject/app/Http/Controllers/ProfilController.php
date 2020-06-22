<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfilController extends Controller
{
    public function index($id)
    {
    	// mengambil data dari table profil
    	//$profil = DB::table('profil')->get();

$users = DB::table('users')->where('id',$id)->get();
//return redirect('/profil');
    	// mengirim data profil ke view index
    	return view('index',['users' => $users]);

    }


public function edit($id)
{
	
	$users = DB::table('users')->where('id',$id)->get();
	// passing data profil yang didapat ke view edit.blade.php
	return view('edit',['users' => $users]);
 
}
public function update(Request $request)
{
	// update data profil
	DB::table('users')->where('id',$request->id)->update([
		'name' => $request->name,
		'Alamat' => $request->alamat,
		'jenis_kelamin' => $request->jenis_kelamin,
		'Tanggal_Lahir' => $request->tanggal_lahir,
		'experience' => $request->experience
	]);
	// alihkan halaman ke halaman profil
	
	return redirect('/profil/'. $request->id);
}

}