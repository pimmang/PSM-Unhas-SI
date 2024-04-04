<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partitur extends Model
{
    use HasFactory;
    protected $fillable = ['judul','lokasi','file','jumlah'];
}
