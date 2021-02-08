<?php

namespace App\Models;
use App\Http\Controllers\TokoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesans extends Model
{
    use HasFactory;
    protected $guarded = ['gambar'];
}
