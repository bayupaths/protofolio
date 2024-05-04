<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title', 'slug', 'content', 'featured_image_url', 'is_published', 'post_category_id', 'user_id'
    ];

    /**
     * category
     *
     * @return void
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'post_category_id');
    }

    /**
     * user
     *
     * @return void
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
