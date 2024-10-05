<x-layout title="Daily Routines">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">Daily Routines</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element 
               id="#1"
               text="What Are"
               />

               <x-index-element 
               id="#2"
               text="Routines in the Morning"
               />

               <x-index-element 
               id="#3"
               text="Routines in the Afternoon"
               />
               
               <x-index-element 
               id="#4"
               text="Routines in the Night"
               />
            
            </div>
        </aside>
    
    <section class="ml-48 px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

        <x-title>Daily Routines</x-title>

        <p class="ml-20 paragraph mr-40">Learn how to describe daily routines in English and understand 
            the vocabulary associated with common activities.</p>

        <x-subtitle id="1" >What Are Daily Routines?</x-subtitle>
        
        <div class="relative">
            <img src="{{asset('images\routines\1.png')}}" alt="" class="absolute right-0 -top-20 h-72">
            <p class="ml-20 paragraph  mr-72">Daily routines are essential parts of our 
                lives that help us stay organized. In this 
                section, you'll learn how to describe 
                common daily activities in English, 
                from waking up to going to bed.</p>

            <p class="ml-20 paragraph  mr-72"><br>Having a specific time to do homework 
                each day helps establish a routine and 
                develop good habits.</p>    
        </div>
    </section>
          {{-- mini banner --}}

          <section class="bg-gradient-to-r from-blue-principal-0 to-[#FEFEFE] flex items-center justify-between px-56 ml-52 mt-24  ">

                <img src="{{asset('images\routines\2.png')}}" class="h-32" alt="People Talking">

            
            <div class="text-center ml-32">
                <x-subtitle id="2">Routines In the Morning</x-subtitle>
            </div>
        </section>


        <section class="ml-48 px-10">
        
           {{-- Primera Tabla --}}   
           <div class="flex justify-center my-10">
               <img src="{{asset('images\tables\routines-1.png')}}" alt="" class="w-3/4">
           </div>

        </section>

         {{-- segundo mini banner --}}

         <section class="bg-gradient-to-r from-[#DCF523] to-[#90D892] flex items-center justify-between px-56 ml-52 mt-24  ">

        <div class="text-center mr-32">
            <x-subtitle id="3">Routines in the afternoon</x-subtitle>
        </div>

        <img src="{{asset('images\routines\3.png')}}" class="h-32" alt="People Talking">

        </section>


    {{-- Routines Afternoon Section --}}
    <section class="ml-48 px-10">
        <article class="grid grid-cols-3 gap-2 my-10">

            <div class="w-80 bg-[#1CEDB1] flex flex-col justify-center items-center space-y-5 py-5 rounded-md text-center px-3">
                <img src="{{asset('images\routines\4.png')}}" alt="" class="h-52">
                <h3 class="title text-xl">Have Lunch</h3>
                <p class="paragraph">I usually <span class="text-white font-semibold">have lunch</span> at 1 PM</p>
            </div>

            <div class="w-80 bg-blue-principal-0 flex flex-col justify-center items-center space-y-5 py-5 rounded-md text-center px-3">
                <img src="{{asset('images\routines\5.png')}}" alt="" class="h-52">
                <h3 class="title text-xl">Take a Nap</h3>
                <p class="paragraph">He likes to <span class="text-white font-semibold">take a nap</span> after lunch</p>
            </div>

            <div class="w-80 bg-purple-principal-0 flex flex-col justify-center items-center space-y-5 py-5 rounded-md text-center px-3">
                <img src="{{asset('images\routines\6.png')}}" alt="" class="h-52">
                <h3 class="title text-xl">Watch TV</h3>
                <p class="paragraph">They <span class="text-white font-semibold">Watch TV</span> in the afternoon</p>
            </div>

            <div class="w-80 bg-orange-smooth-0 flex flex-col justify-center items-center space-y-5 py-5 rounded-md text-center px-3">
                <img src="{{asset('images\routines\7.png')}}" alt="" class="h-52">
                <h3 class="title text-xl">Go to the Gym</h3>
                <p class="paragraph">She <span class="text-white font-semibold">Goes to the gym</span> around 5 pm</p>
            </div>


            <div class="w-80 bg-[#B7284C] flex flex-col justify-center items-center space-y-5 py-5 rounded-md text-center px-3">
                <img src="{{asset('images\routines\8.png')}}" alt="" class="h-52">
                <h3 class="title text-xl">Walk the Dog</h3>
                <p class="paragraph">I <span class="text-white font-semibold">walk my dog</span> every afternoon</p>
            </div>

            <div class="w-80 bg-[#28b79a] flex flex-col justify-center items-center space-y-5 py-5 rounded-md text-center px-3">
                <img src="{{asset('images\routines\9.png')}}" alt="" class="h-52">
                <h3 class="title text-xl">Do Homework</h3>
                <p class="paragraph">I <span class="text-white font-semibold">do homework</span> at PM</p>
            </div>

        </article>

    </section>

    {{-- Third Mini-Banner --}}

    <section class="bg-gradient-to-r from-[#ffd782] via-[#3E3D76] to-[#3E3D76] flex items-center justify-around px-28 ml-52 mt-24  ">

        <div class="text-center mr-5  ">
            <x-subtitle id="4">Routines in the Night</x-subtitle>
        </div>

        <img src="{{asset('images\routines\10.png')}}" class="h-32" alt="People Talking">

        </section>


        <section class="ml-48 px-10">
            <article class="grid grid-cols-2 gap-10 my-10">
                
                <div class="border-4 border-blue-principal-0 rounded-md p-3 flex items-center w-[28rem]">
                    <img src="{{asset('images\routines\11.png')}}" alt="" class="h-44">
                    <div class="flex flex-col justify-center items-center text-center space-y-5">
                        <h3 class="title text-2xl">Have Dinner</h3>
                        <p class="paragraph font-semibold">We usually <span class="text-orange-smooth-0">have dinner</span> at 7PM every evening</p>
                    </div>
                </div>

                <div class="border-4 border-blue-principal-0 rounded-md p-3 flex items-center w-[28rem]">
                    <img src="{{asset('images\routines\12.png')}}" alt="" class="h-44">
                    <div class="flex flex-col justify-center items-center text-center space-y-5">
                        <h3 class="title text-2xl">Read a Book</h3>
                        <p class="paragraph font-semibold">I <span class="text-orange-smooth-0">read a book</span> for 15 minutes.</p>
                    </div>
                </div>

                <div class="border-4 border-[#912F2F] rounded-md p-3 flex items-center w-[28rem]">
                    <img src="{{asset('images\routines\13.png')}}" alt="" class="h-44">
                    <div class="flex flex-col justify-center items-center text-center space-y-5">
                        <h3 class="title text-2xl">Listen to Music</h3>
                        <p class="paragraph font-semibold">I <span class="text-orange-smooth-0">listen to music</span> before bed</p>
                    </div>
                </div>

                <div class="border-4 border-[#912F2F] rounded-md p-3 flex items-center w-[28rem]">
                    <img src="{{asset('images\routines\14.png')}}" alt="" class="h-44">
                    <div class="flex flex-col justify-center items-center text-center space-y-5">
                        <h3 class="title text-2xl">Brush your teeth</h3>
                        <p class="paragraph font-semibold">She <span class="text-orange-smooth-0">brushes her teeth </span> after dinner</p>
                    </div>
                </div>

                <div class="border-4 border-green-400  rounded-md p-3 flex items-center w-[28rem]">
                    <img src="{{asset('images\routines\15.png')}}" alt="" class="h-44">
                    <div class="flex flex-col justify-center items-center text-center space-y-5">
                        <h3 class="title text-2xl">Go to Bed</h3>
                        <p class="paragraph font-semibold">I <span class="text-orange-smooth-0">go to bed </span> at 10 PM</p>
                    </div>
                </div>

                <div class="border-4 border-green-400 rounded-md p-3 flex items-center w-[28rem]">
                    <img src="{{asset('images\routines\16.png')}}" alt="" class="h-44">
                    <div class="flex flex-col justify-center items-center text-center space-y-5">
                        <h3 class="title text-2xl">Go to Sleep</h3>
                        <p class="paragraph font-semibold">He <span class="text-orange-smooth-0">go to sleep </span> early</p>
                    </div>
                </div>
            </article>
        </section>
   
    </main>
    

</x-layout>

