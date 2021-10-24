<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'staffid','first_name', 'last_name', 'email', 'password', 'department', 'phone', 'address','company_id'
    ];
    public function full_name()
    {
       return "{$this->first_name} {$this->last_name}";
    }
    public function company()
    {
        return $this->belongsTo('App\Company','company_id');
    }
}
