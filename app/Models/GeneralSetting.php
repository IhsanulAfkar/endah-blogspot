<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class GeneralSetting extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $table = 'general_settings';
    protected $fillable = [
        'key', 'value'
    ];
    public static function getValue($key){
        $setting = GeneralSetting::where('key', $key)->first();
        if(!$setting) return '';
        return $setting->value;
    }
}
