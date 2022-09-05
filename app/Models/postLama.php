<?php

namespace App\Models;

# 1. Di dalam Post.php kita bikinnya manual, kita tidak hubungkan ke Model miliknya Laravel
class Post
{
    private static $blog_posts = [    # 2. => bikin datanya manual tidak dari database
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Niken Precilia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam itaque nostrum eum unde esse amet! Harum doloremque eos consequuntur autem quidem corrupti cupiditate iure veniam amet cum. Obcaecati id quam ex perspiciatis at atque illo ullam iure saepe vel sapiente quaerat quos, eius quisquam, officiis tenetur cumque harum assumenda eos praesentium culpa. Optio doloremque iste eligendi quod vitae, nisi tempore delectus labore ratione repudiandae non quaerat quae vero possimus facilis suscipit voluptate a doloribus molestias ut molestiae odit commodi?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Niken Precilia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam itaque nostrum eum unde esse amet! Harum doloremque eos consequuntur autem quidem corrupti cupiditate iure veniam amet cum. Obcaecati id quam ex perspiciatis at atque illo ullam iure saepe vel sapiente quaerat quos, eius quisquam, officiis tenetur cumque harum assumenda eos praesentium culpa. Optio doloremque iste eligendi quod vitae, nisi tempore delectus labore ratione repudiandae non quaerat quae vero possimus facilis suscipit voluptate a doloribus molestias ut molestiae odit commodi?"
        ]
    ];

    public static function all()    # 3. membuat 2 buah Method Juga Manual all() dan find()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
