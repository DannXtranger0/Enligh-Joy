<x-layout title="Lessons">

    <main class="pt-24">

        {{-- titulo --}}

        <div class="flex items-center justify-center space-x-10 py-10 relative">
       
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-1/2 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <img src="{{asset("images/icons/estrella.svg")}}" alt="" class="h-9">
            <h1 class="title text-5xl">¡Learn what you want!</h1>
            <img src="{{asset("images/icons/estrella.svg")}}" alt="" class="h-9">
        </div>

        <p class="paragraph text-center px-32">Learning English is easier than you think! With lessons designed for A1-A2 learners, you'll build strong basics while having fun.</p>
        {{-- Nivel --}}
        
        <div class="bg-blue-principal-0 w-1/3 h-12 items-center rounded-full flex  ml-10 space-x-8 my-16 ">
            <p class="bg-[#FFC107] h-16 aspect-square rounded-full flex justify-center items-center title text-white">1</p>
            <p class="title text-white text-2xl font-semibold">Easy</p>
        </div>

        {{-- Lecciones --}}


        <section class="grid grid-cols-3 px-20 gap-10 ">
       
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
            link="numbers-lesson"
            alt="Imagen del verbo To Be"
            />

            <x-card-lesson
            title="Present Simple"
            image="images\present-simple.jpg"
            description="I like music, You love comics..."
            link="/present-simple-lesson"
            alt="Imagen del verbo To Be"
        />
        
            <div class="flex col-span-3 justify-center ">

                    <x-card-lesson
                    title="Enviroment"
                    image="images/enviroment-img.png"
                    description="Caring for our planet"
                    link="/enviroment"
                    alt="Imagen del verbo To Be"
                />

                
            </div>

        </div>
        </section>

        <div class="bg-blue-principal-0 w-1/3 h-12 items-center rounded-full flex  ml-10 space-x-8  my-16 ">
            
            <p class="bg-[#FFC107] h-16 aspect-square rounded-full flex justify-center items-center title text-white">2</p>
            <p class="title text-white text-2xl font-semibold">Intermediate</p>
        </div>

        <section class="grid grid-cols-3 px-20 gap-10 ">
            
            <div class="flex col-span-3 justify-center gap-10 ">

                <x-card-lesson
                title="Routines"
                image="images\routines.png"
                description="I always wake up at 7AM"
                link=""
                alt="Imagen del verbo To Be"
                />

                <x-card-lesson
                title="Articles"
                image="images\articles.png"
                description="A, An and The"
                link="#"
                alt="Imagen del verbo To Be"
                />

            <div class="flex col-span-3 justify-center ">

        </section>


        <div class="bg-blue-principal-0 w-1/3 h-12 items-center rounded-full flex  ml-10 space-x-8  my-16">

            <p class="bg-[#FFC107] h-16 aspect-square rounded-full flex justify-center items-center title text-white">3</p>
            <p class="title text-white text-2xl font-semibold">Advanced</p>
        </div>

        <section class="grid grid-cols-3 justify-center px-20 gap-10  relative">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-56 left-0 -z-50 h-[40rem]" >

            <x-card-lesson
            title="Past Simple"
            image="images/past.png"
            description="Talk about what happened before"
            link="#"
            alt="Imagen del verbo To Be"
            />

            <x-card-lesson
            title="Future Simple"
            image="images\future.png"
            description="Describe your plans and predictions"
            link=""
            alt="Imagen del verbo To Be"
        />

        </section>

    </main>

</x-layout>