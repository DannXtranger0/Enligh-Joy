<x-layout title="EnglishJoy">

    {{-- Siempre empieza con pt-24 --}}
    
    <main class="pt-24">
        <section class="flex justify-between px-28 bg-gradient-to-r from-[#FEFEFE] to-blue-principal-0">
            <div class="mr-28 flex items-center">
                <div class=" flex flex-col items-center justify-center text-center ">
                    <h2 class=" text-[#272727] title text-xl px-4  ">Learning english doesn't have to be boring</h2>
                    <h2 class="title text-xl pt-5 ">¡Lets got for it!</h2>
                </div>
            </div> 


            <img class="h-72" src="{{asset('images\hand-drawn-flat-people-talking.png')}}" alt="People Talking">                

        </section>

        
        {{-- LECCIONES --}}


        <section class="mt-12 text-center relative ">

            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 left-0 -z-50 h-[80rem]" >

            <h2 class="title text-4xl mb-8 inline-block">Lessons</h2>
            <p class="paragraph mb-8">Start learning English from the basics with our lessons!</p>

            <section class="relative ">
            
                {{-- slider Botones--}}
                {{-- <div class="absolute flex justify-between w-full top-1/2 transform -translate-y-1/2 px-5 -z-10 ">
                   
                  
                </div> --}}
        
                <button class="cursor-pointer absolute left-5 top-1/2 transform -translate-y-1/2">
                    <img src="{{asset('images\botonSlider.svg')}}" alt="" class="h-16">
                </button>

                <button class="cursor-pointer absolute right-5 top-1/2 transform -translate-y-1/2">
                    <img src="{{asset('images\botonSlider.svg')}}" class="rotate-180 h-16" alt="">
                </button>


                {{-- Slider Lecciones --}}
                <div class="flex justify-center space-x-10 ">

             

                    <x-card-lesson
                        title="Verb To Be"
                        image="images/verb-tobe.png"
                        description="I, You, He, She..."
                        link="/verb-to-be-lesson"
                        alt="Imagen del verbo To Be"
                    />

                    <x-card-lesson
                        title="Numbers"
                        image="images\numbers.png"
                        description="One, Two, Three..."
                        link="#"
                        alt="Imagen del verbo To Be"
                    />

                    <x-card-lesson
                        title="Present Simple"
                        image="images\present-simple.jpg"
                        description="I like music, You love comics..."
                        link=""
                        alt="Imagen del verbo To Be"
                    />
                    

                </div>
            </section>
        </section>
    
        {{-- mini banner --}}
        <section class="bg-gradient-to-r from-blue-principal-0 to-[#FEFEFE] flex items-center justify-between  px-10 mt-24">

            <img src="{{asset('images\personas-juntas.png')}}" class="w-96" alt="People Talking">
            <a href="#" class="btn h-fit">Lessons</a>
            
            <div class="text-center pr-36 space-y-5">
                <h2 class="title">¡Learn Now!</h2>
                <p class="paragraph font-medium">All the lessons</p>
            </div>
        </section>


        {{-- RETOS --}}
        

        <section class="mt-12 relative text-center  ">
            
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <h2 class="title text-4xl mb-8 inline-block">Challenges</h2>
            <p class="paragraph mb-8">Test your knowledge of English with our challenges!</p>

            {{-- slider Botones--}}
            <button class="cursor-pointer absolute left-5 top-1/2 transform -translate-y-1/2">
                <img src="{{asset('images\botonSlider.svg')}}" alt="" class="h-16">
            </button>

            <button class="cursor-pointer absolute right-5 top-1/2 transform -translate-y-1/2">
                <img src="{{asset('images\botonSlider.svg')}}" class="rotate-180 h-16" alt="">
            </button>

    

            {{-- Slider Lecciones --}}
            <div class="flex justify-center space-x-10 ">

                <x-card-challenge
                title="Routines"
                image="images\routines.png"
                description=""
                link="#"
            />

                <x-card-challenge
                title="Past Simple"
                image="images\past.png"
                description=""
                link="#"
            />

                <x-card-challenge
                title="Verb To Be"
                image="images\verb-tobe.png"
                description=""
                link="#"
            />
            
            </div>
        </section>
    </section>

    {{-- segundo mini-banner --}}

    <section class="bg-gradient-to-r from-blue-principal-0 to-[#FEFEFE] flex items-center justify-between h-44  px-10 my-24">

        <img src="{{asset('images\chica-pc.png')}}" class="w-60" alt="People Talking">
        
        <div class="text-center  space-y-5 flex flex-col items-center justify-center">
            <h2 class="title">¡Learn Now!</h2>
            <p class="paragraph font-medium">All the challenges here</p>
            <a href="#" class="btn">Challenges</a>
        </div>

        <img src="{{asset('images\chico-pc.png')}}" class="w-60" alt="People Talking">

    </section>

    </main>


    {{-- Tips para aprender ingles --}}


    <section class="px-5 space-y-36 -my-14 relative mb-5">
        <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 left-0 -z-50 h-[80rem]" >

        <h2 class="title text-center ">Tips to learn English faster</h2>

        <x-tip
        title="Don't be afraid to make mistakes"
        description="Learning a new language means making mistakes, and that's okay. 

            The important thing is to learn from those mistakes and keep practicing."
        image="images\tips\meditando.png"
        />

        
        <x-tip
        title="Listen to English every day"
        description="Constant exposure to the language is key to improving your listening comprehension and pronunciation.   
            Listen to podcasts, watch movies or series in English, or follow the news in this language."
        image="images\tips\escuchando-musica.png"
        />

        
        <x-tip
        title="Practice speaking with native speakers"
        description="Practicing with native English speakers will help you become familiar with everyday expressions and improve your fluency.
            Look for online language exchanges or join conversation groups."
        image="images\tips\nativos.png"
        />

        <x-tip
        title="Total immersion"
        description="Try to immerse yourself in the language completely: change the language on your phone, listen to music in English, and try to think in English."
        image="images\tips\concentrada.png"
        />

    </section>
    

</x-layout>
   