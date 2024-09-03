<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()
            ->take(3)
            ->get();

        $categories = Category::all();

        return view('home', compact('products', 'categories'));
    }

    public function getCategories()
    {
        $categories = Category::latest()->get();

        return view('all-categories', compact('categories'));
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getContact()
    {
        return view('contact');
    }
}
