@props(['title', 'image', 'description', 'link' => '#', 'alt' => ''])

<a href="{{ $link }}" class="h-auto block shadow-md rounded-lg w-80 bg-[#FEFEFE] hover:shadow-blue-principal-0 hover:scale-110 duration-150 transition-all">
    <img src="{{ asset($image) }}" class="w-80 rounded-tl-lg rounded-tr-lg " alt="{{ $alt }}">
    <div class="flex flex-col justify-center items-center p-5">
        <h3 class="title text-2xl">{{ $title }}</h3>
        <p class="paragraph mt-2 text-wrap text-center">{{ $description }}</p>
    </div>
</a>


