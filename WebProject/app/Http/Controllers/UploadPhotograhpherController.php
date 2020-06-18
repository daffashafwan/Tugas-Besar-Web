<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadPhotograhpherController extends Controller
{
    public function upload(){
		$gambar = Photographer::get();
		return view('upload',['gambar' => $gambar]);
	}
}
