<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Define which attributes are mass assignable
    protected $fillable = [
        'content', // Single content column
    ];

    // Optionally, specify the format of timestamps if needed
    protected $dates = ['created_at', 'updated_at'];
}
