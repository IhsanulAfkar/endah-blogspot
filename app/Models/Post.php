<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;
class Post extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'image',
        'title',
        'slug',
        'content',
        'is_published',
        'category_id',
        'labels',
        'published_at',
        'views',
    ];
    protected $casts = [
        'is_published' => 'boolean'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function getCleanContent() {
        $cleaned = Str::of(strip_tags(str_replace('<br>', "\n", $this->content)))->trim();

        return Str::limit($cleaned, 150);
    }
}
