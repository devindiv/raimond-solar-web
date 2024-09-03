@props(['product'])
<a href="/products/{{$product->slug}}" class="h-96 md:h-[30rem] overflow-hidden 
    drop-shadow-md flex flex-col items-center justify-around">
    <img src="{{asset('storage/' . $product->product)}}" 
    class="h-4/5 w-full object-cover object-center" alt="">
    <div class="flex-col flex items-center">       
    <h3 class="font-semibold text-md text-neutral-800">{{substr($product->title, 0, 23)}}</h3>
    <p class="text-xs lg:text-sm text-neutral-500"> ₹ {{$product->price}}/unit</p>
    </div>
</a>