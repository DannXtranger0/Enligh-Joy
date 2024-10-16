{{-- <a href="{{$route}}"  class="flex space-x-4 text-wrap items-center group bg-[#E7E7E7] px-2 rounded-lg shadow-md shadow-gray-400 ">
    <div class="aspect-square my-2 text-center flex justify-center items-center h-16 rounded-full border-2 border-purple-principal-0      title">
        <p>{{$number}}</p>
    </div>

    <p class="paragraph text-sm text-center ">{{$text}}</p>
</a >
 --}}

<a href="{{ $route }}"  
   class="flex space-x-4 text-wrap items-center group bg-[#E7E7E7] px-2 rounded-lg shadow-md shadow-gray-400 
   {{ request()->is(trim($route, '/')) ? 'shadow-none text-white' : '' }}">
    <div class="aspect-square my-2 text-center flex justify-center items-center h-16 rounded-full border-2 
        {{ request()->is(trim($route, '/')) ?  ' border-purple-principal-0' : ' border-[#333333]' }} title">
        
        <p class="{{request()->is(trim($route,'/')) ? 'text-purple-principal-0' : ''}}" >{{ $number }}</p>
    </div>
    <p class="paragraph text-sm text-center">{{ $text }}</p>
</a>
