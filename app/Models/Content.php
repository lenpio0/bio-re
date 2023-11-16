<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'mail',
        'tel',
        'tiktok',
        'adress1',
        'adress2',
        'fb',
        'insta',
        'resonance',
        'massage',
        'pp'
    ];
}
