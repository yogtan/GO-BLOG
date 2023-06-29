<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [

        [
            "title" => "Judul Post rtma",
            "slug" => "judul-post-pertama",    
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, perferendis totam facilis saepe reiciendis officia cupiditate autem molestias aliquid voluptatem quam id laudantium praesentium voluptate architecto at nemo. Quibusdam, sapiente?"
        ],
        [
            "title" => "Judul Post Keuda",
            "slug" => "judul-post-kedua",       
            "body" => "Lorem ipsum dolorthrdthrth  rrtr sit amet consectetur adipisicing elit. Rem, perferendis totam facilis saepe reiciendis officia cupiditate autem molestias aliquid voluptatem quam id laudantium praesentium voluptate architecto at nemo. Quibusdam, sapiente?"
        ],

    ];



    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', '$slug');
    }
}
