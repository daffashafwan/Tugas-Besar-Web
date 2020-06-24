<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Gambar;

class PhotograhpherController extends Controller
{
    public function show(){
    	$gambar = DB::table('gambar')->join('users', 'gambar.email','=','users.email')->select('gambar.*', 'users.*')->get();
    	return view('photographer',['gambar'=>$gambar]);
    }
    //
}
