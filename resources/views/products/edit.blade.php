@extends('layout')

@section('content')
    

<div class="bg-gray-50 font-montserrat mb-24 border border-gray-200 rounded p-6 p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit: {{$product->title}}</h2>
     
    </header>

    <form method="POST" action="/products/{{$product['slug']}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          value="{{$product->title}}" />

        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Price</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price"
          value="{{$product->price}}" />

        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="contents" class="inline-block text-lg mb-2">Contents</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contents"
          value="{{$product->contents}}" />

        @error('contens')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
            Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include content, specifications etc.">{{$product->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <label for="featured">Featured</label>
      <input type="checkbox" name="featured" value="1" {{ $product->featured ? 'checked' : '' }}>
      

       <div class="mb-6">
        <label for="product" class="inline-block text-lg mb-2">
          Product Image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="product" />

        @error('product')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div> 


      <div class="mb-6 flex items-center justify-around">
        <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-md shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
            Edit
        </button>

        <a href="/" class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-neutral-800 rounded-md shadow-md hover:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" > Back </a>
      </div>
    </form>
</div>

@endsection
