<x-layout title="Verb To Be">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">Verb To Be</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element 
               id="#what-is"
               text="What is"
               />

               <x-index-element 
               id="#forms"
               text="Forms"
               />

               <x-index-element 
               id="#uses"
               text="Uses"
               />
               
               <x-index-element 
               id="#que-neg"
               text="Questions and Negations"
               />

               <x-index-element 
               id="#"
               text="Contraccions"
               />
               
               <x-index-element 
               id="#example"
               text="Examples"
               />
            
            </div>
        </aside>
    
    <section class="ml-48 px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

        <x-title>Verb To Be</x-title>

        <x-subtitle id="what-is" >What is the Verb To Be</x-subtitle>

        <p class="ml-20 paragraph">The verb "to be" is one of the most important and versatile verbs in English.<br><br>

        It translates to "ser" or "estar" in Spanish and is used in a variety of situations to describe states, identities, locations, and more. </p>

        <x-subtitle id="forms">Forms of the Verb To Be</x-subtitle>


        <p class="ml-20 paragraph">Depending on the subject, the verb "to be" changes its form. Here are its three main conjugations in the present tense:</p>
      
        {{-- primera tabla --}}

        <div class="flex justify-center my-10">
            <img src="{{asset('images\tables\verb-to-be-1.png')}}" alt="" class="  h-screen">
        </div>
        
        <x-subtitle id="uses">Uses of the Verb To Be</x-subtitle>


        {{-- squares --}}

        <div class=" flex justify-center relative">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 left-0 -z-50 h-[80rem] " >


            <section class="grid grid-cols-2 gap-14  "> 

                <article class="  bg-gradient-to-r from-[#3197c6] to-[#3bbbd8] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5 ">
                    <h2 class="title text-lg">Identity</h2>
                    <p class="title text-lg font-semibold text-white"> To say who you are or who someone else is.</p>

                    <p class="paragraph text-white font-light">I am a student.</p>
                    <p class="paragraph text-white font-light">He is a doctor.</p>    
                </article>

                <article class="  bg-gradient-to-r from-[#4cd282] to-[#22c345] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg  px-5">
                    <h2 class="title text-lg">Emotional or
                        Physical States</h2>
                    <p class="title text-lg font-semibold text-white">To describe how you feel or the state you are in.</p>

                    <p class="paragraph text-white font-light">She is tired.</p>
                    <p class="paragraph text-white font-light">We are happy.</p>    
                </article>

                <article class="  bg-gradient-to-r from-[#C55EAE] to-[#C55E7A] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg  px-5">
                    <h2 class="title text-lg">Location</h2>
                    <p class="title text-lg font-semibold text-white">To say where you are or where something is.</p>

                    <p class="paragraph text-white font-light">You are in the classroom.</p>
                    <p class="paragraph text-white font-light">The keys are on the table </p>    
                </article>

                <article class="  bg-gradient-to-r from-[#f1a969] to-[#d2ac4d] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5">
                    <h2 class="title text-lg">Charateristics</h2>
                    <p class="title text-lg font-semibold text-white">To describe characteristics of people, places or things.</p>

                    <p class="paragraph text-white font-light">The sky is blue</p>
                    <p class="paragraph text-white font-light">They are tall.</p>    
                </article>
            </section>
        </div>

        {{-- Diagonal Squares --}}

        <x-subtitle id="que-neg">Questions and Negations with To Be</x-subtitle>
 
        <article class="space-y-48 relative">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <section class="flex ml-20 -space-x-20 space-y-32">
                <div class="bg-[#394AB5] w-2/5 rounded-lg h-fit p-10">
                    <img src="{{asset('images\men-chatting.png')}}" alt="">
                </div>

                <div class="bg-[#FEFEFE] shadow-lg h-full px-8 py-10 w-1/2 space-y-5 rounded-lg">
                    <h3 class="title text-xl">To Ask Questions</h3>
                    <p class="paragraph text-[#333333]">You just have to reverse the order of the subject and the verb.</p>
                    <p class="paragraph font-light ">Affirmative: you are ready.</p>
                    <p class="paragraph  font-light">Question: Are you ready?</p>
                </div>
            </section>


            <section class="flex ml-20 -space-x-20 -space-y-32 ">
                <div class="bg-[#FEFEFE] shadow-lg h-full px-8 py-10 w-1/2 space-y-5 rounded-lg z-10">
                    <h3 class="title text-xl">Negative Form</h3>
                    <p class="paragraph text-[#333333]"> Just Add "not" after</p>
                    <p class="paragraph font-light ">Affirmative: I am tired</p>
                    <p class="paragraph font-light ">Negative: I am NOT tired</p>
                </div>

                <div class="bg-[#efb9b9] w-2/5 rounded-lg h-fit p-10">
                    <img src="{{asset('images\men-chatting.png')}}" alt="">
                </div>
            </section>
        </article>

        <x-subtitle id="example">Examples</x-subtitle>

        <div class="flex justify-center my-10">
            <img src="{{asset('images\tables\verb-to-be-2.png')}}" alt="" class="  h-screen">
        </div>

    </section>
    </main>
    

</x-layout>

