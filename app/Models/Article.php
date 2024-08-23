<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id', 'type'];

    protected static function booted()
    {
        static::creating(function (Article $article) {
            $article->user_id = auth()->id();
        });
    }

    protected function type(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value == 0 ? '文章' : '随心贴'
        );
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, "user_id", "id");
    }
}
