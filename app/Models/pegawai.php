<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table ='pegawai';
    protected $primaryKey = 'NO_PEGAWAI';  
    protected $fillable = ['NO_PEGAWAI','NAMA_PEG','JABATAN_PEG','ALAMAT_PEG','EMAIL_PEG','TELP_PEG','USERNAME','PASSWORD','status'];
    public $timestamps = false;

    public function pertemuan(){
        return $this->hasMany(pertemuan::class, 'NO_PERTEMUAN');
	}
	public function pembayaran(){
        return $this->hasMany(pembayaran::class, 'NO_PEMBAYARAN');
	}
}
