<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
       'name','last_name','date_of_birth',
        'salary','if_employed','date_of_employ','country'
    ];
}
