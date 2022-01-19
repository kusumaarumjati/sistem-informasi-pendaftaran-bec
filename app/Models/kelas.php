<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table ='kelas';
    protected $primaryKey = 'NO_KELAS';  
    protected $fillable = ['NO_KELAS','NAMA_KELAS','status'];
    public $timestamps = false;

    public function pertemuan(){
        return $this->hasMany(pertemuan::class, 'NO_PERTEMUAN');
	}
}
