@extends('layout')
@section('content')
    <div class="min-h-screen">
        <div class="bg-gray-50 font-montserrat mb-24 border border-gray-200 space-y-4
        rounded p-6 max-w-lg mx-auto mt-24 flex flex-col items-center justify-center">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Create a Category</h2>     
            </header>
            <form method="POST" action="/categories/{{$category->id}}" >
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <input type="text" placeholder="Enter category name"
                    class="border border-gray-200 rounded p-2 w-full" name="name"
                      value="{{old('name')}}" />
            
                    @error('name')
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
    </div>
@endsection