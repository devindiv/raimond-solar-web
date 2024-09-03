@extends('layout')

@section('content')
    <!-- Products -->
  
  <section id="products" class="container md:mt-24 flex flex-col
  mx-auto px-5 lg:px-10 md:min-h-screen">
  <!-- Page Title -->
  <div class="flex flex-col items-center justify-between md:flex-row">
    <div class="flex flex-col items-center md:items-start">
      <h2 class="font-montserrat text-center font-semibold
      text-heading text-2xl md:text-3xl">Our Products</h2>
      <span class="w-36 h-1 bg-accent mt-1 mb-4 md:mb-0" ></span>
    </div>
    <!-- Categories -->
    
    <form action="/products"
    class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 
    md:flex-row md:w-full md:space-x-3 md:space-y-0">
      <div class=" relative ">
          <input type="text" id="find-product" name="search"
          class=" rounded-lg border-transparent flex-1 
          appearance-none border border-gray-300 w-full 
          py-2 px-4 bg-white text-gray-700 placeholder-gray-400 
          shadow-sm text-base focus:outline-none focus:ring-2 
          focus:ring-purple-600 focus:border-transparent" 
          placeholder="search"/>
          </div>
          <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
              Search
          </button>
      </form>

  </div>

  <div class="grid grid-cols-1 mt-12 mb-12 gap-y-10 gap-x-6 
  sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8
  ml-auto mr-auto md:ml-0">

  @foreach ($products as $product)
  <x-product-card :product="$product" />
@endforeach
        

    



  </div>   
</section>
<div class="mt-2 p-4">
  {{$products->links()}}
</div>
</main>
@endsection