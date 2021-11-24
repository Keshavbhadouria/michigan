<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;  //extend model below for custom login


class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['password'];
}
