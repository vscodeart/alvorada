@extends('layouts.main')
@section('content')
    <div class="bg-stone-200">
        <div class="flex justify-center items-center pb-20">
            <div class="grid flex justify-center items-center lg:grid-cols-3 max-w-7xl pt-20 grid-rows-1 gap-6">
                @foreach($blogs as $blog)
                    <div class="flex justify-center">
                        <div class="rounded-lg lg:mx-0 mx-10 bg-cover flex flex-col items-center justify-end bg-center h-[503px] bg-[url('{{ Voyager::image($blog->thumbnail('cropped', 'image')) }}')]">
                            <div class="bg-stone-200 w-11/12 text-[#AA714B] text-xl p-2 mb-5 rounded text-center font-bold">
                                {{ $blog->getTranslatedAttribute('name') }}
                            </div>
                            <div class="bg-stone-200 w-11/12 py-3 px-6 mb-5 rounded ">
                                {!! \Illuminate\Support\Str::limit(strip_tags($blog->getTranslatedAttribute('content')), 150, $end='...') !!}
                                <div class="grid mt-4 grid-cols-2 grid-rows-1">
                                    <a href="{{ route('page.blog.full', $blog->slug) }}">
                                        <div class="border py-1 border-black w-3/4 inline-block text-large rounded-2xl px-1 text-center font-semibold">
                                            {{ __("Learn More") }} </div>
                                    </a>
                                    <div class="flex justify-end text-[#AA714B] mt-1">
                                    @php
                                    $carbonLocale = 'en';
                                    if($locale == 'ge'){
                                       $carbonLocale = 'ka';
                                    }
                                    \Carbon\Carbon::setLocale($carbonLocale);
                                    @endphp
                                    {{ \Carbon\Carbon::parse( $blog->created_at)->translatedFormat('l d,  Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
@endsection
