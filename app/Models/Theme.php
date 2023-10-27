<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function forms(): HasMany
    {
        return $this->hasMany(Form::class);
    }

    public function celebrities(): HasMany
    {
        return $this->hasMany(Celebrity::class);
    }
}
