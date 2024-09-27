<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    //untuk perizinan pengisian data ke tabel pada database
    protected $fillable = [
        'name',
        'email',
        'address',
        'jobTitle'
    ];
}
