<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $primaryKey ='id';

    protected $fillable = [
        'empId',
        'fullname',
        'email',
        'password',
        'mobile',
        'gender',
        'status'
    ];
}
