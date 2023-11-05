<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function tags()
    {
        return $this->hasMany(PostTag::class,'post_id');
    }
    
}
