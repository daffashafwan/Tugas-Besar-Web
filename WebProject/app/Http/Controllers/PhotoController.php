<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use App\User;
class PhotoController extends Controller
{
    
    public function show(){
    	$gambar = Gambar::get();
    	return view('photoShow', ['gambar'=>$gambar]);
    }
    
    public function cari(Request $request){
		
		$cari = $request->cari;
 
    //$gambar = Gambar::where('keterangan', $cari)->get();
		//$gambar = Gambar::table('gambar')
		//->where('keterangan','like',"%".$cari."%")
		//->paginate();
 		$gambar = Gambar::query()->where('keterangan','like',"%".$cari."%")->get();
    //$email = $gambar->email;
    //$user = User::query()->where('email', like, "%".$email."%")->first();
		return view('photoShow',['gambar' => $gambar]);
 
		}
}
