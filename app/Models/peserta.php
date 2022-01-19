<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    use HasFactory;
    protected $table ='peserta';
    protected $primaryKey = 'NO_PESERTA';  
    protected $fillable = ['NO_PESERTA','NIK_AYAH','NAMA_PESERTA','ALAMAT_PESERTA','TELP_PESERTA','PEKERJAAN','PENDIDIKAN','TEMPATLAHIR','TGL_LAHIR','STATUS_PESERTA','USERNAME','PASSWORD','status'];
    public $timestamps = false;

    public function wali(){
        return $this->belongsTo(wali::class, 'NIK_AYAH');
    }

     public function pemesanan(){
        return $this->hasMany(pemesanan::class, 'NO_REGIS');
	}

	public function pertemuan(){
        return $this->hasMany(pertemuan::class, 'NO_PERTEMUAN');
	}
}
