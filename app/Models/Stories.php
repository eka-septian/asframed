<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stories extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description'
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
