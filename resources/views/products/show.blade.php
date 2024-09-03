@extends('layout')

@section('content')

<section class="flex flex-col space-y-4 md:space-y-10">
    <div class="text-gray-600 body-font 
    flex flex-col md:flex-row justify-between space-y-12 md:space-y-0
    px-4 py-6 space-x-0 md:px-36 md:space-x-20">
        <img src="{{asset('storage/' . $product->product)}}" alt=""
        class="object-cover object-center h-4/5 md:w-1/2 md:h-[45rem]">
        <div class="md:w-1/2 space-y-4 md:space-y-8">
        <div class="flex flex-col">
            <h1 class="text-neutral-800 text-3xl font-bold uppercase mb-2">{{$product->title}}</h1>            
            <p class="text-neutral-400">₹ {{$product->price}} /unit</p>   
        </div>            
        <p class="">{{$product->description}}</p> 
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                        Contents
                    </th>
                </tr>
            </thead>
            <tbody>
                
                                 
                <tr>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p>{{$product->contents}}</p>
                    </td>
                </tr>
                
            </tbody>
            
        </table>
        
            <form action="" method="post" class="flex justify-between">
                @csrf
                <input type="text" class="border border-gray-200 rounded p-2 w-4/5" name="phone"
                placeholder="Enter your phone number" />
                <button class="px-4 py-2 text-base 
                font-semibold text-white bg-purple-600 
                rounded-md shadow-md hover:bg-purple-700 
                focus:outline-none focus:ring-2 
                focus:ring-purple-500 focus:ring-offset-2 
                focus:ring-offset-purple-200" type="submit">
                    Get a call
                </button>
            </form>
        </div>
    </div>
    
    <div>
        @include('partials._featured')
    </div>
</section>

    
@endsection