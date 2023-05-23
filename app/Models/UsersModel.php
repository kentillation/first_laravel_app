<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;

    protected $table = "tbl_users";

    protected $fillable = ['name', 'fb_name', 'age', 'address', 'contact', 'email', 'email_verified_at', 'username', 'password', 'remember_token', 'created_at', 'updated_at'];
}
