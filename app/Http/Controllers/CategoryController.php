<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function detailCategory(Category $category)
    {
        return view("detail_category", [
            "data" => $category,
            "dataBlog" => $category->blog
        ]);
    }
}
