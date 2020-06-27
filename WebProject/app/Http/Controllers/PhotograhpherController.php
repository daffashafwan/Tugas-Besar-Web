<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Gambar;

class PhotograhpherController extends Controller
{
    public function show(){
    	$User = User::get();
    	$id_collect = DB::table('gambar')->pluck('user_id');
    	$gambar = Gambar::whereIn('user_id', $id_collect)->get();
    	return view('photographer',['User'=>$User, 'gambar'=>$gambar]);
    }
    //
}
