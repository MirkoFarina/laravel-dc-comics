<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// USE STR FOR GENERATE THE SLUG
use Illuminate\Support\Str;

class Comic extends Model
{
    protected $fillable = ['title', 'image', 'price','series', 'sale_date', 'type', 'description', 'slug'];

    public static function generator_slug ($title){
        $slug = Str::slug($title,'-');
        $original_slug = $slug;
        $c = 1;

        $slug_exists = Comic::where('slug', $slug)->first();

        while($slug_exists) {
            $slug = $original_slug . '-' . $c;
            $slug_exists = Comic::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
    use HasFactory;
}
