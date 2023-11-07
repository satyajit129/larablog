<?php

namespace App\Models;

use App\Models\PostTag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(PostCategory::class,'post_category_id','id');
    }
    public function subcategory()
    {
        return $this->belongsTo(PostSubcategory::class,'post_sub_category_id','id');
    }

    // public function tags()
    // {
    //     return $this->hasMany(Tag_Post::class,'post_id');
    // }
    public function tags()
{
    return $this->belongsToMany(PostTag::class, 'tag__posts', 'post_id', 'post_tag_id');
}
    
}
