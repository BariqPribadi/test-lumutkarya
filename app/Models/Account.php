<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Account extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $primaryKey = 'username';
    public $incrementing = false; // karena primary key adalah varchar

    protected $fillable = [
        'username',
        'password',
        'name',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    // Relationship with posts
    public function posts()
    {
        return $this->hasMany(Post::class, 'username', 'username');
    }
}
