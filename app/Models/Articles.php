<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

class Articles extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'image',
        'slug',
        'user_id',
    ];

    /**
     * Get the user that owns the Articles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get all articles
     *
     * @return \Illuminate\Support\Collection
     */

    public function getAllArticles(): Collection
    {
        return Articles::all();
    }

    /**
     * Get article by slug
     *
     * @param string $slug
     * @return \App\Models\Articles
     */

    public function getArticleBySlug(string $slug): Articles
    {
        return Articles::where('slug', $slug)->firstOrFail();
    }
}
