<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    //NOTE: post types: text, image, video, link, ...
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getPostDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
