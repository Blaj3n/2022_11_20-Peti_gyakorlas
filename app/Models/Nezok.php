<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nezok extends Model
{
    use HasFactory;

    protected $primaryKey = 'nezok_id';
    protected $fillable = [
        'user_id',
        'film_id'
    ];
}
