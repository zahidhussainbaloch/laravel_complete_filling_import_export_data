<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;

      
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'nic_number',
        'city',
        'full_addres',
    ];
}
