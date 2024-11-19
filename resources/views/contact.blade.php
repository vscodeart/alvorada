@extends('layouts.main')
@section('content')

    <div class="bg-stone-100 pb-20">
        <div class="w-full max-w-7xl mx-auto">


            <div class="grid lg:grid-cols-4 grid-cols-1 pt-20 gap-6 ">
                <div class="h-[111px] border border-[#705140] rounded-lg lg:mx-0 mx-10">
                    <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                        <div class="flex  justify-center items-center font-bold text-2xl font-Contractica">{{ __('Phone') }}</div>
                        <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">{{ $contact->phone }}</div>
                    </div>
                </div>
                <div class="h-[111px]  border border-[#705140] rounded-lg lg:mx-0 mx-10">
                    <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                        <div class="flex  justify-center items-center font-bold text-2xl font-Contractica ">{{ __('Email') }}</div>
                        <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">{{ $contact->mail }}</div>
                    </div>
                </div>
                <div class="h-[111px]  border border-[#705140] rounded-lg lg:mx-0 mx-10">
                    <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                        <div class="flex  justify-center items-center font-semibold text-2xl font-Contractica">{{ __('Address') }}</div>
                        <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">{{ $contact->address }}</div>
                    </div>
                </div>
                <div class="h-[111px]  border border-[#705140] rounded-lg lg:mx-0 mx-10">
                    <div class="grid grid-cols-1 h-full grid-rows-2 gap-2">
                        <div class="flex  justify-center items-center font-bold text-2xl font-Contractica">{{ __('Opening Hours') }}</div>
                        <div class="flex justify-center rounded-lg items-center bg-[#AA714B] bg-opacity-5 font-Montserrat">{{ $contact->opening_hours }}</div>
                    </div>
                </div>

            </div>





            <div class="border border-[#705140] rounded-lg border-opacity-30  items-center mt-20 lg:mx-0 mx-10">
                <div class="grid grid-cols-2 mt-10  grid-rows-1 gap-4">
                    <div class="pl-7 text-3xl font-bold font-Cirka">{{ __('Location') }}</div>
                    <div class="flex justify-end pr-7"><button class="bg-[#8FB0AE] text-white font-bold py-2 px-8 rounded-lg border border-[#FFFFFF]">{{ __('Open Map') }}</button></div>
                </div>
                <div class="h-[280px] mb-5 pt-5 px-5">
                    <iframe class=" rounded-lg" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvxsdaas" src="https://maps.google.com/maps?width=444&amp;height=311&amp;hl=en&amp;q=0179,+39a+ზაქარია+ფალიაშვილის+ქუჩა,+თბილისი+0179/@41.7089548,44.7660993,17z%20+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>







            <div class=" lg:flex lg:justify-beetwen mt-20">
                <div class="grid w-full lg:grid-cols-[35%_65%] lg:grid-rows-1  ">

                    <div class="w-full flex justify-center">
                        <img src="{{Voyager::image($contact->image) }}">
                    </div>

                    <form action="{{ route('page.contact.store') }}" method="post">
                        @csrf

                    <div class="lg:mx-0 mx-10 lg:ml-10 lg:px-0 px-5 bg-[#E5E2CC] border-[#705140] border border-opacity-30 lg:flex  lg:justify-center rounded-lg bg-opacity-30 lg:mt-0 mt-20">
                        <div class=" text-2xl text-left  font-bold text-center @if($locale == 'en')lg:text-5xl mt-14 font-Cirka @else lg:text-1xl mt-10 font-Contractica @endif">
                            {{ __('Contact us for any Information') }}

                            @if ($message = session('success'))
                                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                     role="alert">
                                    <span class="font-medium"> {{ $message }}</span>
                                </div>
                            @endif
                            
                            @if ($message = session('error'))
                                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                     role="alert">
                                    <span class="font-medium ">  {{ $message }}</span>
                                </div>
                            @endif

                            <div class="mt-5 pr-2 pl-2">
                                <input class="w-full bg-transparent bg-white h-12 placeholder:text-black font-normal text-slate-700 text-base  rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" name="name" placeholder="{{ __('Name') }}" />
                                @error('name')
                                <div class="invalid text-sm text-red-800 mt-2 ml-2 flex justify-start">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="grid lg:grid-cols-2 gap-3 lg:gap-5 mt-3 pr-2 pl-2">
                                <div>
                                    <input class="w-full bg-transparent bg-white h-12 placeholder:text-black font-normal text-slate-700 text-base  rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" name="phone_number" placeholder="{{ __('Phone Number') }}" />
                                    @error('phone_number')
                                    <div class="invalid text-sm text-red-800 mt-2 ml-2 flex justify-start">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input class="w-full bg-transparent bg-white h-12 placeholder:text-black font-normal text-slate-700 text-base  rounded-md px-3  transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" name="service" placeholder="{{ __('Service') }}" />
                                    @error('service')
                                    <div class="invalid text-sm text-red-800 mt-2 ml-2 flex justify-start">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class=" lg:mt-5 mt-4 pr-2 pl-2">
                                <input class="w-full bg-transparent  bg-white  placeholder:text-black font-normal placeholder: text-up  text-slate-700 text-base  rounded-md px-3 pb-24 pt-4   transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" name="message" placeholder="{{ __('Message') }}" />
                                @error('message')
                                <div class="invalid text-sm text-red-800 mt-2 ml-2 flex justify-start">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="flex justify-end mt-8">
                                <button type="submit" class="font-Montserrat text-white  bg-[#8FB0AE] border border-white font-medium rounded-lg text-sm px-12 py-2 text-center me-2 mb-6">{{ __('send') }}</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>




        </div>
    </div>
@endsection
