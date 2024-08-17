<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Chat extends Model
{
    use HasFactory;

    public function user(): HasOne
    {
        return $this->hasOne(User::class, "user_id", "id");
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class, "article_id", "id");
    }
}
