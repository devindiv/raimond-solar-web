@extends('layout')

@section('content')
    

<div class="bg-gray-50 font-montserrat mb-24 border border-gray-200 rounded p-6 p-10 max-w-lg mx-auto mt-24">
    
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
        <p class="mb-4">Create an account</p>
      </header>
  
      <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
          <label for="name" class="inline-block text-lg mb-2"> Name </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />
  
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">Email</label>
          <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password" class="inline-block text-lg mb-2">
            Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
            value="{{old('password')}}" />
  
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="password2" class="inline-block text-lg mb-2">
            Confirm Password
          </label>
          <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
            value="{{old('password_confirmation')}}" />
  
          @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
            <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-md shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                Sign Up
            </button>
        </div>
  
        <div class="mt-8">
          <p>
            Already have an account?
            <a href="/login" class="text-accent">Login</a>
          </p>
        </div>
      </form>

</div>

@endsection