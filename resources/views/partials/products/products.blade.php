@extends('layout')
@section('title', 'Products')
@section('content')

    <!-- Page Header -->


    <div x-data="{ gradient: 0 }" 
     x-init="setInterval(() => { gradient = (gradient + 1) % 360 }, 100)" 
     class=" md:px-36">
    <div class="w-full h-80 md:h-96 flex flex-col space-y-4 
       md:space-y-12 uppercase justify-center items-center md:items-start px-6 md:px-36
       bg-[url('/images/products-page-hero.png')] bg-cover bg-center">
       <p class="font-semibold text-sm md:w-1/2 text-center md:text-left text-neutral-200 md:text-lg">
        Our panels are designed to be future proof and come with industry-leading warranties.</p>

       <form action="/products"
    class="flex flex-col justify-between w-3/4 max-w-sm space-y-2
    md:flex-row md:w-full md:space-x-3 md:space-y-0">
      <div>
          <input type="text" id="find-product" name="search"
          class=" rounded-lg border-transparent flex-1 
          appearance-none border border-gray-300 w-full 
          py-2 px-4 bg-white text-gray-700 placeholder-gray-400 
          shadow-sm text-base focus:outline-none focus:ring-2 
          focus:ring-purple-600 focus:border-transparent" 
          placeholder="search"/>
          </div>
          <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white 
          bg-accent rounded-lg shadow-md hover:bg-purple-900 
          focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 
          focus:ring-offset-purple-200" type="submit">
              Search
          </button>
      </form>       
    </div>    
</div>
  

<div class="grid grid-cols-1 mt-6 mb-12 gap-6
sm:grid-cols-2 md:grid-cols-3 px-10 md:px-36 min-h-screen pt-12 md:py-16">
  @foreach ($products as $product)
    <x-product-card :product="$product" />
  @endforeach
</div>   

<div class="pb-12 px-10 md:px-36">
  {{$products->links()}}
</div>
</main>
@endsection