<x-layout title="Numbers">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">Numbers</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element
               id="#1"
               text="Why learn
                    numbers in
                    English? "
               />

               <x-index-element
               id="#2"
               text="The Cardinals
                        Numbers"
               />

               <x-index-element
               id="#3"
               text="Ordinal Numbers"
               />

            </div>
        </aside>

    <section class="ml-48 px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

        <x-title>Welcome To The Numbers</x-title>

        <x-subtitle id="what-is" >Why Learn Numbers in English?</x-subtitle>

        <div class="relative ml-20 ">

            <p class="paragraph pr-64">In this section, you'll explore numbers in English in a clear
                and simple way. Learning numbers is essential for everyday communication and will help you in various situations, from making purchases to giving instructions.<br><br>

                Get ready to discover how numbers are used in English in different contexts! </p>

                <img src="{{asset('images\numbers\1.png')}}" alt="" class="h-60 absolute right-0 -top-44 -z-10">
        </div>

        <x-subtitle id="1" >The Cardinal Numbers</x-subtitle>

        <p class="ml-20 paragraph">Cardinal numbers are terms that represent the quantity of elements in a set. They are used for counting and expressing amounts. They are fundamental in mathematics and everyday communication.</p>



        {{-- FIRST GRID --}}
        <section class="flex justify-center items-center">
            <article class="grid grid-cols-3 gap-4 max-w-4xl">
                <img src="{{asset('images\tables\numbers-1.png')}}" alt="" class="h-[30rem]">
                <img src="{{asset('images\tables\numbers-2.png')}}" alt="" class="h-[30rem]">
                <img src="{{asset('images\tables\numbers-3.png')}}" alt="" class="h-[30rem]">
        
                <div class="relative">
                    <img src="{{asset('images\icons\exclamation-point.png')}}" alt="" class="absolute">
                    <h3 class="text-[#2C3E50] text-3xl font-bold tracking-wider">Important</h3>
                    <ul>
                        <div>
                            <li>To form the numbers, simply combine the ten with the number from 1 to 9 joined by a hyphen.</li>
                            <p>35 - Thirty-one</p>
                        </div>
                        <div>
                            <li>For the numbers 100 and over, use "and" before units.</li>
                            <p>130 - One hundred and thirty</p>
                        </div>
                    </ul>
                </div>
        
                <div>
                    <img src="{{asset('images\tables\numbers-4.png')}}" alt="">
                    <img src="{{asset('images\tables\numbers-5.png')}}" alt="">    
                </div>
            </article>
        </section>
        
        
    </section>
    </main>


</x-layout>

