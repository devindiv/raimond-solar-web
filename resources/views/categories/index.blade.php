@extends('layout')
@section('content')
    <div class="min-h-screen flex flex-col">
        <div class="flex mx-auto flex-col space-y-6">

            <button class="w-1/4 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                <a href="{{ route('categories.create') }}">
                    Add New 
                </a>
            </button>
            
            <table>
                <thead>
                    <tr>
                        <th scope="col" class="px-5 py-3 text-sm font-bold text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            Categories
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
                    @if (count($categories) > 0)

                    @foreach ($categories as $category)
                        
                    <tr>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <div class="flex items-center">
                                
                                <div class="ml-3">
                                    <h3 class="text-gray-900 whitespace-no-wrap">
                                        {{$category->name}}
                                    </h3>
                                </div>
                            </div>
                        </td>
                        
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$category->updated_at}}
                            </p>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            <a href="/categories/{{$category->id}}/edit" class="text-indigo-600 
                            flex items-center justify-start hover:text-indigo-900">
                                <ion-icon name="create-outline" class="text-lg"></ion-icon>
                                Edit
                            </a>
                        </td>
                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                            
                            <form method="POST" action="/categories/{{$category->id}}">
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
                          No categories found.
                        </td>
                      </tr>
                    @endif
                    
                </tbody>               
            </table>
            <div class="pb-12 px-10 md:px-36">
                    {{$categories->links()}}
            </div>
            
        </div>
    </div>
@endsection