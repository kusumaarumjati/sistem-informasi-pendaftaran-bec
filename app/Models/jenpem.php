<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use Haruncpi\LaravelIdGenerator\IdGenerator;

class jenpem extends Model
{
    use HasFactory;
    protected $table ='jenis_pembayaran';
    protected $primaryKey = 'NO_JENPEM';  
    protected $fillable = ['NO_JENPEM','NAMA_JENPEM','status'];
    public $timestamps = false;

    public function pembayaran(){
        return $this->hasMany(pembayaran::class, 'NO_PEMBAYARAN');
	}

	// public static function boot()
	// {
	//     parent::boot();
	//     self::creating(function ($model) {
	//         $model->uuid = IdGenerator::generate(['table' => $this->table, 'length' => 5, 'prefix' =>'7']);
	//     });
	// }
}
