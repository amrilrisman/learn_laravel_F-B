<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    private static $data_blog = [
        [
            "title" => "Judul Pertama dari Blog",
            "slug" => "judul-pertama-dari-blog",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, eveniet alias aperiam molestiae in aliquid fugit veritatis nam dolore facere recusandae repudiandae dolor officia officiis hic ratione error sapiente perspiciatis voluptas quaerat. Debitis ratione, officia accusantium dolor eos consequatur minima ipsum, fuga quaerat impedit omnis nemo amet! Incidunt, modi optio? Minus adipisci dignissimos quis mollitia hic aperiam magnam cum, natus exercitationem recusandae magni architecto molestiae dolorem fugiat voluptate illum quod consectetur repellendus vitae suscipit pariatur laudantium saepe explicabo nobis. Esse odit temporibus libero, cum nobis officia? Iste iusto consectetur error quos, quo ex, dolore beatae commodi pariatur quas quis saepe."
        ],
        [
            "title" => "Judul Kedua dari Blog",
            "slug" => "judul-kedua-dari-blog",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, eveniet alias aperiam molestiae in aliquid fugit veritatis nam dolore facere recusandae repudiandae dolor officia officiis hic ratione error sapiente perspiciatis voluptas quaerat. Debitis ratione, officia accusantium dolor eos consequatur minima ipsum, fuga quaerat impedit omnis nemo amet! Incidunt, modi optio? Minus adipisci dignissimos quis mollitia hic aperiam magnam cum, natus exercitationem recusandae magni architecto molestiae dolorem fugiat voluptate illum quod consectetur repellendus vitae suscipit pariatur laudantium saepe explicabo nobis. Esse odit temporibus libero, cum nobis officia? Iste iusto consectetur error quos, quo ex, dolore beatae commodi pariatur quas quis saepe."
        ]
    ];

    private static $about =  [
        "title" => "profile",
        "name" => "Amril Rismanto Ichsan",
        "age" => 18,
        "email" => "amrilrisman@gmail.com"
    ];

    public static function profile()
    {
        return self::$about;
    }

    public static function data()
    {
        return collect(self::$data_blog);
    }

    public static function detailData($slug)
    {

        $data = static::data();
        return $data->firstWhere("slug", $slug);
    }
}
