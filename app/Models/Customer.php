<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = ['id_customer', 'nama', 'alamat', 'foto', 'file_path','id_kel'];
    public $timestamps = false;

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kel_id', 'subdis_id');
    }
}
