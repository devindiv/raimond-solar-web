@extends('layout')
@section('content')
<div class="flex flex-col">
    <h1 class="mx-auto font-bold text-xl md:text-2xl uppercase">{{ $category->name }}</h1>
    <div class="grid grid-cols-1 mt-6 mb-12 gap-6
sm:grid-cols-2 md:grid-cols-3 px-10 md:px-36 min-h-screen pt-12 md:py-16">
  @foreach ($products as $product)
    <x-product-card :product="$product" />
  @endforeach
</div>
<div class="pb-12 px-10 md:px-36">
                    {{$products->links()}}
            </div>
</div>
@endsection