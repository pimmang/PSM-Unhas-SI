<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sertfikat extends Model
{
    use HasFactory;
    protected $fillable = ['nama','lokasi','file','tahun'];
}
