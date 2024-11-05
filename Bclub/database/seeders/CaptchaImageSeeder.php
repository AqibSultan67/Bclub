<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaptchaImage;

class CaptchaImageSeeder extends Seeder
{
    public function run()
    {
        $images = [
            ['image_path' => 'captcha_images/captcha1.png', 'answer' => '12'],
            ['image_path' => 'captcha_images/captcha2.png', 'answer' => '16'],
            ['image_path' => 'captcha_images/captcha3.png', 'answer' => '0'],
            ['image_path' => 'captcha_images/captcha4.png', 'answer' => '11'],
            ['image_path' => 'captcha_images/captcha5.png', 'answer' => '12'],
            // Add more captcha images as needed
        ];

        foreach ($images as $image) {
            CaptchaImage::create($image);
        }
    }
}
