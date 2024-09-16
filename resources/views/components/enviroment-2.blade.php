@props(['title','text','img'])
<div class="w-72 shadow-md bg-white shadow-gray-400 rounded-lg space-y-2 flex flex-col py-3 justify-center items-center text-center px-3 pb-4">
    <h4 class="paragraph font-semibold">{{$title}}</h4>
    <img src="{{asset($img)}}" alt="" class="h-28 ">
    <p class="paragraph text-lg">{{$text}}</p>
</div>