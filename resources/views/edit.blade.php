<x-layout>
    <div>
        <p class="text-white md:my-10 sm:my-8 my-5 md:mx-48 sm:mx-20 mx-10 tracking-widest md:text-4xl sm:text-2xl text-2xl uppercase font-sans font-bold">Edit {{$listing->name}}</p>
        <div class="text-white min-h-min mb-10 bg-bluemain-dark-5 md:mx-48 sm:mx-20 mx-10 md:my-10 my-5 sm:px-10 px-5 rounded-3xl shadow-new">

            <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data" class="min-h-[100px]">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap">

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="series" class="w-full">Series:</label>
                    </div>
                    <input type="text" name="series" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Which series it belongs to" value="{{$listing->series}}"/>
                    @error('series')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$listing->series}}</p>
                    @enderror

                    {{-- @if the racip is racip genesis --}}
                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="name" class="w-full">Name:</label>
                    </div>
                    <input type="text" name="name" class="sm:pl-4 pt-2 pl-2 tracking-widest h-30 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70 placeholder:text-sm" 
                    placeholder="Use This Format 'RACIP #number'" value="{{$listing->name}}"/>
                    @error('name')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror


                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    <p class="mb-4">Picture:</p>
                    <label for="picture" class="upload-file text-gray-400 hover:text-gray-200 bg-bluemain-light w-full lg:text-lg rounded-lg hover:px-6 hover:bg-bluemain-light-2 transition-all">Choose File</label>
                    <input id="picture" type="file" name="picture"/>
                    </label>
                    <div>
                    <img src="{{$listing->picture ?  str_contains($listing->picture, 'images') ?  asset('storage/' . $listing->picture) :  $listing->picture : asset('/storage/RACIPTITLE1.png')}}" class="mt-5 fade-2 h-[400px] align-middle rounded-2xl">
                    </div>
                    <div class="text-sm mt-2 font-medium tracking-wide w-full" id="file-upload-filename"></div>
                    </div>
                    @error('picture')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="species_name" class="w-full">Species Name:</label>
                    </div>
                    <input type="text" name="species_name" class="sm:pl-4 pt-2 pl-2 tracking-widest h-30 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70 placeholder:text-sm" 
                    placeholder="What is your species name" value="{{$listing->species_name}}"/>
                    @error('species_name')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="dominant_gene" class="w-full">Dominant Gene:</label>
                    </div>
                    <input type="text" name="dominant_gene" class="sm:pl-4 pt-2 pl-2 tracking-widest h-30 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70 placeholder:text-sm" 
                    placeholder="Animal's dominant gene" value="{{$listing->dominant_gene}}"/>
                    @error('dominant_gene')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="secondary_gene" class="w-full">Secondary Gene:</label>
                    </div>
                    <input type="text" name="secondary_gene" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's secondary gene" value="{{$listing->secondary_gene}}"/>
                    @error('secondary_gene')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="special_gene" class="w-full">Special Gene:</label>
                    </div>
                    <input type="text" name="special_gene" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's special gene" value="{{$listing->special_gene}}"/>
                    @error('special_gene')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="class" class="w-full">Class:</label>
                    </div>
                    <input type="text" name="class" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's class" value="{{$listing->class}}"/>
                    @error('class')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="geographical_place" class="w-full">Geographical Place:</label>
                    </div>
                    <input type="text" name="geographical_place" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's geographical_place" value="{{$listing->geographical_place}}"/>
                    @error('geographical_place')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="dietary" class="w-full">Dietary:</label>
                    </div>
                    <input type="text" name="dietary" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's dietary" value="{{$listing->dietary}}"/>
                    @error('dietary')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="habitat" class="w-full">Habitat:</label>
                    </div>
                    <input type="text" name="habitat" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's habitat" value="{{$listing->habitat}}"/>
                    @error('dietary')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="art_style" class="w-full">Art Style:</label>
                    </div>
                    <input type="text" name="art_style" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's art style" value="{{$listing->art_style}}"/>
                    @error('art_style')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="pattern" class="w-full">Pattern:</label>
                    </div>
                    <input type="text" name="pattern" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's pattern" value="{{$listing->pattern}}"/>
                    @error('pattern')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                    
                        <label for="dominant_color" class="w-full">Dominant Color:</label>
                    </div>
                    <input type="text" name="dominant_color" class="pl-4 tracking-widest h-10 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Animal's color" value="{{$listing->dominant_color}}"/>
                    @error('dominant_color')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                        <label for="description" class="w-full">Description:</label>
                    </div>
                    <textarea name="description" class="pl-4 pt-2 tracking-widest h-60 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Description">{{$listing->description}}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <div class="font-bold sm:text-2xl text-lg font-sans tracking-kinda pt-3">
                        <label for="url" class="w-full">URL:</label>
                    </div>
                    <textarea name="url" class="pl-4 mb-10 pt-2 tracking-widest h-30 w-full my-4 shadow-new rounded-xl bg-bluemain-dark-6 placeholder:opacity-70" 
                    placeholder="Opensea URL">{{$listing->url}}</textarea>
                    @error('url')
                    <p class="text-red-500 text-xs mt-1 w-full">{{$message}}</p>
                    @enderror

                    <button class="bg-bluemain-light text-gray-200 py-2 px-2 rounded-lg hover:bg-bluemain-light-2 hover:px-4 transition-all mb-5 font-mono font-semibold text-lg ">
                        Save
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-layout>