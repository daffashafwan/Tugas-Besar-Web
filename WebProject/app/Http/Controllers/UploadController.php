<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gambar;
use App\User;
use Auth;

class UploadController extends Controller
{	
	public function upload($id){
		$gambar = Gambar::get();
		$User = User::get();
		$UserId = $id;
		return view('upload',['User' => $User,'gambar'=>$gambar]);
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
			'user_id' => $request->id,
		]);

		return redirect()->back();
	}
}
