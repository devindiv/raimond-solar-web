@extends('layout')

@section('content')
    

<div class="bg-gray-50 font-montserrat mb-24 border border-gray-200 rounded p-6 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create a Product</h2>
     
    </header>

    <form method="POST" action="/products" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
          value="{{old('title')}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="price" class="inline-block text-lg mb-2">Price</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price"
          value="{{old('price')}}" />

        @error('price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="contents" class="inline-block text-lg mb-2">Contents</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contents"
          value="{{old('contents')}}" />

        @error('contents')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
            Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include content, specifications etc.">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <label for="category">Choose a category:</label>

      <select id="category" name="category">
        @foreach ($categories as $category)      
          <option value="{{$category->id}}">{{ $category->name }}</option>
        @endforeach
        
      </select>
      
      <label for="featured">Featured:</label>
    <input type="checkbox" name="featured" id="featured" value="1">

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
            Add New
        </button>

        <a href="/" class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-neutral-800 rounded-md shadow-md hover:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" > Back </a>
      </div>
    </form>
</div>

@endsection
