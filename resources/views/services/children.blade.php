@extends('layouts.main')
@section('content')

    <div class="bg-[{{ $serviceChildren->color }}] bg-opacity-0.8 flex justify-center items-center">
        <div class="max-w-7xl w-full  ">
            <div class="grid lg:grid-cols-5 lg:gap-4 gap-5 py-10 overflow-hidden grid-cols-2 lg:m-0  lg:mt-0 lg:mb-0  mx-10 font-Cirka  ">
                @foreach($serviceChildren->children as $serviceChild)
                    <a href="{{ route('page.services.children.sub',[$serviceChildren->slug, $serviceChild->slug] ) }}">
                    <div class="


                    @if((!isset($subSlug) && $loop->iteration == 1) ||( isset($subSlug) && $subSlug == $serviceChild->slug))

                     active-child-menu border h-full

                     @else
                     hover:bg-[#3C515A] hover:text-white border h-full

                     @endif   rounded-lg lg:text-xl lg:py-2 py-5 px-5 lg:mt-0 mt-1  flex font-semibold  justify-center items-center text-center bg-white">
                        {{ $serviceChild->getTranslatedAttribute('name') }}
                    </div>
                    </a>
                @endforeach



            </div>
        </div>
    </div>

    <div class="lg:h-52 h-28 flex justify-center text-3xl lg:text-5xl font-bold items-center font-Cirka">
        {{ $firstChildren->getTranslatedAttribute('name') }}
    </div>

    <div class="flex justify-center items-center flex-col">

        @foreach($firstChildren->children as $subChild)
            @if($loop->odd)
                <div class="max-w-7xl w-full bg-[{{ $serviceChildren->color }}] bg-opacity-50 lg:rounded-lg @if($loop->last) mb-10 @endif">
                    <div class="grid   lg:grid-cols-[40%_54%] lg:grid-rows-1 gap-2 lg:gap-20  rounded-xl ">
                        <div class="  w-12/12  lg:rounded-xl lg:flex-col flex justify-center  ">
                            <div class="lg:w-full lg:aspect-[17/13] aspect-[14/10] w-[85%] rounded-lg bg-center bg-cover flex justify-center  items-end   mb-4 lg:mb-8 mt-10 lg:mt-8 lg:ml-10 "
                                 style="background-image: url('{{Voyager::image($subChild->image) }}');">
                                <div class="bg-[#171717] bg-opacity-60 flex  items-center w-full justify-beetwen   rounded-lg">
                                    <div class="pl-5 pt-5 pb-5">
                                        <div class="text-white font-semibold text-3xl font-Cirka ">{{ $subChild->getTranslatedAttribute('image_name') }}</div>
                                        <div class="text-white mt-2 font-Montserrat">{{ $subChild->getTranslatedAttribute('image_time') }}</div>
                                    </div>
                                    <div class=" flex justify-end items-end flex-grow  ">
                                        <div class="border text-2xl rounded-xl text-white border-gray-200 mr-5 py-3 px-5 font-Cirka"
                                             style="border-color: #8FB0AE;">
                                            {{ $subChild->price }} {{ __('GEL') }}
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class=" rounded-xl flex-col flex   items-center  ">
                            <div
                                class="bg-white lg:w-[95%] w-[85%] lg:mr-10 lg:mt-8 lg:ml-0 mb-10 lg:mb-8 rounded-lg flex-grow flex items-center justify-center">
                                <div class=" text-black w-10/12 h-[90%]">
                                    <div class="lg:text-5xl text-3xl border-b-2 pt-3 pb-8 font-Cirka">
                                        {{ $subChild->getTranslatedAttribute('name') }}
                                    </div>
                                    <div class="lg:pt-9 pt-4 pb-10 lg:pb-9 font-Montserrat">
                                        {!! $subChild->getTranslatedAttribute('content') !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else

                <div class="max-w-7xl w-full bg-[{{ $serviceChildren->color }}] bg-opacity-50 lg:rounded-lg mt-10 mb-10">
                    <div class="grid   lg:grid-cols-[54%_40%] lg:grid-rows-1 gap-2 lg:gap-10  rounded-xl ">

                        <div class=" order-last lg:order-first rounded-xl flex-col flex   items-center  ">
                            <div
                                class="bg-white lg:w-[95%] w-[85%] lg:ml-10 lg:mt-8 mt-4 lg:mr-0 mb-8 rounded-lg flex-grow flex items-center justify-center">
                                <div class=" text-black w-10/12 h-[90%]">
                                    <div class="lg:text-5xl text-3xl border-b-2 pt-3 pb-8 font-Cirka">
                                        {{ $subChild->getTranslatedAttribute('name') }}
                                    </div>
                                    <div class="lg:pt-9 pt-4 pb-10 lg:pb-9 font-Montserrat">
                                        {!! $subChild->getTranslatedAttribute('content') !!}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="  w-12/12  lg:rounded-xl lg:flex-col flex justify-center  ">
                            <div class="lg:w-full order-last lg:aspect-[17/13] aspect-[14/10] w-[85%] rounded-lg bg-center bg-cover flex justify-center  items-end   mt-10 lg:mb-8 lg:mt-12 lg:mt-8 lg:mr-10 "
                                 style="background-image: url('{{Voyager::image($subChild->image) }}');">
                                <div class="bg-[#171717] bg-opacity-60 flex  items-center w-full justify-beetwen   rounded-lg">
                                    <div class="pl-5 pt-5 pb-5">
                                        <div class="text-white font-semibold text-3xl font-Cirka">{{ $subChild->getTranslatedAttribute('image_name') }}</div>
                                        <div class="text-white mt-2 font-Montserrat">{{ $subChild->getTranslatedAttribute('image_time') }}</div>
                                    </div>
                                    <div class=" flex justify-end items-end flex-grow  ">
                                        <div class="border text-2xl rounded-xl text-white border-gray-200 mr-5 py-3 px-5 font-Cirka"
                                             style="border-color: #8FB0AE;">
                                            {{ $subChild->price }} {{ __('GEL') }}
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endif

        @endforeach




    </div>


@endsection
