<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'jabber',
    ];

    protected $hidden = [
        'password',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
