<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
          'title' => 'Judul Post Pertama',
          'slug' => 'judul-post-pertama',
          'author' => 'Along',
          'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quasi sunt quo nemo dolorem cum nisi dignissimos laudantium deleniti consequatur voluptas iure, soluta beatae dicta consequuntur atque nobis facilis laborum culpa dolore corporis libero. Dignissimos, voluptate nesciunt vitae necessitatibus reiciendis laborum iste rem similique temporibus unde rerum soluta quidem dicta distinctio velit consequatur itaque. Sunt cupiditate odit adipisci deserunt, atque ad nesciunt deleniti saepe molestiae magni maiores iusto voluptate veniam nostrum, ut tempora tenetur officiis. Ut maxime deleniti explicabo ducimus.'
        ],
        [
          'title' => 'Judul Post Kedua',
          'slug' => 'judul-post-kedua',
          'author' => 'Taufik',
          'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel atque, in fugiat, voluptatem sit corrupti quidem quasi odio repellendus illum repellat eum? A nam consequatur totam, aut molestias necessitatibus iste neque, at aliquam, numquam perferendis quaerat corrupti dolorum rerum? Voluptas magnam eius ipsa error possimus doloremque explicabo consectetur dolorum aut quaerat beatae, sapiente modi nemo inventore odit minus soluta laborum nobis? Vel sequi ratione molestias. Cumque nostrum dicta beatae possimus atque voluptatem cupiditate, incidunt nihil! Molestias neque ducimus ratione iusto nulla, reprehenderit impedit corrupti voluptatum ipsum natus aliquam optio adipisci enim eaque dolorum cum laboriosam quia, explicabo recusandae dolores culpa?'
        ]
    ];

    public static function all()
    {
      return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
      $posts = static::all();
      // $post = [];
      // foreach($posts as $p){
      //   if($p['slug'] === $slug ){
      //     $post = $p;
      //   }
      // }

    return $posts->firstWhere('slug', $slug);

    }

}
