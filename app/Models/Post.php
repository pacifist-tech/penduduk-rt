<?php

namespace App\Models;


class Post
{
    private static $posts = [
        [
        "title"=> "Post Pertama",
        "slug"=> "post-pertama",
        "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, minus! Quam totam quidem impedit ullam? Incidunt qui, maiores vel quis molestias porro reiciendis, eius ducimus earum blanditiis explicabo aliquam provident."
        ],
        [
            "title"=> "Post Kedua",
            "slug"=> "post-kedua",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, minus! Quam totam quidem impedit ullam? Incidunt qui, maiores vel quis molestias porro reiciendis, eius ducimus earum blanditiis explicabo aliquam provident."
            ]
    ];

    public static function all(){
        return collect(self::$posts);
    }

    public static function find($slug){

        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
