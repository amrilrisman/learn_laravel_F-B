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
}

// Blog::create([
//     'title' => "title judul ke 7 Blog",
//     'sorth_desc' => "title judul ke 7 Blog",
//     'description' => "title judul ke 7 Blog",
// ]);
