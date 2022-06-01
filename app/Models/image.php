<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table ='images';
    protected $fillable = [
        'place_id',
        'place_name',
        'url',


    ];
}
