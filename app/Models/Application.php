<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address',
        'gender',
        'school',
        'course',
        'year',
        'degree',
        'ssce',
        'certificate',
        'cover_letter',
        'email',
        'status',
    ];
}
