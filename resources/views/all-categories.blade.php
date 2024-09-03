@extends('layout')
@section('content')

<section class="min-h-screen">
    <h1 class="font-bold text-md md:text-2xl text-center my-4 md:my-8">Explore all our Categories</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 p-4 md:px-36">
        @foreach($categories as $category)
        <a href="/categories/{{$category->id}}" class="p-4 border border-gray-300 rounded-md flex items-center justify-center hover:bg-gray-100 transition duration-300">
            {{ $category->name }}
        </a>
        @endforeach
    </div>
</section>

@endsection
