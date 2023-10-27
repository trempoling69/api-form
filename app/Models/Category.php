<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function fields(): HasMany
    {
        return $this->hasMany(Field::class);
    }
    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
