@extends('layouts.main')
@section('content')
    <div class="bg-stone-200">
        <div class="flex justify-center items-center pb-20 mx-10">
            <div class="grid flex justify-center items-center lg:grid-cols-3 max-w-7xl pt-14 lg:grid-rows-3 gap-6">
                @foreach($galleries as $gallery)
                    <a data-fancybox="gallery" data-src="{{Voyager::image($gallery->image) }}">
                        <img src="{{ Voyager::image($gallery->thumbnail('cropped','image')) }}" class="rounded-xl"/>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
