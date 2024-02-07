<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function Opportunities(): HasMany
    {
        return $this->hasMany(Opportunity::class, 'hero_id');
    }
}
