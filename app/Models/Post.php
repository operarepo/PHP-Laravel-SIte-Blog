<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'intro',
        'content',
        'slug']; // не забыть добавить поля для присвоения, не то рабоатть не будет!!!

        protected static function boot()
        {
            parent::boot();
            static::creating(function ($post) {
            $post->slug = Str::slug($post->title);});
        }
}
?>
