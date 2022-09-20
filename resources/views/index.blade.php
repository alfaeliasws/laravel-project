
<x-layout>
    <div class="min-h-screen z-0 bg-[#1a1533] shadow-skill rounded-b-xl">
        <div class="xl:h-[550px] h-[900px] lg:h-[600px] md:h-[700px] sm:h-[800px] bg-bluemain-dark-4 flex flex-wrap">
            <div class="flex lg:w-7/12 md:w-full text-center sm:w-full lg:text-left md:text-center sm:text-center flex-wrap xl:my-32 sm:px-20 px-12 lg:my-20">
                    <p class="text-white fade lg:text-4xl md:text-xl tracking-wider w-full font-bold font-mono md:mt-10 sm:mt-10 mt-5 lg:mt-0">The OG Unique Animal NFT</p>
                    <p class="text-white fade-1 lg:text-lg md:text-md tracking-wider leading-8 w-full pt-1 uppercase font-mono">
                        Just an artist loving to create and build. <br> Finding my freedom space in NFT space.</p>
                    <p class="text-white fade-2 lg:text-regular md:text-sm lg:leading-8 md:leading-9 w-full font-mono">
                        Rare animals aren't just can be found on the earth. They are all around the Solar System! This collection will contain 1000+ new animals that will be minted according to the Planet Series! Check Twitter for further updates on other series releases!
                    </p>
            </div>
            <div class="flex lg:w-5/12 w-full sm:mt-10 mt-10 px-auto sn:pl-5 pl-0 2xl:justify-center md:justify-center sm:justify-center lg:mt-0 lg:items-center justify-center">
                <img src="{{asset("/storage/RACIP VIDEO 2.gif")}}" class="rounded-lg fade-3 shadow-skill xl:h-[400px] lg:h-[350px] sm:h-[300px] h-[300px] object-contain"/>
            </div>
        </div>

        <div class="text-white">

            <p class="check w-full text-white text-center xl:mt-20 sm:mt-10 mt-10 lg:text-4xl md:text-2xl font-semibold font-mono uppercase tracking-wider mb-5">Rare Animal Created In Paint Collection</p>

            <x-search/>

            <div class="flex flex-wrap xl:mx-28 lg:mx-18 md:mx-16 sm:mx-10 mx-10">

                @unless(count($listings) == 0)

                @foreach($listings as $listing)
                <x-card :listing="$listing"/>
                @endforeach

                @else

            </div>
            <p>No Listings Found</p>
            @endunless
        </div>


    </div>

    <div class="text-white w-full min-w-screen">
        <div class="mt-6 p-4">
            {{$listings->links()}}
        </div>
    </div>

</x-layout>