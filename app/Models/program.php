<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    protected $table ='program';
    protected $primaryKey = 'NO_PROGRAM';  
    protected $fillable = ['NO_PROGRAM','NAMA_PROGRAM','BIAYA_MASUK',
    'BIAYA_BULANAN','status'];
    public $timestamps = false;

    public function pemesanan(){
        return $this->hasMany(pemesanan::class, 'NO_REGIS');
	}
}
