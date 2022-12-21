<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = false;

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags','post_id','tag_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function getImageUrlAttribute(){
         return url('storage/' . $this->preview_image);
    }
}
