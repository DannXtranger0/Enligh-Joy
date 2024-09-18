<x-layout title="Challenges">

    <main class="pt-24">

        {{-- titulo --}}

        <div class="flex items-center justify-center space-x-10 py-10 relative">
       
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-1/2 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <img src="{{asset("images/icons/estrella.svg")}}" alt="" class="h-9">
            <h1 class="title text-5xl">Software analysis and development</h1>
            <img src="{{asset("images/icons/estrella.svg")}}" alt="" class="h-9">
        </div>


        <section>
            <article>
                <img src="{{asset('images/man.png')}}" class="w-4" alt="">
                <div>
                    <h2>Jair Tiller</h2>
                    <p>Me gusta tanto el back-end como el front-end</p>
                    <div>
                        <img src="{{asset('images\icons\gmail.png')}} " alt="">
                        <p>jairlopezlozano@gmail.com</p>
                    </div>
                </div>
            </article>
        </section>
    </main>

</x-layout>