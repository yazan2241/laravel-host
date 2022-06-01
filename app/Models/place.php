<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table ='places';
    protected $fillable = [

        'name',
        'location',
        'GoogleMap',
        'category',

        'details'

    ];
}
