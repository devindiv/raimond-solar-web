@extends('layout')

@section('content')
    
<section class="px-5 lg:px-10 md:min-h-screen font-montserrat">
    
    <div class="container  px-4 mx-auto sm:px-8">
        <div class="py-12">
            <div class="flex flex-row justify-between w-full mb-1 sm:mb-0">
                <h2 class="text-2xl font-semibold text-neutral-800">
                    Products
                </h2>
                <div class="text-end">
                    <form class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0">
                        <div class=" relative ">
                            <input type="text" id="find-product" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="search"/>
                            </div>
                            <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                                Filter
                            </button>
                            <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                                <a href="/products/create">
                                    Add New 
                                </a>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                    <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                        Products
                                    </th> 
                                    <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                        Last Updated
                                    </th>
                                    <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                        
                                    </th>
                                    <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                        
                                    </th>
                                    <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products) > 0)

                                @foreach ($products as $product)
                                    
                                <tr>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-3">
                                                <a href="/products/{{$product['slug']}}" class="text-gray-900 whitespace-no-wrap">
                                                    {{$product->title}}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$product->updated_at}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        <a href="/products/{{$product['slug']}}/edit" class="text-indigo-600 
                                        flex items-center justify-start hover:text-indigo-900">
                                            <ion-icon name="create-outline" class="text-lg"></ion-icon>
                                            Edit
                                        </a>
                                    </td>
                                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                        
                                        <form method="POST" action="/products/{{$product['slug']}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="font-semibold leading-tight text-red-900">Delete</button>
                                          </form>
                                    </td>
                                </tr>

                                @endforeach

                                @else
                                <tr>
                                    <td colspan="4" class="px-5 py-5 text-sm bg-white border-b border-gray-200 text-gray-500 text-center">
                                      No products found.
                                    </td>
                                  </tr>
                                @endif
                                
                            </tbody>
                            
                        </table>
                        

                        
                    </div>
                </div>
            </div>
        </div>
    
     </section>

@endsection