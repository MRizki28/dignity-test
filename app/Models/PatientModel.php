<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientModel extends Model
{
    use HasFactory;

    protected $table = 'patients';
    protected $fillable = [
        'name',
        'gender',
        'birthdate',
    ];


    // tidak perlu menambahkan guarded karena tidak ada field yang ingin dikecualikan
    // protected $guarded = [];
}
