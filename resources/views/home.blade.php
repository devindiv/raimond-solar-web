@extends('layout')
@section('title', 'Home')
@section('content')

    <!-- Hero Section -->
  <section class="w-full h-96 md:min-h-screen md:px-36 text-gray-200">
    <div class="flex flex-col w-full h-4/5 justify-center p-4 md:pl-32 bg-[url({{asset('images/solar-energy-hero.jpg')}})]
    space-y-4 md:space-y-12 bg-cover bg-center">
        
    <h1 class="ml-auto font-bold text-center text-sm bg-blue-600 w-1/4 p-2 hidden md:flex">Helpline number: 9073059780 / 9073249403</h1>

    <div class="w-3/4 space-y-2 md:space-y-8">
      <h1 class="font-bold text-xl lg:text-2xl">Complete Solutions for Zero Emission Future</h1>
      <p class="text-sm lg:text-md">We are a vertically integrated solar company that offers customers the highest quality solar energy system.</p>
    </div> 

      <a href="/products" class="flex w-36 h-9 lg:w-48 md:h-12 p-2 justify-around bg-violet-900 items-center">
        <span class="text-sm lg:text-lg">Our Products</span>
        <svg class="h-3 lg:h-4" viewBox="0 0 24 16" fill="none">
          <path d="M23.7071 8.70711C24.0976 8.31658 24.0976 7.68342 23.7071 7.29289L17.3431 0.928932C16.9526 0.538408 16.3195 0.538408 15.9289 0.928932C15.5384 1.31946 15.5384 1.95262 15.9289 2.34315L21.5858 8L15.9289 13.6569C15.5384 14.0474 15.5384 14.6805 15.9289 15.0711C16.3195 15.4616 16.9526 15.4616 17.3431 15.0711L23.7071 8.70711ZM0 9L23 9V7L0 7L0 9Z" fill="#F3F3F3"/>
          </svg>
      </a>

      <!-- Categories -->
      <div class="md:hidden">
        @include('partials._categories')
      </div>
    <div class="hidden md:flex flex-col">
        <h2 class="font-semibold md:text-xl">Categories:</h2>
        <div class="grid grid-cols-2">
          @foreach($categories->take(12) as $category)
           <a href="/categories/{{$category->id}}" class="font-md text-sm hover:text-blue-500">{{$category->name}}</a>
          @endforeach
        </div>
     </div>
      </div>
    </div>
  </section>

  <!-- Latest Products -->
  @include('partials._latest')

  <!-- About Section -->
  <section class="w-full h-80 md:h-[50rem] md:px-36 text-gray-200">
    <div class="flex flex-col w-full h-5/6 justify-center p-4 md:pl-32
    bg-[url('/images/solar-panels-show.webp')] space-y-4 md:space-y-16 bg-cover bg-center">

      <h1 class="font-bold text-xl lg:text-2xl">Efficient Energy, for Everyone</h1>

      <a href="/about" class="flex w-36 h-9 lg:w-48 md:h-12 p-2 justify-around bg-violet-900 items-center">
        <span class="text-sm lg:text-lg">About Us</span>
        <svg class="h-3 lg:h-4" viewBox="0 0 24 16" fill="none">
          <path d="M23.7071 8.70711C24.0976 8.31658 24.0976 7.68342 23.7071 7.29289L17.3431 0.928932C16.9526 0.538408 16.3195 0.538408 15.9289 0.928932C15.5384 1.31946 15.5384 1.95262 15.9289 2.34315L21.5858 8L15.9289 13.6569C15.5384 14.0474 15.5384 14.6805 15.9289 15.0711C16.3195 15.4616 16.9526 15.4616 17.3431 15.0711L23.7071 8.70711ZM0 9L23 9V7L0 7L0 9Z" fill="#F3F3F3"/>
          </svg>
      </a>
    </div>
  </section>

@endsection
