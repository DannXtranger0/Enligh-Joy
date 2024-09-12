@props(['title','description', 'image', 'alt'=>''])
<article class="relative">
    <div class=" -mt-14">
        <div class="bg-blue-principal-0 px-5 space-x-5  w-1/2 h-10 flex items-center rounded-lg">
            <img src="{{asset('images\icons\estrella.svg')}}" alt="" class="w-8">
            <h3 class="title text-2xl  text-white">{{$title}}</h3>
        </div>
        <p class="w-1/2 paragraph my-5">{{$description}}</p>
    </div>
   <img src="{{asset($image)}}" alt="" class="h-60 pr-20 absolute right-0 top-1/2 transform -translate-y-1/2 opacity-80">
</article>