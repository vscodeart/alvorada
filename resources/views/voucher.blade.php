@extends('layouts.main')
@section('content')
    <div class="bg-stone-200  justify-center items-center pb-20">
        <div class="max-w-7xl mx-auto flex ">
            <div class="grid  w-full grid-cols-1 grid-rows-3 gap-4">

                @foreach($vouchercategories as $voucher)
                    <div class="text-center flex flex-col justify-center items-center text-4xl  font-Cirka pt-12 pb-12">
                        {{ $voucher->getTranslatedAttribute('name') }}

                        @foreach($voucher->vouchers as $vcat)
                            <div
                                class=" rounded-lg w-11/12 mt-10 bg-cover bg-center flex flex-col justify-center items-center lg:justify-start  @if($vcat->text_position == 'Left') lg:items-start @else lg:items-end @endif bg-[url('{{Voyager::image($vcat->image) }}')] aspect-[16/9] ">

                                @if($vcat->text_position == 'Left')
                                    <div
                                        class="font-Cirka  bg-white h-28 text-white lg:w-[496px] w-[90%] rounded-lg lg:ml-10 mt-12 inline-flex lg:flex lg:pr-10 lg:pl-10 lg:justify-center justify-center items-center bg-opacity-10">
                                        {{ $vcat->getTranslatedAttribute('name') }}
                                    </div>

                                    <div
                                        class="font-Montserrat bg-white text-sm lg:text-lg space-y-3 lg:justify-center items-center text-black w-[90%]  lg:w-[496px] mr-10 mb-10 pl-5 pt-5 pr-5 pb-5 rounded-lg ml-10 lg:mt-12 mt-5 text-left  ">
                                        {!! $vcat->getTranslatedAttribute('content') !!}
                                    </div>
                                @else

                                    <div
                                        class="bg-black h-28 text-white justify-center lg:w-[496px] w-[90%] rounded-lg lg:mr-10 mt-12 inline-flex lg:flex pl-5 pr-5 lg:justify-center items-center bg-opacity-50">
                                        {{ $vcat->getTranslatedAttribute('name') }}
                                    </div>

                                    <div
                                        class="font-Montserrat  bg-white text-sm lg:text-lg space-y-3 lg:justify-center items-center text-black w-[90%]  lg:w-[496px] mr-10 mb-10 pl-5 pt-5 pr-5 pb-5 rounded-lg ml-10 lg:mt-12 mt-5 text-left  ">
                                        {!! $vcat->getTranslatedAttribute('content') !!}

                                    </div>

                                @endif


                            </div>
                        @endforeach


                    </div>
                @endforeach

            </div>


        </div>


    </div>
@endsection
