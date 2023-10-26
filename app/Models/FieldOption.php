<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FieldOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'value',
        'ratio',
        'field_id',
    ];

    public function fields(): BelongsTo
    {
        return $this->belongsTo(Field::class);
    }
}
