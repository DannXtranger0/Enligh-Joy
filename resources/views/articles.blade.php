<x-layout title="Articles">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">Articles</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element 
               id="#1"
               text="What are"
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

               <x-index-element 
               id="#6"
               text="More Examples"
               />
            
            </div>
        </aside>
    
    <section class="ml-48 px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

        <x-title>The Articles</x-title>

        <x-subtitle id="1" >What are the Articles?</x-subtitle>

        <p class="ml-20 paragraph">Articles in English are words that are placed before a noun to specify it in some way. There are two types of articles: definite and indefinite.</p>

        <x-subtitle id="2">Definite Articles "THE"</x-subtitle>

        <p class="ml-20 paragraph">The article "the" is the only definite article in English and is used to refer to nouns that are specific or already known to the speaker and hearer.</p>


        {{-- DEFINITE ARTICLES --}}


        <x-subtitle id="3">Use of definite articles</x-subtitle>

        <div class="flex justify-center items-center">

            <section class="grid grid-cols-2 gap-x-10 gap-y-8 relative">
                 <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-0 right-0 -z-50 h-[80rem]">

                <article class="flex flex-col justify-center items-center w-96 space-y-3" >
                    <h3 class="paragraph font-semibold " >Talk about something specific</h3>
                    <div class="flex flex-col justify-center items-center bg-[#FEFEFE] shadow-md  w-80 h-56 rounded-lg p-2  text-center">
                        <img src="{{asset('images\articles\1.png')}}" alt="" class="h-36">
                        <p class="paragraph">They collects <span class="font-medium"> the rubbish</span></p>
                    </div>
                </article>

                <article class="flex flex-col justify-center items-center w-96 space-y-3" >
                    <h3 class="paragraph font-semibold " >Refer to something already mentioned</h3>
                    <div class="flex flex-col justify-center items-center bg-[#FEFEFE] shadow-md w-80 h-56 rounded-lg p-2  text-center">
                        <img src="{{asset('images\articles\2.png')}}" alt="" class="h-36">
                        <p class="paragraph">I went to  <span class="font-medium">the concert</span>you recommended</p>
                    </div>
                </article>

                
                <article class="flex flex-col justify-center items-center w-96 space-y-3" >
                    <h3 class="paragraph font-semibold " >With superlatives</h3>
                    <div class="flex flex-col justify-center items-center bg-[#FEFEFE] shadow-md w-80 h-56 rounded-lg p-2  text-center">
                        <img src="{{asset('images\articles\3.png')}}" alt="" class="h-36">
                        <p class="paragraph">John is<span class="font-medium">the fastest</span>runner in the competition.</p>
                    </div>
                </article>

                <article class="flex flex-col justify-center items-center w-96 space-y-3" >
                    <h3 class="paragraph font-semibold " >Places in the city.</h3>
                    <div class="flex flex-col justify-center items-center  bg-[#FEFEFE]  shadow-md w-80 h-56 rounded-lg p-2  text-center">
                        <img src="{{asset('images\articles\4.png')}}" alt="" class="h-36">
                        <p class="paragraph">They are in<span class="font-medium">the park.</span></p>
                    </div>
                </article>
            </section>
        </div>


        {{-- Indefinite ARticles --}}

        <x-subtitle id="4">Indefinite Articles</x-subtitle>

        <p class="ml-20 paragraph">There are 3 indefinite articles when we are going to write in English, two of them are for a singular form <span class="font-semibold">(a, an)</span> and one to be used when referring to the plural form <span class="font-semibold">(some)</span>.</p>


        <x-subtitle id="5">Use of Indefinite Articles</x-subtitle>
        
        <article class="flex flex-col items-center justify-center space-y-10">
            <div class="bg-gradient-to-r from-[#B0E455] to-[#97D971] w-2/3 h-36 rounded-lg flex flex-col justify-center items-center space-y-10">
                <p class="paragraph">To refer to something for the first time.</p>
                <p class="paragraph text-white">I saw <span class="font-semibold text-paragraph-color-0">a dog</span> in the park today</p>
            </div>


            <div class="bg-gradient-to-r from-[#92D777] to-[#67C6A8] w-2/3 h-36 rounded-lg flex flex-col justify-center items-center space-y-10">
                <p class="paragraph">When describing a person's profession</p>
                <p class="paragraph text-white">She is <span class="font-semibold text-paragraph-color-0">a doctor</span> </p>
            </div>
        
            <div class="bg-gradient-to-r from-[#B0E455] to-[#97D971] w-2/3 h-[10rem] rounded-lg flex flex-col justify-center items-center space-y-10 text-center">
                <p class="paragraph">When we talk about something in general and not about something specific.</p>
                <p class="paragraph text-white"><span class="font-semibold text-paragraph-color-0">A smartphone</span> can be very useful.
                </p>
            </div>
        </article>


        {{-- A/AN --}}


        <x-subtitle id="#">A/An</x-subtitle>


        
        <p class="ml-20 paragraph">We use both 'a' and 'an' in the same way, but when we use 'a', it is used in front of a consonant and 'an' when the next word begins with a vowel (a, e, i, o, u).</p>

        <div>
            <div class="relative">
                <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-[35rem] left-0 -z-50 h-[80rem] " >

            </div>
        </div>

        <section class="flex space-y-24 -space-x-10 justify-center items-start mt-10 relative">
            

         
            <div class="w-1/2 bg-[#FEFEFE]  rounded-lg shadow-md space-y-5 p-5">
                <h3 class="paragraph text-2xl text-center">A</h3>

                <li class="paragraph">A cat is sleeping on the couch.</li>
              
                <li class="paragraph">There's a spider on the wall.</li>

                <li class="paragraph">He drives a car to work every day.</li>
            </div>


            <div class="w-1/2 bg-[#FEFEFE]  rounded-lg shadow-md space-y-5 p-5">
                <h3 class="paragraph text-2xl text-center">An</h3>

                <li class="paragraph">An apple a day keeps the doctor away.</li>
              
                <li class="paragraph">She saw an elephant at the zoo.</li>

                <li class="paragraph">They need an umbrella because it's raining.</li>
            </div>

        </section>



        {{-- Penultima section --}}


        <x-subtitle id="#">Some</x-subtitle>


        
        <p class="ml-20 paragraph">It is a determiner that is used to talk about a non-specific amount of something, whether several in the case of <span class="font-bold">plural countables</span> , or something in the case of <span class="font-bold">uncountable nouns</span>.</p>

        <div class="relative">
            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
        </div>
        <section class="flex space-y-56 -space-x-10 justify-center items-start mt-16 relative">
            
         
            <div class="w-1/2 bg-[#FEFEFE] p-4  rounded-lg shadow-md space-y-5">
                <h3 class="paragraph text-2xl text-center">Plural countable nouns
                </h3>

                <li class="paragraph">Some chairs were missing from the room.
                </li>
              
                <li class="paragraph">I'd like some apples from the market.
                </li>

                <li class="paragraph">Some students are working on a group project.</li>
            </div>


            <div class="w-1/2 bg-[#FEFEFE] p-4  rounded-lg shadow-md space-y-5">
                <h3 class="paragraph text-2xl text-center">Uncountable nouns</h3>

                <li class="paragraph">She added some salt to the soup.</li>
              
                <li class="paragraph">We need some information about the event.</li>

                <li class="paragraph">TCan I have some milk with my cereal?</li>
            </div>
        </section>


        <x-subtitle id="6">More Examples</x-subtitle>


        
        <p class="ml-20 paragraph">Some examples of the articles mentioned above, in affirmative, negative and interrogative sentences</p>

        <div class="flex justify-center my-10">
            <img src="{{asset('images\tables\articles-1.png')}}" alt="" class="">
        </div>



    </section>
    </main>
    

</x-layout>

