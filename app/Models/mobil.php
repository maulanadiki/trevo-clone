<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;
    protected $table ='mobil';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'id_type',
        'nopol',
        'cc',
        'warna',
        'tarif',
        'foto_mobil',
        'qty'
    ];
}
