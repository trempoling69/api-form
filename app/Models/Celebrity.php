<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Celebrity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'theme_id',
        'profil',
        'photo'
    ];

    public function themes(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }
}
