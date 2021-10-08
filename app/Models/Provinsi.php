<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'ec_provinces';

    public function kota()
    {
        return $this->hasMany(Kota::class, 'prov_id', 'prov_id');
    }
}
