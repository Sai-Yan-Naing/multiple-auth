<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'staffid','first_name', 'last_name', 'email', 'password', 'department', 'phone', 'address','company_id'
    ];
}
