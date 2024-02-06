<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'photo',
        'codename',
        'phoneNumber',
        'email',
        'password',
    ];

    protected $hidden = [];
    protected $casts = [
        'name' => 'json', 
    ];
    public $incrementing = false;
    protected $keyType = 'string';
}
