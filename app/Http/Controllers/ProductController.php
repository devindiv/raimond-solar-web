<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('home',[
            'products'=> Product::where('featured', true)
            ->latest()->take(3)->get()
        ]);
    }

    public function products() {
        return view('products.products',[
            'products'=> Product::latest()->
            filter(request(['search']))->paginate(6)
        ]);
    }

   /* public function show(Product $product) {
        $products = Product::where('featured', true)
                           ->latest()
                           ->take(3)
                           ->get();
    
        return view('products.show', compact('product', 'products'));
    }*/
                 
    public function show(Product $product) {
        $products = Product::where('featured', true)
                           ->inRandomOrder()
                           ->take(3)
                           ->get();

    
        return view('products.show', compact('product', 'products'));
    }
    

    /*public function show(Product $product) {
        return view('products.show', compact('product'));
    }*/

    public function create() {

        $categories = Category::latest()->get();
        return view('products.create', compact('categories'));
    }


    public function store(Request $request) {
        $slug = Str::slug($request->title, '-');

        $formFields = $request->validate([
            'title'=>'required',
            'price'=>'required',
            'contents'=>'required',
            'description'=>'required',
            'featured' => 'boolean',
        ]);

        if($request->hasFile('product')) {
            $formFields['product'] = $request->file('product')->store('products', 'public');
        }

        $formFields['slug'] = $slug;
        $formFields['category_id'] = $request->category;
        $formFields['user_id'] = auth()->id();

        Product::create($formFields);

        return redirect('/products');
    }

    public function edit(Product $product) {
        $categories = Category::latest()->get();
        return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    //Update Product

    public function update(Request $request, Product $product) {

        //User authorized or not
        if($product->user_id !=auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title'=>'required',
            'price'=>'required',
            'contents'=>'required',
            'description'=>'required',
            'featured' => 'boolean'
        ]);

        if (!isset($formFields['featured'])) {
            $formFields['featured'] = false;
        }

        if($request->hasFile('product')) {
            $formFields['product'] = $request->file('product')->store('products', 'public');
        }
        
        $newSlug = Str::slug($request->title, '-');
        $formFields['category_id'] = $request->category;
        $formFields['slug'] = $newSlug;
        
        $product->update($formFields);

        return redirect('/products/manage');
    }

    public function destroy(Product $product) {
        if($product->user_id !=auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $product->delete();
        return redirect('/products');
    }

    //Manage Products
    public function manage() {
        $products = Product::latest()->paginate(10);
        return view('products.manage', compact('products'));
    }

    /*public function manage() {
        return view('products.manage', ['products' => auth()->user()->products()->get()]);
    }*/
}
