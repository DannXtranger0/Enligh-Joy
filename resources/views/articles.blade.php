<x-layout title="Articles">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">Articles</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element 
               id="21"
               text="What is"
               />

               <x-index-element 
               id="#2"
               text="Define Articles"
               />

               <x-index-element 
               id="#3"
               text="Use of Definite Article"
               />
               
               <x-index-element 
               id="#4"
               text="Indefinite Article"
               />
               
               <x-index-element 
               id="#5"
               text="Use of Indefinite Article"
               />
            
            </div>
        </aside>
    
    <section class="ml-48 px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

        <x-title>The Articles</x-title>

        <x-subtitle id="what-is" >What are the Articles?</x-subtitle>

        <p class="ml-20 paragraph">The verb "to be" is one of the most important and versatile verbs in English.<br><br>

        It translates to "ser" or "estar" in Spanish and is used in a variety of situations to describe states, identities, locations, and more. </p>

        <x-subtitle id="forms">Forms of the Verb To Be</x-subtitle>

    </section>
    </main>
    

</x-layout>

