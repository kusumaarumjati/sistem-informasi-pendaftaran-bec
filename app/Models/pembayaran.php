<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table ='pembayaran';
    protected $primaryKey = 'NO_PEMBAYARAN';  
    protected $fillable = ['NO_PEMBAYARAN','NO_JENPEM','NO_PEGAWAI','NO_REGIS','TGL_PEMBAYARAN','TOTAL_PEMBAYARAN','STATUS_PEMBAYARAN','status'];
    public $timestamps = false;

    public function jenpem(){
        return $this->belongsTo(jenpem::class, 'NO_JENPEM');
    }
    public function pegawai(){
        return $this->belongsTo(pegawai::class, 'NO_PEGAWAI');
    }
    public function pemesanan(){
        return $this->belongsTo(pemesanan::class, 'NO_REGIS');
    }
}
