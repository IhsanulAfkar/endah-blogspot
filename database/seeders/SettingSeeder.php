<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use App\Models\WebsiteImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = ['title', 'phone', 'email', 'footer'];
        foreach ($settings as $setting) {
            $check = GeneralSetting::where('key', $setting)->first();
            if ($check) continue;
            GeneralSetting::create([
                'key' => $setting,
                'value' => $setting,
            ]);
        }
        $settingImages = WebsiteImage::$images;
        foreach ($settingImages as $setting) {
            $check = WebsiteImage::where('key', $setting)->first();
            if (!$check) {
                $webImg = new WebsiteImage();
                $webImg->key = $setting;
                // $webImg->value = $setting;
                $webImg->save();
            }
        }
    }
}
