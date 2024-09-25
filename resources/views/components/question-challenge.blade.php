@props(['color', 'start', 'finish', 'number_question', 'a', 'b', 'c'])

<div id="question-{{ $number_question }}" class="question border-3 rounded-md space-y-5 px-5 py-2 relative" style="border: 3px solid purple;">
    <p class="paragraph font-medium">{{ $start }} <input type="text" disabled class="border-b-2 border-black w-10 disabled:bg-transparent outline-none"> {{ $finish }}</p>

    <div class="flex items-center space-x-4">
        <input type="radio" name="question-{{ $number_question }}" id="q{{ $number_question }}-a" value="{{ $a }}" style="accent-color: {{ $color }}" class="scale-150">
        <label for="q{{ $number_question }}-a" class="paragraph">{{ $a }}</label>
    </div>

    <div class="flex items-center space-x-4">
        <input type="radio" name="question-{{ $number_question }}" id="q{{ $number_question }}-b" value="{{ $b }}" style="accent-color: {{ $color }}" class="scale-150">
        <label for="q{{ $number_question }}-b" class="paragraph">{{ $b }}</label>
    </div>

    <div class="flex items-center space-x-4">
        <input type="radio" name="question-{{ $number_question }}" id="q{{ $number_question }}-c" value="{{ $c }}" style="accent-color: {{ $color }}" class="scale-150">
        <label for="q{{ $number_question }}-c" class="paragraph">{{ $c }}</label>
    </div>

    <!-- Contenedor para las imágenes en la esquina derecha -->
    <div class="absolute top-2 right-2">
        <img id="icon-{{ $number_question }}" class="w-5 inline hidden" alt="">
    </div>
</div>




{{-- @props(['color', 'start', 'finish', 'number_question', "a","b","c"]) --}}

{{-- <div class="border-[{$color}] rounded-md space-y-5 px-5 py-2">
    <p class="paragraph font-medium">{{$start}} <input type="text" disabled  class="border-b-2 border-black w-10 disabled:bg-transparent outline-none"> {{$finish}}</p>

        <div class="flex items-center space-x-4">
            <input type="radio" name="question-{{$number_question}}"  id="q{{$number_question}}-a" class="scale-150 accent-[{{$color}}]">
            <label for="q{{$number_question}}-a"  class="paragraph">{{$a}}</label>
        </div>
        <div class="flex items-center space-x-4">
            <input type="radio" name="question-{{$number_question}}"  id="q{{$number_question}}-b" class="scale-150 accent-[{{$color}}]">
            <label for="q{{$number_question}}-b"  class="paragraph">{{$b}}</label>
        </div>
        <div class="flex items-center space-x-4">
            <input type="radio" name="question-{{$number_question}}"  id="q{{$number_question}}-c" class="scale-150 accent-[{{$color}}]">
            <label for="q{{$number_question}}-c"  class="paragraph">{{$c}}</label>
        </div>
</div> --}}


{{-- <div class="border-[3px] border-purple-principal-0 rounded-md space-y-5 px-5 py-2">
    <p class="paragraph font-medium">1. She <input type="text" disabled  class="border-b-2 border-black w-10 disabled:bg-transparent outline-none"> my sister</p>

        <div class="flex items-center space-x-4">
            <input type="radio" name="question-1"  id="q1-a" class="scale-150 accent-purple-principal-0">
            <label for="q1-a"  class="paragraph">am</label>
        </div>
        <div class="flex items-center space-x-4">
            <input type="radio" name="question-1"  id="q1-b" class="scale-150 accent-purple-principal-0">
            <label for="q1-b"  class="paragraph">is</label>
        </div>
        <div class="flex items-center space-x-4">
            <input type="radio" name="question-1"  id="q1-c" class="scale-150 accent-purple-principal-0">
            <label for="q1-c"  class="paragraph">are</label>
        </div>
</div> --}}

