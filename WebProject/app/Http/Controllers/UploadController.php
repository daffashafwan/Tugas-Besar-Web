<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;
use App\User;
use Auth;

class UploadController extends Controller
{
	public function upload(){
		$gambar = Gambar::get();
		$User = User::get();
		return view('upload',['gambar' => $gambar, 'User' => $User ]);
	}
	public function hapus($id){
		
		Gambar::destroy($id);
		return redirect('/upload')->with(['success' => 'gambar terhapus']);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);

		
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();
		$userEmail = Auth::user()->email;
		$userName = Auth::user()->name;
		
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Gambar::create([
			'name' =>$userName,
			'email' => $userEmail,
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);

		return redirect()->back();
	}
}
