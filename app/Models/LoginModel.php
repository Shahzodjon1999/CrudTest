<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;

    protected $Table = "login_models";

    protected $fillable = ['UserName', 'Email', 'Login', 'Password'];
}
