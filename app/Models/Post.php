<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slug;

class Post extends Model
{
    use HasFactory;

    protected $fillable= ['user_id','category_id','approved','image_path','body','slug','title'];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function scopeApproved($query)
    {
        return $query->whereApproved(true)->latest();
    }

    public function getImagepathAttribute($img)
    {
        return asset('storage/images/'.$img);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Slug::uniqueSlug($value,'posts');
    }
}
