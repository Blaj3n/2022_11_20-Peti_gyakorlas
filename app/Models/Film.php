<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $primaryKey = 'film_id';
    protected $fillable = [
        'nev',
        'forgalmazo_id',
        'hossz',
        'besorolas'
    ];
}
