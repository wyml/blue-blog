<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id'];

    protected static function booted()
    {
        static::creating(function (Article $article) {
            $article->user_id = auth()->id();
        });
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, "user_id", "id");
    }
}
