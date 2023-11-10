<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer_raw',
        'profil',
        'user_id',
        'form_id',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function forms(): BelongsTo
    {
        return $this->belongsTo(Form::class, 'form_id');
    }
}
