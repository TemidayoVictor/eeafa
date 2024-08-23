<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailing extends Model
{
    use HasFactory;

    protected $table = 'mailings';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];
}
