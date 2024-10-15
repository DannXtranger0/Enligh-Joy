
<x-layout title="EnglishJoy">

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

        
        {{-- LECCIONES primer slider --}}

         <section class="mt-12 text-center relative">
            <img src="{{ asset('images/hoja-grande.png') }}" alt="" class="absolute -top-52 left-0 -z-50 h-[80rem]">
        
            <h2 class="title text-4xl mb-8 inline-block">Lessons</h2>
            <p class="paragraph mb-8">Start learning English from the basics with our lessons!</p>
        
            <div class="slider-container  pt-8 pb-10 relative overflow-hidden mx-4 sm:mx-6 md:mx-12 lg:mx-24">
                <div class="slider ml-4 transition-all  duration-500 flex ">
                   
                    
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                        title="Environment"
                        image="images/enviroment-img.png"
                        description="Caring for our planet"
                        link="/enviroment"
                        alt="Imagen del verbo To Be"
                        />
                    </div>
                    
                    
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                            title="Verb To Be"
                            image="images/verb-tobe.png"
                            description="I, You, He, She..."
                            link="/verb-to-be-lesson"
                            alt="Imagen del verbo To Be"
                        />
                    </div>
        
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                            title="Numbers"
                            image="images/numbers.png"
                            description="One, Two, Three..."
                            link="/numbers-lesson"
                            alt="Imagen de los números"
                        />
                    </div>
        
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                            title="Present Simple"
                            image="images/present-simple.jpg"
                            description="I like music, You love comics..."
                            link="/present-simple-lesson"
                            alt="Imagen del presente simple"
                        />
                    </div>
        
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                        title="Routines"
                        image="images\routines.png"
                        description="I always wake up at 7AM"
                        link="/routines-lesson"
                        alt="Imagen del verbo To Be"
                        />
                    </div>

                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                        title="TheArticles"
                        image="images\articles.png"
                        description="A, An and The"
                        link="/articles-lesson"
                        alt="Imagen del verbo To Be"
                        />
                    </div>

                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                        title="Past Simple"
                        image="images/past.png"
                        description="Talk about what happened before"
                        link="#"
                        alt="Imagen del verbo To Be"
                        />
                    </div>

                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-lesson
                        title="Future Simple"
                        image="images\future.png"
                        description="Describe your plans and predictions"
                        link=""
                        alt="Imagen del verbo To Be"
                        />
                    </div>
                 
                </div>

            </div>
        
            <button class="cursor-pointer absolute left-5 top-1/2 transform -translate-y-1/2" id="prevBtn1">
                <img src="{{ asset('images/botonSlider.svg') }}" alt="" class="h-16">
            </button>
        
            <button class="cursor-pointer absolute right-5 top-1/2 transform -translate-y-1/2" id="nextBtn1">
                <img src="{{ asset('images/botonSlider.svg') }}" class="rotate-180 h-16" alt="">
            </button>
            
        </section>  
        
    
        {{-- lecciones segundo slider --}}
        <section class="bg-gradient-to-r from-blue-principal-0 to-[#FEFEFE] flex items-center justify-between  px-10 mt-24">

            <img src="{{asset('images\personas-juntas.png')}}" class="w-96" alt="People Talking">
            <a href="#" class="btn h-fit">Lessons</a>
            
            <div class="text-center pr-36 space-y-5">
                <h2 class="title">¡Learn Now!</h2>
                <p class="paragraph font-medium">All the lessons</p>
            </div>
        </section> 

       
        
        <section class="mt-12 relative text-center">
            <img src="{{asset('images/hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]">
            <h2 class="title text-4xl mb-8 inline-block">Challenges</h2>
            <p class="paragraph mb-8">Test your knowledge of English with our challenges!</p>
        
            <section class="slider-container  pt-8 pb-10 relative overflow-hidden mx-4 sm:mx-6 md:mx-12 lg:mx-24">
                <div class="slider ml-4 transition-all duration-500 flex">
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-challenge title="Routines" image="images/routines.png" description="" link="#" />
                    </div>
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-challenge title="Past Simple" image="images/past.png" description="" link="#" />
                    </div>
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-challenge title="Verb To Be" image="images/verb-tobe.png" description="" link="/verb-to-be-challenge/1" />
                    </div>
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-challenge title="Future Simple" image="images/future.png" description="" link="#" />
                    </div>
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-challenge title="Future Simple" image="images/future.png" description="" link="#" />
                    </div>
                    <div class="card flex-none w-full sm:w-1/2 md:w-1/3 p-2">
                        <x-card-challenge title="Future Simple" image="images/future.png" description="" link="#" />
                    </div>
                </div>
            </section>
            
            <button class="cursor-pointer absolute left-5 top-1/2 transform -translate-y-1/2" id="prevBtn2">
                <img src="{{ asset('images/botonSlider.svg') }}" alt="" class="h-16">
            </button>
        
            <button class="cursor-pointer absolute right-5 top-1/2 transform -translate-y-1/2" id="nextBtn2">
                <img src="{{ asset('images/botonSlider.svg') }}" class="rotate-180 h-16" alt="">
            </button>
            
        </section>
        


    </main>

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
        title="Total inmersion"
        description="Try to immerse yourself in the language completely: change the language on your phone, listen to music in English, and try to think in English."
        image="images\tips\concentrada.png"
        />

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Configurar Slider 1
            setupSlider1();
            
            // Configurar Slider 2
            setupSlider2();
        });
    
        function setupSlider1() {
            const slider = document.querySelector('.slider-container:first-of-type .slider');
            const cards = slider.querySelectorAll('.card');
            let currentIndex = 0; 
    
            function updateSlider() {
                const offset = currentIndex * (100 / 3); // Muestra 3 tarjetas
                slider.style.transform = `translateX(-${offset}%)`;
            }
    
            updateSlider();
    
            document.getElementById('prevBtn1').addEventListener('click', function () {
                if (currentIndex > 0) {
                    currentIndex--; 
                }
                updateSlider();
            });
    
            document.getElementById('nextBtn1').addEventListener('click', function () {
                if (currentIndex < cards.length - 3) { 
                    currentIndex++; 
                }
                updateSlider();
            });
        }
    
        function setupSlider2() {
            const slider = document.querySelector('.slider-container:nth-of-type(2) .slider'); // Cambiado a nth-of-type(2)
            const cards = slider.querySelectorAll('.card');
            let currentIndex = 0; 
    
            function updateSlider() {
                const offset = currentIndex * (100 / 3); // Muestra 3 tarjetas
                slider.style.transform = `translateX(-${offset}%)`;
            }
    
            updateSlider();
    
            document.getElementById('prevBtn2').addEventListener('click', function () {
                if (currentIndex > 0) {
                    currentIndex--; 
                }
                updateSlider();
            });
    
            document.getElementById('nextBtn2').addEventListener('click', function () {
                if (currentIndex < cards.length - 3) { 
                    currentIndex++; 
                }
                updateSlider();
            });
        }
    </script>
    
    
        
    
</x-layout>
    