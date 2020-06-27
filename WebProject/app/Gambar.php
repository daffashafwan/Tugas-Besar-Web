<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
		protected $table = "gambar";
		protected $fillable = ['file','keterangan','email', 'name', 'user_id'];
    //
    
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
