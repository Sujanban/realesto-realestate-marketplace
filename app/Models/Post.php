<?php

namespace App\Models;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'author',
        'slug',
        'location',
        'price',
        'area',
        'body',
        'feature',
        'bedroom',
        'washroom',
        'garage',
        'kitchen',
        'contact',
        'cover',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }

}
