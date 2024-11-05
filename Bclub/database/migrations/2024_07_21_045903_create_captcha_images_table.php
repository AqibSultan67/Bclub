<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaptchaImagesTable extends Migration
{
    public function up()
    {
        Schema::create('captcha_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path'); // Path to the image file
            $table->string('answer'); // Correct answer to the captcha question
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('captcha_images');
    }
}
