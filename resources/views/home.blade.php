<x-layout title="EnglishJoy">


    <style>
        .slider-container {
              width: calc(100% - 4rem); 
              overflow: hidden; /* Oculta  */
          }
  
          .slider {
              display: flex; 
          }
  
          .card {
              min-width: calc(100% / 3); 
              
              padding: 10px;
              margin: 0;
          }
          

          .card {
              margin: 0; /* Sin margen entre tarjetas */
          }
  
       
          .card:last-child {
              margin-right: 0;
          }
      </style>    
    {{-- Siempre empieza con pt-24 --}}
 
    
    <main class="pt-24">
        <section class="flex justify-between px-28 bg-gradient-to-r from-[#FEFEFE] to-blue-principal-0">
            <div class="mr-28 flex items-center">
                <div class=" flex flex-col items-center justify-center text-center ">
                    <h2 class=" text-[#272727] title text-2xl px-4  ">Learning english doesn't have to be boring</h2>
                    <h2 class="title text-2xl pt-5 ">¡Let's go for it!</h2>
                </div>
            </div> 


            <img class="h-72" src="{{asset('images\hand-drawn-flat-people-talking.png')}}" alt="People Talking">                

        </section>

        
        {{-- LECCIONES --}}


        <section class="mt-12 text-center relative ">

            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 left-0 -z-50 h-[80rem]" >

            <h2 class="title text-4xl mb-8 inline-block">Lessons</h2>
            <p class="paragraph mb-8">Start learning English from the basics with our lessons!</p>

            <section class="relative  ">

                <div class="slider-container pt-8   ml-8 justify-center  relative overflow-hidden ">
                    <div class="slider pb-4 ml-24 flex transition-transform duration-300">

                        {{-- primer slider --}}
                

                    <div class="card  ">
                        <x-card-lesson
                        title="Verb To Be"
                        image="images/verb-tobe.png"
                        description="I, You, He, She..."
                        link="/verb-to-be-lesson"
                        alt="Imagen del verbo To Be"
                    />
                    </div>

                    <div class="card">
                        <x-card-lesson
                        title="Numbers"
                        image="images\numbers.png"
                        description="One, Two, Three..."
                        link="#"
                        alt="Imagen del verbo To Be"
                    />

                    </div>

                    <div class="card">

                        <x-card-lesson
                        title="Present Simple"
                        image="images\present-simple.jpg"
                        description="I like music, You love comics..."
                        link="/present-simple-lesson"
                        alt="Imagen del verbo To Be"
                    />

                    </div>

                    <div class="card">
                        <x-card-lesson
                        title="Present Simple"
                        image="images\present-simple.jpg"
                        description="I like music, You love comics..."
                        link="/present-simple-lesson"
                        alt="Imagen del verbo To Be"
                    />

                    </div>

                    <div class="card">
                        <x-card-lesson
                        title="Present Simple"
                        image="images\present-simple.jpg"
                        description="I like music, You love comics..."
                        link="/present-simple-lesson"
                        alt="Imagen del verbo To Be"
                    />

                    </div>

                    <div class="card">
                        <x-card-lesson
                        title="Present Simple"
                        image="images\present-simple.jpg"
                        description="I like music, You love comics..."
                        link="/present-simple-lesson"
                        alt="Imagen del verbo To Be"
                    />

                    </div>
                    

                   </div>

                 </div>

                 <button class="cursor-pointer absolute left-5 top-1/2 transform -translate-y-1/2" id="prevBtn">
                    <img src="{{asset('images\botonSlider.svg')}}" alt="" class="h-16">
                </button>

                <button class="cursor-pointer absolute right-5 top-1/2 transform -translate-y-1/2" id="nextBtn">
                    <img src="{{asset('images\botonSlider.svg')}}" class="rotate-180 h-16" alt="">
                </button>


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
        </section>

        <section class="relative">

            
            {{-- segundo slider --}}
            <div class="flex justify-center space-x-10  ">

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
                link="/verb-to-be-challenge/1"
            />
            
            </div>
            
            {{-- slider Botones--}}
            <button class="cursor-pointer absolute left-5 top-1/2 transform -translate-y-1/2">
                <img src="{{asset('images\botonSlider.svg')}}" alt="" class="h-16">
            </button>

            <button class="cursor-pointer absolute right-5 top-1/2 transform -translate-y-1/2">
                <img src="{{asset('images\botonSlider.svg')}}" class="rotate-180 h-16" alt="">
            </button>

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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.slider .card');
            let currentIndex = 0; // Índice de la tarjeta actual
        
            function updateSlider() {
             
                const offset = currentIndex * (100 / 3); 
                document.querySelector('.slider').style.transform = `translateX(-${offset}%)`; 
            }
        
            updateSlider();
        
            // Botón anterior
            document.getElementById('prevBtn').addEventListener('click', function () {
                if (currentIndex > 0) {
                    currentIndex--; 
                }
                updateSlider();
            });
           
            // Botón siguiente
            document.getElementById('nextBtn').addEventListener('click', function () {
                if (currentIndex < cards.length - 3) { 
                    currentIndex++; 
                }
                updateSlider();
            });
        });
        </script>
    
</x-layout>
   