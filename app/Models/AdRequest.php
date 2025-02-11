<?php

namespace App\Models;

use App\AdPlatform;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdRequest extends Model
{
    /** @use HasFactory<\Database\Factories\AdRequestFactory> */
    use HasFactory;

    protected $casts = [
        'platform' => AdPlatform::class
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
