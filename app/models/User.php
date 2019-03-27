<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password'];
    protected $guarded = ['id'];

    public function testMethod()
    {
        return true;
    }
}
