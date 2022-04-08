<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function blogs() {
        return $this->belongsTo(blogs::class);
    }

    public $fillable = ['comment','blog_id','user_id'];
}
