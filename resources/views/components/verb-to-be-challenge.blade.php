<x-layout title="Verb To Be - Challenge">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-72 ">
            <h1 class="title text-xl my-5 text-center">Verb To Be</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element-challenge 
               route="/verb-to-be-challenge/1"
               number="1"
               text="Choose the correct answer"
               />

               <x-index-element-challenge 
               route="/verb-to-be-challenge/2"
               number="2"
               text="Complete the dialog"
               />

               <x-index-element-challenge 
               route="/verb-to-be-challenge/3"
               number="3"
               text="jumbled sentence"
               />
            
            </div>
        </aside>
    
        <section class="ml-72 px-10">
            {{$slot}}
        </section>

    </section>
    </main>
    

</x-layout>

