<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class WebsiteImage extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $table = 'website_images';
    protected $fillable = [
        'key',
        'image'
    ];
    public static $images = ['jumbotron', 'favicon', 'brand'];
    public static function getSettingsImage($name){
        $collection = 'assets';
        $webImage = WebsiteImage::where('key', $name)->first();
      
        if(!$webImage) return ;
        return $webImage->getFirstMedia($collection)->getUrl();
    }
}
