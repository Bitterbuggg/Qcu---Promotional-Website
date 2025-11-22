<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['title','excerpt','content','published_at','slug'];
    public $timestamps = false;
}
