<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'ec_cities';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'prov_id', 'prov_id');
    }

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'city_id', 'city_id');
    }
}
