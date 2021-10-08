<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
    use HasFactory;
    protected $table = 'ec_postalcode';

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'subdis_id', 'subdis_id');
    }
}
