@extends('layout')
@section('content')
    <div class="min-h-screen">
    <div class="mx-auto space-y-2 bg-gray-50 flex flex-col items-center justify-center p-6">
                <form action="/categories" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="font-bold">Enter category name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"/>
                
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                      </div>

                    <button class="flex-shrink-0 px-4 py-2 text-base 
                    font-semibold text-white bg-purple-600 rounded-md 
                    shadow-md hover:bg-purple-700 focus:outline-none 
                    focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 
                    focus:ring-offset-purple-200" type="submit">
                        Add New
                    </button>
                </form>
            </div>
    </div>
@endsection