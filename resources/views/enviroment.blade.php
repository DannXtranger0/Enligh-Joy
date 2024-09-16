<x-layout title="Enviroment">

    {{-- Siempre empieza con pt-24 --}}
    <main class="pt-24">
        <aside class="fixed border-r-4 border-blue-principal-0 h-screen   w-52 ">
            <h1 class="title text-xl my-5 text-center">The Enviroment</h1>

            <div class="space-y-6 px-5 relative">

            <img src="{{asset('images\leafs\leaf-index.png')}}" alt="" class="absolute opacity-25 top-16 -z-20">
               <x-index-element 
               id="#basic-vocabulary"
               text="Basic vocabulary"
               />

               <x-index-element 
               id="#how-to"
               text="How to take care of the enviroment"
               />
               
               <x-index-element 
               id="#enviromental-challenges"
               text="Enviromental Challenges"
               />

            </div>
        </aside>


        <section class="ml-52  px-10">
            <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >

            <div class="bg-blue-principal-0 px-5 my-10 space-x-5 w-[50rem] h-12 flex items-center rounded-lg">
                <img src="{{asset('images\icons\estrella.svg')}}" alt="" class="w-8">
                <h3 class="title text-4xl  text-white">The enviroment we live in</h3>
            </div>        
            
            <p class="ml-20 paragraph">Promoting environmental education and awareness is key to addressing these challenges.<br><br>
                Understanding the vocabulary and the problems we face is the first step towards making positive changes.</p>
        
                {{-- subtitulo --}}

                <div class="bg-blue-principal-0 px-5 my-10 space-x-5 w-[50rem] h-12 flex items-center rounded-lg scroll-mt-28" id="basic-vocabulary">
                <img src="{{asset('images\icons\estrella.svg')}}" alt="" class="w-8">
                    <h3 class="title text-2xl  text-white">Basic Vocabulary</h3>
                </div>      

                <article class="grid  grid-cols-3 gap-14 ">

                    <x-enviroment-1
                    title="Enviroment"
                    text="The surroundings or conditions in which a person, animal, or plant lives."
                    img="images\enviroment\tierra.png"
                    />

                    <x-enviroment-1
                    title="Ecosystem"
                    text="A community of living organisms interacting with their physical environment."
                    img="images\enviroment\ecosystem.png"
                    />

                    <x-enviroment-1
                    title="Pollution"
                    text="TContamination of the natural environment, often due to human activities."
                    img="images\enviroment\pollution.png"
                    />

                    <x-enviroment-1
                    title="Biodiversity"
                    text="The variety of life in a particular habitat or ecosystem."
                    img="images\enviroment\biodiversity.png"
                    />

                    <x-enviroment-1
                    title="Conservation"
                    text="TThe preservation and protection of natural resources to prevent degradation."

                    img="images\enviroment\conservation.png"
                    />

                    <x-enviroment-1
                    title="Sustainability"
                    text="Meeting present needs without compromising the ability of future generations to meet theirs."

                    img="images\enviroment\sustainability.png"
                    />


                    <x-enviroment-1
                    title="Climate Change"
                    text="Long-term shifts in temperature and weather patterns, largely due to human activities like burning fossil fuels."

                    img="images\enviroment\climate-change.png"
                    />

                    <x-enviroment-1
                    title="Renewable Energy"
                    text="Energy from sources that naturally replenish, such as wind, solar, and hydropower."

                    img="images\enviroment\renewable-energy.png"
                    />
                 
                    <x-enviroment-1
                    title="Carbon Footprint"
                    text="The total amount of greenhouse gases produced by human activities."
                    img="images\enviroment\carbon-footprint.png"
                    />

                    <x-enviroment-1
                    title="Deforestation"
                    text="The large-scale removal of forests, often for agriculture or urban development."

                    img="images\enviroment\deforestation.png"
                    />

                    <x-enviroment-1
                    title="Greenhouse Gases"
                    text="Gases like carbon dioxide (CO2) and methane (CH4) that trap heat in the Earth's atmosphere"

                    img="images\enviroment\ozone.png"
                    />

                    <x-enviroment-1
                    title="Recycling"
                    text="The process of converting waste materials into new materials to prevent wastage."

                    img="images\enviroment\recycle-symbol.png"
                    />

                </article>

                <div class="bg-blue-principal-0 px-5 my-10 space-x-5 w-[50rem] h-12 flex items-center rounded-lg scroll-mt-28 relative" id="how-to" >
                    <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem]" >
                    
                    <img src="{{asset('images\icons\estrella.svg')}}" alt="" class="w-8">
                        <h3 class="title text-2xl  text-white">How to Take Care of the Environment</h3>

                </div>

                <article class="grid  grid-cols-3 gap-14 ">
                    <x-enviroment-2
                    title="Reduce, Reuse, Recycle"
                    text="TFollow the three R’s to minimize waste. Reduce what you buy, reuse items, and recycle materials like paper, glass, and plastic."

                    img="images\enviroment\recycle-symbol.png"
                    />


                    <x-enviroment-2
                    title="Avoid Single-Use Plastics"
                    text="Replace disposable items with reusable alternatives like cloth bags, metal straws, and refillable bottles."

                    img="images\enviroment\straw.png"
                    />

                   

                    <x-enviroment-2
                    title="Energy Conservation"
                    text="Turn off lights, appliances, and electronics when not in use. Use energy-efficient appliances."

                    img="images\enviroment\battery.png"
                    />

                    <x-enviroment-2
                    title="Use Renewable Energy"
                    text="Support or switch to clean energy sources such as solar, wind, or hydropower."

                    img="images\enviroment\renewable-energy.png"
                    />


                    <x-enviroment-2
                    title="Plant Trees"
                    text="Trees absorb carbon dioxide and produce oxygen. Planting trees helps mitigate climate change."

                    img="images\enviroment\gardening.png"
                    />


                    <x-enviroment-2
                    title="Support Sustainable Products"
                    text="Buy products made from recycled materials or that use sustainable production practices"

                    img="images\enviroment\eco-packaging.png"
                    />

                    <x-enviroment-2
                    title="Save Water"
                    text="Use water efficiently, turn off taps when not in use, and fix leaks."

                    img="images\enviroment\water-scarcity.png"
                    />

                    <x-enviroment-2
                    title="Reduce Carbon Emissions"
                    text="Walk, cycle, carpool, or use public transport to reduce carbon emissions."

                    img="images\enviroment\carbon-footprint advise.png"
                    />

                    <x-enviroment-2
                    title="Compost Organic Waste"
                    text="Compost food scraps and yard waste instead of throwing them in the trash."

                    img="images\enviroment\fertilizer.png"
                    />
                </article>


                <div class="bg-blue-principal-0 px-5 my-10 space-x-5 w-[50rem] h-12 flex items-center rounded-lg scroll-mt-28 relative " id="enviromental-challenges">
                    <img src="{{asset('images\hoja-grande.png')}}" alt="" class="absolute -top-52 right-0 -z-50 h-[80rem] scale-x-[-1]" >
                    
                    <img src="{{asset('images\icons\estrella.svg')}}" alt="" class="w-8">
                        <h3 class="title text-2xl  text-white">Environmental Challenges</h3>
                </div>


                <article class="grid  grid-cols-3 gap-14 ">
                
                    <x-enviroment-1
                    title="Climate Change"
                    text="Global warming, caused by an increase in greenhouse gas emissions, is leading to extreme weather patterns, melting ice caps, rising sea levels, and ecosystem disruption."

                    img="images\enviroment\climate-change.png"
                    />

                    <x-enviroment-1
                    title="Pollution"
                    text="Air, water, and soil pollution are caused by industrial activities, waste disposal, and excessive use of chemicals, harming wildlife and human health."

                    img="images\enviroment\pollution.png"
                    />

                    <x-enviroment-1
                    title="Deforestation"
                    text="The loss of forests contributes to climate change, reduces biodiversity, and disrupts ecosystems that humans and animals depend on."

                    img="images\enviroment\deforestation.png"
                    />

                    <x-enviroment-1
                    title="Loss of Biodiversity"
                    text="Human activities, such as habitat destruction, pollution, and climate change, are leading to a rapid decline in species diversity."

                    img="images\enviroment\badbiodiversity.png"
                    />

                    <x-enviroment-1
                    title="Waste Management"
                    text="The overproduction of waste, particularly plastic, is overwhelming landfills and polluting oceans, harming marine life."

                    img="images\enviroment\trash.png"
                    />

                    <x-enviroment-1
                    title="Overpopulation"
                    text="TIncreased demand for natural resources is putting a strain on the environment, leading to resource depletion, pollution, and habitat destruction."

                    img="images\enviroment\people.png"
                    />

                    <div class="col-span-3 flex justify-center space-x-14">

                    <x-enviroment-1
                    title="Water Scarcity"
                    text="Freshwater resources are being depleted due to overuse, pollution, and climate change, causing water shortages in many regions"

                    img="images\enviroment\water-scarcity.png"
                    />

                    <x-enviroment-1
                    title="Overfishing"
                    text="Excessive fishing is depleting marine populations and disrupting aquatic ecosystems."

                    img="images\enviroment\industrial.png"
                    />
                </div>


            </section>
    </main>

</x-layout>
