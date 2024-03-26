<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'idpost';

    protected $fillable = [
        'title',
        'content',
        'date',
        'username',
    ];

    // Relationship with account
    public function account()
    {
        return $this->belongsTo(Account::class, 'username', 'username');
    }
}
