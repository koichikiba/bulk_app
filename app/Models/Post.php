<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
        'memo',
        'category_id'
    ];

    protected $appends = [
        'user_name',
    ];

    protected $hidden = [
        'user_id',
        'updated_at',
        'user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getUserNameAttribute()
    {
        return $this->user->name;
    }
}
