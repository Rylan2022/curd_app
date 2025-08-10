<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurdModel extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';

    protected $fillable = [
        'empId',
        'fullname',
        'email',
        'password',
        'mobile',
        'gender',
        'joining',
    ];
}
