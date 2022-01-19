<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahunajar extends Model
{
    use HasFactory;
    protected $table ='tahun_ajar';
    protected $primaryKey = 'ID_TAHUNAJAR';  
    protected $fillable = ['ID_TAHUNAJAR','TAHUNAJAR','status'];
    public $timestamps = false;

    public function pertemuan(){
        return $this->hasMany(pertemuan::class, 'NO_PERTEMUAN');
	}
}
