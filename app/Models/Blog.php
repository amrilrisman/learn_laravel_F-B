<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /// ingin spesifik filed yang ingin di isi
    // protected $fillable = [
    //     'title', 'sorth_desc', 'description',
    // ];

    /// mengisi filed kecuali yang di masukan
    protected $guarded = [
        'id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}




// Blog::created([
//     'title' => "Judul Pertama Dari Blog",
//     'category_id' => 3,
//     'slug' => 'judul-Pertama-dari-blog',
//     'sorth_desc' => "sorth judul deskripsi dari blog Pertama",
//     'description' => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam nesciunt eveniet illum aspernatur eligendi ipsum sapiente, non voluptatem nihil porro deleniti repellat soluta quibusdam iure facere.</p><p>Dignissimos itaque consectetur, dolorum laborum pariatur voluptatum esse explicabo error dolor sint sed ad quae cupiditate illum voluptatem accusamus asperiores tenetur placeat iusto tempora magnam perferendis. Quasi amet reiciendis quis ab totam magni sunt, excepturi iste reprehenderit consequatur sint dolorem beatae neque vero quas possimus numquam. Incidunt sit eius nostrum quidem consectetur, reprehenderit doloremque. Quidem, temporibus officiis ex quia culpa aperiam nobis nesciunt non minus, obcaecati dignissimos quas, cumque distinctio iure ducimus deleniti velit!</p>",
// ]);
