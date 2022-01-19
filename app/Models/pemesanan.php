<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $table ='pemesanan';
    protected $primaryKey = 'NO_REGIS';  
    protected $fillable = ['NO_REGIS','NO_PESERTA','NO_PROGRAM','TGL_PEMESANAN','TAGIHAN_PEMBAYARAN','STATUS_PEMESANAN','status'];
    public $timestamps = false;

    public function peserta(){
        return $this->belongsTo(peserta::class, 'NO_PESERTA');
    }
    public function program(){
        return $this->belongsTo(program::class, 'NO_PROGRAM');
    }
    public function pembayaran(){
        return $this->hasMany(pembayaran::class, 'NO_PEMBAYARAN');
    }
}
