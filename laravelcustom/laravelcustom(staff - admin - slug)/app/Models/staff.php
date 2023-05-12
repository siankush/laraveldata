<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class staff extends Authenticatable
{
    use HasFactory;

    protected $table = 'staff';
    protected $primaryKey = 'id';

    protected $fillable = ['customer_id','name', 'email', 'phone', 'address','password'];
}
