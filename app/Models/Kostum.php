<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kostum extends Model
{
    use HasFactory;
    protected $fillable = ['nama','lokasi','foto','jumlah','kondisi'];
}
