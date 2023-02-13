<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];



    public function profileImage()
    {
        $imagepath = ($this->image) ? $this->image : '/profile/zfMW5QYvVsHXbRtTfL3oLgVKz0JsHKNNjdgwuikk.png';
        return '/storage/' . $imagepath ;
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
