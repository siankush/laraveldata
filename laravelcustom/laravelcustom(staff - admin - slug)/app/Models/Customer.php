<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'email', 'phone', 'address', 'type','password','image', 'slugname'];
}
