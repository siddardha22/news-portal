<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class SubCategory extends Model
{
    use HasFactory , HasSlug;



    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    protected $fillable = [
        'name',
        'category_id'
    ];


    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }





}
