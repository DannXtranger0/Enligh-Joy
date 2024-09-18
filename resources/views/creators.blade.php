<x-layout title="Challenges">

    <main class="pt-24">

        {{-- titulo --}}

        <div class="flex items-center justify-center space-x-10 py-10 relative">
       
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-1/2 right-0 -z-50 h-[40rem] scale-x-[-1]" >
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-1/2 left-0 -z-50 h-[40rem]" >

            <img src="{{asset("images/icons/estrella.svg")}}" alt="" class="h-9">
            <h1 class="title text-5xl">Software analysis and development</h1>
            <img src="{{asset("images/icons/estrella.svg")}}" alt="" class="h-9">
        </div>


        <section class="grid grid-cols-3 px-20 gap-10 ">

            <article class="w-72 shadow-md mx-auto rounded-lg">
                <img src="{{asset('images/man.png')}}" class="w-fit" alt="">
                <div class="px-3 space-y-3 py-3 bg-white">
                    <h2 class="title">Robin Jimenez</h2>
                    <p>Vive tu vida sin pensar en el que dirán</p>
                    <div class="flex space-x-5">
                        <img src="{{asset('images\icons\gmail.png')}} " class="w-10" alt="">
                        <p>robindannjf@gmail.com</p>
                    </div>
                </div>
            </article>

            
            <article class="w-72 shadow-md mx-auto rounded-lg">
                <img src="{{asset('images/women.png')}}" class="w-fit" alt="">
                <div class="px-3 space-y-3 py-3 bg-white">
                    <h2 class="title">Wendy Navarro</h2>
                    <p>Me gusta tanto el back-end como el front-end</p>
                    <div class="flex space-x-5">
                        <img src="{{asset('images\icons\gmail.png')}} " class="w-10" alt="">
                        <p>wnavarro@gmail.com</p>
                    </div>
                </div>
            </article>


            
            <article class="w-72 shadow-md mx-auto rounded-lg">
                <img src="{{asset('images/man.png')}}" class="w-fit" alt="">
                <div class="px-3 space-y-3 py-3 bg-white">
                    <h2 class="title">Jair Tiller</h2>
                    <p>Me gusta tanto el back-end como el front-end</p>
                    <div class="flex space-x-5">
                        <img src="{{asset('images\icons\gmail.png')}} " class="w-10" alt="">
                        <p>jairlopezlozano@gmail.com</p>
                    </div>
                </div>
            </article>


            <article class="w-72 shadow-md mx-auto rounded-lg">
                <img src="{{asset('images/man.png')}}" class="w-fit" alt="">
                <div class="px-3 space-y-3 py-3 bg-white">
                    <h2 class="title">Robin Jimenez</h2>
                    <p>Vive tu vida sin pensar en el que dirán</p>
                    <div class="flex space-x-5">
                        <img src="{{asset('images\icons\gmail.png')}} " class="w-10" alt="">
                        <p>robindannjf@gmail.com</p>
                    </div>
                </div>
            </article>



            
            <article class="w-72 shadow-md mx-auto rounded-lg">
                <img src="{{asset('images/man.png')}}" class="w-fit" alt="">
                <div class="px-3 space-y-3 py-3 bg-white">
                    <h2 class="title">Jair Tiller</h2>
                    <p>Me gusta tanto el back-end como el front-end</p>
                    <div class="flex space-x-5">
                        <img src="{{asset('images\icons\gmail.png')}} " class="w-10" alt="">
                        <p>jairlopezlozano@gmail.com</p>
                    </div>
                </div>
            </article>

                        
            <article class="w-72 shadow-md mx-auto rounded-lg">
                <img src="{{asset('images/women.png')}}" class="w-fit" alt="">
                <div class="px-3 space-y-3 py-3 bg-white">
                    <h2 class="title">Wendy Navarro</h2>
                    <p>Me gusta tanto el back-end como el front-end</p>
                    <div class="flex space-x-5">
                        <img src="{{asset('images\icons\gmail.png')}} " class="w-10" alt="">
                        <p>wnavarro@gmail.com</p>
                    </div>
                </div>
            </article>

            
        </section>
    </main>

</x-layout>