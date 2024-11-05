<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaptchaImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'answer',
    ];
}
