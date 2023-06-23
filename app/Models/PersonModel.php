<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    use HasFactory;

    //public $timestamps = false;

    protected $Table ="person_models";

    protected $fillable =['Name','LastName','Address','Email','PhoneNumber'];
}
