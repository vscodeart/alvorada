@extends('layouts.main')
@section('content')
    <div class="bg-stone-200  justify-center items-center lg:pt-20 pt-10 pb-20 px-10">
        <div class="flex justify-center items-center lg:pb-20 pb-10 lg:text-4xl text-2xl font-semibold font-Cirka ">{{ $model->name }}</div>

        <div class="max-w-7xl mx-auto flex ">
            <img src="{{Voyager::image($model->image) }}" class="w-full rounded-lg">
        </div>

        <div class="max-w-7xl mx-auto flex mt-10 pb-20 border border-[#705140] rounded-lg p-6 font-Montserrat">
             {!! $model->content !!}
        </div>
    </div>
@endsection
