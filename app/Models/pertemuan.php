<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertemuan extends Model
{
    use HasFactory;
    protected $table ='pertemuan';
    protected $primaryKey = 'NO_PERTEMUAN';  
    protected $fillable = ['NO_PERTEMUAN','ID_TAHUNAJAR','NO_KELAS','NO_PEGAWAI','NO_PESERTA','JUMLAH_PERTEMUAN','status'];
    public $timestamps = false;

    public function tahunajar(){
        return $this->belongsTo(tahunajar::class, 'ID_TAHUNAJAR');
    }

    public function kelas(){
        return $this->belongsTo(kelas::class, 'NO_KELAS');
    }

    public function pegawai(){
        return $this->belongsTo(pegawai::class, 'NO_PEGAWAI');
    }

    public function peserta(){
        return $this->belongsTo(peserta::class, 'NO_PESERTA');
    }
    
}
