<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table ='type_mobil';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'id_type',
        'merk',
        'model',
    ];
    
}
