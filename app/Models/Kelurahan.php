<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'ec_subdistricts';

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'dis_id', 'dis_id');
    }

    public function customer()
    {
        return $this->hasMany(Customer::class, 'kel_id', 'subdis_id');
    }

   public function kodepos()
    {
        return $this->hasOne(Kodepos::class, 'subdis_id', 'subdis_id');
    }
}
