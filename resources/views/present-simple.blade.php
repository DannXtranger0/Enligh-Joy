<x-layout title="Present Simple Tense">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">Present Simple Tense</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element 
               id="#what-is"
               text="What is"
               />

               <x-index-element 
               id="#uses"
               text="Uses"
               />

               <x-index-element 
               id="#structure"
               text="Structure"
               />
  
               <x-index-element 
               id="#adv-frequency"
               text="Adverbs of frequency"
               />
               
               <x-index-element 
               id="#do-does"
               text="Do / Does"
               />

               <x-index-element 
               id="#quest-words"
               text="Question Words"
               />
            
            </div>
        </aside>

        <section class="ml-48 px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <x-title>Simple Present Tense</x-title>

            <x-subtitle id="what-is" >What is the Simple Present Tense</x-subtitle>

            <p class="ml-20 paragraph">The simple present is a tense in English used to express habitual actions, routines, permanent states, and general facts. It is used to talk about things that happen regularly or that are always true.</p>

            <x-subtitle id="uses">Uses of the Present Simple</x-subtitle>


             {{-- squares --}}

        <div class=" flex justify-center relative">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 left-0 -z-50 h-[80rem]" >


            <section class="grid grid-cols-2 gap-14  "> 

                <article class="  bg-gradient-to-r from-[#3197c6] to-[#3bbbd8] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5 ">
                    <h2 class="title text-lg">Communicate permanent states or actions.
                    </h2>

                    <p class="paragraph text-white font-light">She works as a doctor.</p>
                    <p class="paragraph text-white font-light">He lives in New York.</p>    
                </article>

                <article class="  bg-gradient-to-r from-[#4cd282] to-[#22c345] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg  px-5">
                    <h2 class="title text-lg">Indicate routine states, situations, or periodic actions.</h2>
                   

                    <p class="paragraph text-white font-light">I drink coffee every morning.</p>
                    <p class="paragraph text-white font-light">They always eat lunch at noon.</p>    
                </article>

                <article class="  bg-gradient-to-r from-[#C55EAE] to-[#C55E7A] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg  px-5">
                    <h2 class="title text-lg">Talk about habits, routines, or facts that repeat overtime.</h2>
                   

                    <p class="paragraph text-white font-light">They go to the gym three times a week.
                    </p>
                    <p class="paragraph text-white font-light">He reads the newspaper every day.</p>    
                </article>

                <article class="  bg-gradient-to-r from-[#f1a969] to-[#d2ac4d] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5">
                    <h2 class="title text-lg">Give directions, instructions, or signals.<h2>

                    <p class="paragraph text-white font-light">Turn right at the next corner.</p>
                    <p class="paragraph text-white font-light">They are tall.Turn right at the next corner.</p>    
                </article>

                <div class="flex justify-center col-span-2" >
                    <article class="  bg-gradient-to-r from-[#4cd282] to-[#22c345] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg  px-5 ">
                        <h2 class="title text-lg">Convey appointments, facts, or commitments at a specific time.</h2>
                    

                        <p class="paragraph text-white font-light">The meeting starts at 10 a.m.</p>
                        <p class="paragraph text-white font-light">Her flight departs at 6 p.m.</p>    
                    </article>
                </div>

                <div class="mx-center flex justify-center col-span-2">
                    <article class="  bg-gradient-to-r from-[#e9605e] to-[#912F2F]  h-72 w-[45rem]  text-center py-10 space-y-5 rounded-lg px-5 ">
                        <h2 class="title text-lg">Attention!</h2>
            
                        <p class="title text-lg font-semibold text-white">The simple present should not be used for actions happening at the moment of speaking. Use the present continuous instead.</p>
            
            
                        <p class="paragraph text-white font-light">I am working right now (not "I work right now")</p>
                        <p class="paragraph text-white font-light">She is eating lunch (not "She eats lunch").
                        </p>    
                    </article>
                </div>
            </section>
        </div>

        <x-subtitle id="structure" >Structure of the Simple Present Tense</x-subtitle>

        <p class="ml-20 paragraph">To construct sentences in the simple present, it's important to distinguish between two groups of subjects:</p>


        <x-subtitle id="#" >Group 1: I, You, We, They</x-subtitle>

        <p class="ml-20 paragraph">Subject + Verb in normal form + Complement</p>


        {{-- first table --}}

        <div class="flex justify-center my-10">
            <img src="{{asset('images\tables\present-simple-1.png')}}" alt="" class="  w-3/4">
        </div>


        <x-subtitle id="#" >Group 2: She, He, It</x-subtitle>

        <p class="ml-20 paragraph">For this group, known as the third person singular, the following rules apply to verbs:</p>


        {{-- other squares --}}

        
        <div class=" flex justify-center relative mt-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 left-0 -z-50 h-[80rem]" >

            <section class="grid grid-cols-2 gap-14 mb-20  "> 

                <article class="  bg-gradient-to-r from-[#3197c6] to-[#3bbbd8] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5 ">
                    <h2 class="title text-lg">Add "s" to all verbs
                    </h2>

                    <p class="paragraph text-white font-light">She <span class="text-[#FFC107] font-medium">eats</span> chicken.</p>
                    <p class="paragraph text-white font-light">He <span class="text-[#FFC107] font-medium">drinks</span> water.</p>    
                </article>


                <article class="  bg-gradient-to-r from-[#3197c6] to-[#3bbbd8] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5 ">
                    <h2 class="title text-lg"> Verbs Ending in -o, -sh, -ch, -ss, -x, -z <br>Just add "es"
                    </h2>

                    <p class="paragraph text-white font-light">He <span class="text-[#FFC107] font-medium">wishes</span> for a new car.</p>
                    <p class="paragraph text-white font-light">She <span class="text-[#FFC107] font-medium">washes</span> the dishes.</p>    
                </article>

                

                <article class="  bg-gradient-to-r from-[#3197c6] to-[#3bbbd8] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5 ">
                    <h2 class="title text-lg"> Verbs Ending in -y<br>(Consonant Before -y)<br> Replace "y" with "i" and add "es"

                    </h2>

                    <p class="paragraph text-white font-light">He <span class="text-[#FFC107] font-medium">spies</span> on his neighbors</p>
                    <p class="paragraph text-white font-light">She <span class="text-[#FFC107] font-medium">tries</span> her best.</p>    
                </article>


                <article class="  bg-gradient-to-r from-[#3197c6] to-[#3bbbd8] w-96 h-72 aspect-square text-center py-10 space-y-5 rounded-lg px-5 ">
                    <h2 class="title text-lg"> Verbs Ending in -y <br>(Vowel Before -y)<br>Keep the "y" and add "s"</h2>

                    <p class="paragraph text-white font-light">It <span class="text-[#FFC107] font-medium">enjoys</span> playing in the park</p>
                    <p class="paragraph text-white font-light">She <span class="text-[#FFC107] font-medium">buys</span> a new dress</p>    
                </article>


                
                <div class="flex justify-center col-span-2" >
                    <article class="  bg-gradient-to-r from-[#4cd282] to-[#22c345]  aspect-square text-center    rounded-lg  px-5  h-80 w-full ">

                        <h2 class="title py-5">Warning</h2>
                        <div class="space-y-10">    
                            <div class="flex justify-between items-center px-10">

                                <div class="order-1 w-96">
                                    <p class="paragraph text-white font-light">He <span class="text-[#FFC107] font-medium">is</span> a doctor.</p><br>
                                    <p class="paragraph text-white font-light">She <span class="text-[#FFC107] font-medium">is</span> happy.</p>
                                </div>
                                    <h2 class="title text-lg"><span class="text-white font-medium">To be:</span> Has its own forms in the simple present: am, is, are.</h2>
                            </div>
                                
                            <div class="flex justify-between items-center px-10">
                                <div class="order-1  w-96">
                                    <p class="paragraph text-white font-light">He <span class="text-[#FFC107] font-medium">has</span> a car.</p><br>
                                    <p class="paragraph text-white font-light">She <span class="text-[#FFC107] font-medium">has</span> a new phone.</p>
                                </div>
                                    <h2 class="title text-lg"><span class="text-white font-medium">To have:</span> Has its own form for the third person singular: has.</h2>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </div>

        
        {{-- Second table --}}

        <p class="ml-20 paragraph"><span class="title text-lg">The structure is</span> <br>
            Subject + Verb in normal form + Complement</p>

        <div class="flex justify-center mt-20 mb-10">
            <img src="{{asset('images\tables\present-simple-2.png')}}" alt="" class="  w-3/4">
        </div>


        
        <x-subtitle id="adv-frequency" >Adverbs of Frequency:</x-subtitle>

        <p class="ml-20 paragraph">In the simple present, we use several adverbs of frequency to indicate how often an action occurs. These adverbs are usually placed before the main verb.</p>

        
        {{-- BIG GRID --}}

        <section class="flex justify-center relative  my-10">
           
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  -z-50 h-[80rem]" >

            <article class="grid grid-cols-2 gap-x-20 gap-10 ">
               
                <div class="shadow-always w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg">
                    <h3 class="title font-semibold text-xl">Always - 100%</h3>
                    <p class="paragraph lg">I always go to the gym</p>
                </div>

                <div class="shadow-every-day w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg ">
                    <h3  class="title font-semibold text-xl">Every day - 100%</h3>
                    <p class="paragraph lg">They exercise every day.</p>
                </div>

                <div class="shadow-usually w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg">
                    <h3 class="title font-semibold text-xl">Usually - 80%/90%</h3>
                    <p class="paragraph lg">She usually eats breakfast at 8 a.m.</p>
                </div>

                <div class="shadow-often  w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg">
                    <h3 class="title font-semibold text-xl">Often - 70%/60%</h3>
                    <p  class="paragraph lg">He often travels for work.</p>
                </div>

                <div  class="shadow-sometimes w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg">
                    <h3 class="title font-semibold text-xl">Sometimes - 50%/40%</h3>
                    <p class="paragraph lg">Do you sometimes forget your keys?</p>
                </div>

                
                <div class="shadow-rarely  w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg">
                    <h3 class="title font-semibold text-xl">Rarely - 20%/10%</h3>
                    <p class="paragraph lg">We rarely eat out at restaurants.</p>
                </div>

                <div class="shadow-hardly  w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg">
                    <h3 class="title font-semibold text-xl">Hardly ever - 10%/5%</h3>
                    <p class="paragraph lg">I hardly ever go to the theater</p>
                </div>


                <div class="shadow-never  w-80 h-24 p-2 bg-[#FEFEFE] rounded-lg">
                    <h3 class="title font-semibold text-xl">Never - 0%</h3>
                    <p  class="paragraph lg">Does she never drink soda?</p>
                </div>
        </article>
    </section>

    <x-subtitle id="do-does" >Auxiliary Do/Does:</x-subtitle>

         <div class="bg-[#DBA1A1] rounded-lg p-x2 py-5">
            <p class="ml-20 paragraph"><span class="title text-xl font-semibold">Note:</span> Do not confuse with the verb "to do".<br><br>

            "Do" and "does" do not have meanings by themselves, but help us construct questions and negative sentences in the simple present.<br><br>
            
            They allow the use of the verb in its base form, without changes, even for the third person singular.<br><br>
            
            As with the affirmative form, we separate the subjects into two groups to use the corresponding auxiliary DO/DOES.</p>
        </div>


        {{-- Diagonal Squares --}}
        
        <article class=" relative mt-16">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <section class="flex ml-20 -space-x-20 space-y-32">
                <div class="bg-[#394AB5] w-2/5 rounded-lg h-fit p-10">
                    <img src="{{asset('images\men-chatting.png')}}" alt="">
                </div>

                <div class="bg-[#FEFEFE] shadow-lg h-full px-8 py-14 w-1/2 space-y-5 rounded-lg">
                    <h1 class="title text-center">Do</h1>
                    <h3 class="title text-xl">I, YOU, WE AND THEY</h3>

                    <div class="space-y-2">
                        <p class="title text-lg">Negative form:</p>
                        <p class="paragraph font-medium">Subject + do + not + verb + complement</p>
                        <p class="paragraph font-light">I do not (don't) drink too much water</p>
                    </div>
                    <div class="space-y-2">
                        <p class="title text-lg">Interrogative form:</p>
                        <p class="paragraph font-medium">Do + subject + verb + complement + ?</p>
                        <p class="paragraph font-light">Do you drink too much water?<br>
                            -Yes, I do.</p>
                    </div>

                </div>
            </section>


            <section class="flex ml-20 -space-x-20 -space-y-32 mt-48">
                <div class="bg-[#FEFEFE] shadow-lg h-full px-8 py-14 w-1/2 space-y-5 rounded-lg">
                    <h1 class="title text-center">DOES</h1>
                    <h3 class="title text-xl">SHE, HE AND IT</h3>

                    <div class="space-y-2">
                        <p class="title text-lg">Negative form:</p>
                        <p class="paragraph font-medium">Subject + does + not + verb + complement</p>
                        <p class="paragraph font-light">He does not (doesn't) drink too much water</p>
                    </div>
                    <div class="space-y-2">
                        <p class="title text-lg">Interrogative form:</p>
                        <p class="paragraph font-medium">Does + subject + verb + complement + ?</p>
                        <p class="paragraph font-light">Does he drink too much water?<br>
                            -No, he does not (doesn't).</p>
                    </div>

                </div>

                <div class="bg-[#efb9b9] w-2/5 rounded-lg h-fit p-10 -z-10">
                    <img src="{{asset('images\men-chatting.png')}}" alt="">
                </div>
            </section>
        </article>

    
        <x-subtitle id="quest-words" >Question Words With Do and Does</x-subtitle>

        <div class="mx-auto bg-[#1CEDB140] text-center w-fit  px-5 py-2 rounded-lg">
            <p class="title text-2xl">What - Who - Where - When - Why - How</p>
        </div>

        <p class="ml-20 paragraph my-10"><span class="title text-lg">The structure is</span> <br>
            Question Word + Auxiliar Do/Does+ Subject + Complement + ?</p>

        
        <article class="space-y-5 relative">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-[50rem] right-0 -z-50 h-[40rem] scale-x-[-1]" >
            <div class="mx-auto bg-[#1CEDB140] text-center w-2/3  px-5 py-4 rounded-lg">
                <p class="paragraph"><span class="font-semibold">What</span> do you do on the weekends?</p>
            </div>

            <div class="mx-auto bg-[#1CEDB140] text-center w-2/3  px-5 py-4 rounded-lg">
                <p class="paragraph"><span class="font-semibold">Who</span>  do they invite to the party?</p>
            </div>

            <div class="mx-auto bg-[#1CEDB140] text-center w-2/3  px-5 py-4 rounded-lg">
                <p class="paragraph"><span class="font-semibold">Where</span>  does she work?</p>
            </div>
            
            <div class="mx-auto bg-[#1CEDB140] text-center w-2/3  px-5 py-4 rounded-lg">
                <p class="paragraph"><span class="font-semibold">When</span> does he start his job?</p>
            </div>

            <div class="mx-auto bg-[#1CEDB140] text-center w-2/3  px-5 py-4 rounded-lg">
                <p class="paragraph"><span class="font-semibold">Why</span> do you study English?</p>
            </div>

            
            <div class="mx-auto bg-[#1CEDB140] text-center w-2/3  px-5 py-4 rounded-lg">
                <p class="paragraph"><span class="font-semibold">How</span> does he feel today?</p>
            </div>
        </article>

        </section>
    </main>
</x-layout>
