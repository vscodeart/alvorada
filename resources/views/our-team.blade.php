@extends('layouts.main')
@section('content')
    <div class="bg-stone-200">
        <div class=" flex justify-center items-center">
            <div
                class="max-w-7xl mt-14 mb-14  flex items-center justify-center grid lg:grid-cols-3 lg:grid-rows-2 gap-8">

                @foreach($ourTeams as $team)
                    <div>
                        <img src="{{Voyager::image($team->image) }}" class="w-96 rounded-xl">
                        <div class="w-full">
                            <div
                                class="mx-5 shadow-lg -mt-8 relative flex flex-col rounded-lg justify-center items-center bg-white h-36">
                                <div
                                    class="text-2xl font-semibold font-Cirka">{{ $team->getTranslatedAttribute('name') }}</div>
                                <div
                                    class="mt-3 text-[#AA714B] text-normal font-Montserrat">{{ $team->getTranslatedAttribute('description') }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
