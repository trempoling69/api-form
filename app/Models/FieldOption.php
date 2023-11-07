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
        'ratio',
        'field_id',
        'skill_id',
    ];

    public function fields(): BelongsTo
    {
        return $this->belongsTo(Field::class, 'field_id');
    }

    public function skills(): BelongsTo
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }
}
