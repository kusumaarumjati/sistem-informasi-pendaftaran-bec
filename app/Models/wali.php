<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    use HasFactory;
    protected $table ='wali';
    protected $primaryKey = 'NIK_AYAH';  
    protected $fillable = ['NIK_AYAH','NAMA_AYAH','PEKERJAAN_AYAH','PENDIDIKAN_AYAH','TELP_AYAH','NIK_IBU','NAMA_IBU','PEKERJAAN_IBU','PENDIDIKAN_IBU','TELP_IBU','status'];
    public $timestamps = false;

    public function peserta(){
        return $this->hasMany(peserta::class, 'NO_PESERTA');
	}
}
