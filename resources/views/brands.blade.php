@extends('layouts.main')
@section('content')



    <div class="bg-stone-200 px-10" style="position:relative; z-index: -1;">
        <div class="flex justify-center items-center pb-10">
            <div class="grid  justify-center  items-center text-center lg:grid-cols-4 max-w-7xl pt-10 grid-rows-2 gap-7">

                @foreach($brands as $brand)
                    <div class="relative">
                        <div class="border border-[#E8D0B1] h-56 w-full lg:w-72 flex flex-col items-center rounded-lg ">
                            <div class="flex justify-center h-full">
                                <div class="flex justify-center items-center text-center mb-14">
                                    <img src="{{Voyager::image($brand->image) }}" class="w-4/5">
                                </div>
                            </div>
                            <div class="absolute bottom-3 bg-[#E8D0B1] font-Cirka rounded-lg w-11/12 font-semibold text-2xl flex justify-center items-center text-center mt-6 p-2">
                                {{ $brand->name }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection
