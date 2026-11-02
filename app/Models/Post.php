<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
protected $primaryKey = 'id';

use HasFactory;
public function comments()
{
    return $this->hasMany(Comment::class);
}
    protected $table = 'post';

    protected $fillable = ['title', 'body', 'published', 'author'];
   public function tags()
{
    return $this->belongsToMany(Tag::class, 'post_tag');
}
   
   
  
}