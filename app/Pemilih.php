<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    public $table = "pemilih";

    protected $fillable = [
    	'nama','nim','email','jurusan_id','status','password'
    ];

    public function kandidat()
    {
    	return $this->belongsToMany('App\Kandidat');
    }

    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan');
    }
}
