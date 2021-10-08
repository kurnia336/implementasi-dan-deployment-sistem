<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'ec_districts';

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'city_id', 'city_id');
    }

    public function kelurahan()
    {
        return $this->hasMany(Kelurahan::class, 'dis_id', 'dis_id');
    }
}
