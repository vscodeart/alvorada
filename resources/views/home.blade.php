@extends('layouts.main')
@section('content')

    <div class="bg-stone-200 flex flex-col  items-center pb-20">

        <div class="flex max-w-7xl lg:mt-16 mt-10 mx-10 grid lg:grid-cols-2  grid-cols-1 grid-rows-1">

            <div class="lg:pr-24 flex flex-col justify-between w-full lg:mb-0 mb-10">
                <div class=" text-neutral-800 text-5xl text-center lg:text-left wellcome">
                     {{ $whoWeAre->name }}
                </div>
                <div class="mt-8 space-y-3  text-neutral-800 gap-5 @if($locale == 'ge')text-lg font-Contractica  @else text-xl font-Montserrat @endif">
                     {!! $whoWeAre->content !!}
                </div>
                <div class="inline-block flex items-center justify-center lg:justify-start">
                    <div class=" mt-7 pl-6 pr-6 pt-2 pb-2 text-xl border text-slate-800 border-slate-800 rounded-3xl text-center inline-block font-Montserrat">
                        {{ __('Learn more') }}
                    </div>
                </div>

            </div>


            <div class="flex">
                <img class="w-full" src="{{Voyager::image($whoWeAre->image) }}" />
            </div>


        </div>

        <div class="grid lg:grid-cols-3  grid-cols-1 grid-rows-1 gap-0 max-w-7xl mx-10 gap-6 lg:mt-20 mt-10">

            @foreach($whoWeAre->children as $wch)
                <div class="flex flex-col bg-white border border-amber-900 items-center rounded-xl ">
                    <div class="mt-9 text-3xl text-neutral-800 font-semibold font-Cirka">
                        {{ $wch->getTranslatedAttribute('name') }}
                    </div>
                    <div class="w-10/12 mt-5 mb-5 shadow-lg rounded bg-stone-100">
                         {!! $wch->getTranslatedAttribute('content') !!}
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
