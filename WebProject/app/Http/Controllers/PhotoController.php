<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
class PhotoController extends Controller
{
    
    public function show(){
    	$gambar = Gambar::get();
    	return view('photoShow', ['gambar'=>$gambar]);
    }
}
