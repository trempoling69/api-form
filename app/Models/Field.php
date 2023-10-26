<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'form_id',
        'order',
    ];

    public function forms(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }

    public function FieldOptions(): HasMany
    {
        return $this->hasMany(FieldOption::class);
    }
}
