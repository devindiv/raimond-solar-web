@props(['category'])
<a href="/categories/{{$category->id}}" class="p-1 rounded-md text-[10px] md:text-sm bg-blue-600 text-center">
{{substr($category->name, 0, 15)}}...
</a>