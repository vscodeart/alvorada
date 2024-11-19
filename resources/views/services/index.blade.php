@extends('layouts.main')
@section('content')


    <div class="my-10 mx-10 lg:flex justify-center items-center">
        <div class="max-w-7xl flex items-center justify-center grid grid-cols-1 grid-rows-8 lg:grid-cols-4 lg:grid-rows-2 gap-8  ">

            @foreach($services as $service)
                <div class="flex justify-center items-center">
                    <div class="h-96 lg:w-72 w-full rounded-lg overflow-hidden shadow-lg border bg-cover bg-center flex flex-col @if($loop->odd) justify-end @endif" style="background-image: url('{{Voyager::image($service->image) }}'); border-color:'{{ $service->border_color }}';">
                        <div class="bg-[{{ $service->color }}] bg-opacity-75 w-full text-center p-6 rounded-lg border border-[#7A9F9B]">
                            <p class="text-white text-2xl font-semibold mb-4 font-Cirka">{{ $service->getTranslatedAttribute('name') }}</p>
                            <a href="{{ route('page.services.children',$service->slug) }}">
                                <button class="bg-[#8FB0AE] text-white font-semibold font-Montserrat py-2 px-6 rounded-lg shadow hover:brightness-105 border">
                                    {{ __('Learn more') }}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>


@endsection
