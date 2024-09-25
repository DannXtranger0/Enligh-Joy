<x-layout title="Numbers">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">

        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">Numbers</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element
               id="#1"
               text="Why learn
                    numbers in
                    English? "
               />

               <x-index-element
               id="#2"
               text="The Cardinals
                        Numbers"
               />

               <x-index-element
               id="#3"
               text="Examples - Cardinal Numbers"
               />

               <x-index-element
               id="#4"
               text="Ordinal Numbers"
               />

               <x-index-element
               id="#5"
               text="Days and Month"
               />

               <x-index-element
               id="#6"
               text="Examples - Ordinal Numbers"
               />

            </div>
        </aside>

    <section class="ml-48 px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

        <x-title>Welcome To The Numbers</x-title>

        <x-subtitle id="1" >Why Learn Numbers in English?</x-subtitle>

        <div class="relative ml-20 ">

            <p class="paragraph pr-64">In this section, you'll explore numbers in English in a clear
                and simple way. Learning numbers is essential for everyday communication and will help you in various situations, from making purchases to giving instructions.<br><br>

                Get ready to discover how numbers are used in English in different contexts! </p>

                <img src="{{asset('images\numbers\1.png')}}" alt="" class="h-96 absolute right-0 -top-44 -z-10">
        </div>

        <x-subtitle id="2" >The Cardinal Numbers</x-subtitle>

        <p class="ml-20 paragraph">Cardinal numbers are terms that represent the quantity of elements in a set. They are used for counting and expressing amounts. They are fundamental in mathematics and everyday communication.</p>



        {{-- FIRST GRID --}}
        <section class="flex justify-center items-center w-full min-h-screen my-10">
            <article class="grid grid-cols-3 gap-10 place-items-center mx-auto">
                <img src="{{asset('images/tables/numbers-1.png')}}" alt="" class="h-[30rem]">
                <img src="{{asset('images/tables/numbers-2.png')}}" alt="" class="h-[30rem]">
                <img src="{{asset('images/tables/numbers-3.png')}}" alt="" class="h-[30rem]">

                <div class="relative bg-[#7EE995] col-span-3 w-full rounded-lg border-2 border-[#394AB5] p-4">
                    <img src="{{asset('images/icons/exclamation-point.png')}}" alt="" class="absolute h-28 right-10 top-0">

                    <h3 class="text-[#2C3E50] text-3xl font-bold tracking-wider my-2">Important</h3>

                    <section class="space-y-10">
                        <div class="flex space-x-5 px-5 items-center ">
                            <p class="paragraph  w-2/3 font-medium">To form the numbers, simply combine the ten with the  number from 1 to 9 joined by a hyphen.</p>
                            <p class="paragraph text-[#B7284C] font-medium">35 -> Thirty-one</p>
                        </div>

                        <div class="flex space-x-5 px-5 items-center ">
                            <p class="paragraph  w-2/3 font-medium">For the numbers 100 and over, use "and" before units.</p>
                            <p class="paragraph text-[#B7284C] font-medium">130 -> One hundred and thirty</p>
                        </div>
                    </section>
                </div>

                    <div class="col-span-3 flex justify-center items-center gap-10">
                        <img src="{{asset('images/tables/numbers-4.png')}}" alt="" class="h-64">
                        <img src="{{asset('images/tables/numbers-5.png')}}" alt="" class="h-64">
                    </div>

            </article>
        </section>


        {{-- EXAMPLES --}}
        <x-subtitle id="3">Examples</x-subtitle>

        <section class="grid grid-cols-3 gap-10 relative">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-1/2 right-0 -z-50 h-[80rem]" >
            
            <div class="shadow-md w-72 rounded-lg p-5 text-center space-y-3  bg-[#FEFEFE]">
                <img src="{{asset('images\numbers\2.png')}}" alt="" class="h-36 block mx-auto">
                <p class="paragraph">I have <span class="font-medium text-blue-principal-0">four</span> apples</p>
            </div>

            <div class="shadow-md w-72 rounded-lg p-5 text-center space-y-3  bg-[#FEFEFE]">
                <img src="{{asset('images\numbers\3.png')}}" alt="" class="h-36 block mx-auto">
                <p class="paragraph">There are <span class="font-medium text-blue-principal-0">nine</span> books on the table</p>
            </div>
            
            <div class="shadow-md w-72 rounded-lg p-5 text-center space-y-3  bg-[#FEFEFE]">
                <img src="{{asset('images\numbers\4.png')}}" alt="" class="h-36 block mx-auto">
                <p class="paragraph">There are <span class="font-medium text-blue-principal-0">seven</span> children having fun</p>
            </div>

            <div class="col-span-3 flex justify-center items-center gap-10 ">

                <div class="shadow-md rounded-lg p-10 text-center space-y-3 bg-[#FEFEFE]">
                    <p class="paragraph">The shirt cost <span class="font-medium text-blue-principal-0">twenty-one</span> dollars</p>
                </div>

                
                <div class="shadow-md rounded-lg p-10 text-center space-y-3  bg-[#FEFEFE]">
                    <p class="paragraph">In my group, there are <span class="font-medium text-blue-principal-0">eight</span> people</p>
                </div>
            </div>
        </section>


        <x-subtitle id="4">Ordinal Numbers</x-subtitle>


        <div class="relative ml-20 ">

            <p class="paragraph pr-80">Ordinal numbers indicate the position or order of elements in a sequence.
                They are used to classify items hierarchically
                and appear in contexts like rankings or dates.<br>


                <img src="{{asset('images\numbers\5.png')}}" alt="" class="h-60 absolute right-0 -top-20  -z-10">
        </div>

        {{-- SECOND GRID --}}

          <section class="flex justify-center items-center w-full min-h-screen mb-10 mt-28">
            <article class="grid grid-cols-3 gap-10 place-items-center mx-auto">
                <img src="{{asset('images/tables/numbers-6.png')}}" alt="" class="h-[30rem]">
                <img src="{{asset('images/tables/numbers-7.png')}}" alt="" class="h-[30rem]">
                <img src="{{asset('images/tables/numbers-8.png')}}" alt="" class="h-[30rem]">


                    <div class="col-span-3 flex justify-center items-center gap-10">
                        <img src="{{asset('images/tables/numbers-9.png')}}" alt="" class="h-64">
                        <img src="{{asset('images/tables/numbers-10.png')}}" alt="" class="h-64">
                    </div>

            </article>
        </section>

        <x-subtitle id="4">Use of Ordinal Numbers</x-subtitle>

        <div class="ml-20 space-y-5 pr-20 relative" >
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <p class="paragraph ">In English, ordinal numbers can be expressed in two ways:</p>
            <li class="list-disc paragraph"> <span class="title text-lg">Written form:</span> They can be written out as words, for example, "twenty-first."</li>

            <li class="list-disc paragraph"><span class="title text-lg">Numeric form</span> They can also be written using numbers and the corresponding suffix, such as "21st.</li>
        </div>

        <div class="ml-20 mt-10 bg-[#B6EEF280] px-2 py-4 rounded-lg text-center">
            <p class="paragraph">You can say <span class="title text-lg">"the twenty-first of October"</span> or <span class="title text-lg">"the 21st of October."</span>  Both forms are correct and accepted in different contexts.</p>
        </div>

        <x-subtitle id="5">Days and Month</x-subtitle>

        <p class="paragraph ml-20">The days of the week and the months of the year are essential components of our calendar<br><br>
 
        Ordinal numbers allow us to place each day and each month in aspecific order, facilitating our understanding of the passage oftime.</p>


        {{-- THIRD GRID --}}

        <section class="grid grid-flow-row grid-cols-2 grid-rows-2 my-10  h-[60rem]">
           <article class="flex flex-col items-center space-y-2 h-fit">
                <h3 class="title text-2xl my-3">Days of the Week</h3>

                <div class="bg-[#28B7BD] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">Monday</p>
                </div>
                <div class="bg-[#42CB7D] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">Tuesday</p>
                </div>
                <div class="bg-[#4D95FC] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">Wednesday</p>
                </div>
                <div class="bg-[#F95554] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">Thursday</p>
                </div>
                <div class="bg-[#FF914C] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">Friday</p>
                </div>
                <div class="bg-[#38B6FF] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">Saturday</p> 
                </div>
                <div class="bg-[#8C52FF] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">Sunday</p>
                </div>
           </article>

           <article class="flex flex-col items-center space-y-2 row-span-2  h-fit">
                <h3 class="title text-2xl my-3 ">Months of the Year</h3>

                <div class="bg-[#FFDE59] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">January</p>
                </div>
                <div class="bg-[#5CE1E6] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">February</p>
                </div>
                <div class="bg-[#7ED956] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">March</p>
                </div>
                <div class="bg-[#8195F6] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">April</p>
                </div>
                <div class="bg-[#FF5757] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">May</p>
                </div>
                <div class="bg-[#38B6FF] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">June</p>
                </div>
                <div class="bg-[#FEBD59] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">July</p>
                </div>
                <div class="bg-[#C9E165] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">August</p>
                </div>
                <div class="bg-[#00C2CB] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">September</p>
                </div>
                <div class="bg-[#8C52FF] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">October</p>
                </div>
                <div class="bg-[#FF5757] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">November</p>
                </div>
                <div class="bg-[#3AAFEB] w-96 flex justify-center items-center h-16 rounded-lg">
                    <p class="paragraph font-bold text-[#FEFEFE]">December</p>
                </div>
           </article>

           <div class="text-center flex flex-col items-center mt-20">
            <h3 class="title text-2xl my-3">Seasons</h3>
                <article class="grid grid-cols-2 gap-5  justify-center items-center ">
                    <div class="bg-[#32D8FE] w-[11.5rem] h-[8.8rem] rounded-lg flex flex-col  justify-center items-center">
                        <img src="{{asset('images\numbers\6.png')}}" alt="" class="h-24" >
                        <p class="title text-xl text-[#FEFEFE]">Winter</p>
                    </div>

                    <div class="bg-[#1CED7A] w-[11.5rem] h-[8.8rem] rounded-lg flex flex-col  justify-center items-center">
                        <img src="{{asset('images\numbers\8.png')}}" alt="" class="h-24">
                        <p class="title text-xl text-[#FEFEFE]">Spring</p>
                    </div>

                    <div class="bg-[#FE3232] w-[11.5rem] h-[8.8rem] rounded-lg flex flex-col  justify-center items-center">
                        <img src="{{asset('images\numbers\7.png')}}" alt="" class="h-24">
                        <p class="title text-xl text-[#FEFEFE]">Summer</p>
                    </div>

                    <div class="bg-[#F5A623] w-[11.5rem] h-[8.8rem] rounded-lg flex flex-col  justify-center items-center">
                        <img src="{{asset('images\numbers\9.png')}}" alt="" class="h-24" >
                        <p class="title text-xl text-[#FEFEFE]">Autum</p>
                    </div>
                </article>
            </div>
        </section>

        <x-subtitle id="6">Examples</x-subtitle>

        <section class="space-y-10 relative">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[60rem] " >

            <div class="rounded-lg border-2 border-purple-principal-0 p-5 space-y-5 w-2/3 mx-auto ">
                <p class="paragraph">I live on the <span class="title text-lg">fourth</span>  floor of the building.</p>
                <p class="paragraph">The <span class="title text-lg">ninth</span> chapter of the story reveals a big twist.</p>
            </div>

            <div class="rounded-lg border-2 border-purple-principal-0 p-5 space-y-5 w-2/3 mx-auto ">
                <p class="paragraph">This is the <span class="title text-lg">third</span> movie I've seen this week.</p>
                <p class="paragraph">She is the <span class="title text-lg">seventh</span> child in her family</p>
            </div>
        </section>

        <x-subtitle id="7">Context Of Use</x-subtitle>

        <div class="flex justify-center items-center">

        <section class="grid grid-cols-2 gap-10">
            <div class="rounded-lg shadow-md w-[27rem] h-36 p-5">
                <h3 class="title text-xl">Dates</h3>   
                <p class="paragraph text-center py-5">January is the <span class="title text-lg">first</span>  month.</p>
            </div>

            <div class="rounded-lg shadow-md w-[27rem] h-36 p-5">
                <h3 class="title text-xl">Positions</h3>   
                <p class="paragraph text-center py-5">The team <span class="title text-lg">finished</span> in third place</p>
            </div>

            <div class="rounded-lg shadow-md w-[27rem] h-36 p-5">
                <h3 class="title text-xl">Sequences</h3>   
                <p class="paragraph text-center py-5">The  <span class="title text-lg">first</span> step is to study</p>
            </div>

            <div class="rounded-lg shadow-md w-[27rem] h-36 p-5">
                <h3 class="title text-xl">Education</h3>   
                <p class="paragraph text-center py-5">I study in the <span class="title text-lg">fifth</span> grade.</p>
            </div>
           
            
            </section>
        </div>

    </section>
    </main>


</x-layout>

