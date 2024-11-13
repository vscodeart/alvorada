@extends('layouts.main')
@section('content')

    <div class="bg-stone-200 flex flex-col  items-center pb-20">

        <div class="flex max-w-7xl lg:mt-16 mt-10 mx-10 grid lg:grid-cols-2  grid-cols-1 grid-rows-1">

            <div class="lg:pr-24 flex flex-col justify-between w-full lg:mb-0 mb-10">
                <div class="wellcome text-neutral-800 text-5xl text-center lg:text-left">
                    Who We Are
                </div>
                <div class="mt-8 space-y-3 text-xl text-neutral-800 gap-5 font-Montserrat">
                    <p>
                        Welcome to Alvorada - a multifunctional aesthetic and wellness space in the center of the city.
                    </p>
                    <p>
                        Our brand combines traditional and innovative approaches and offers a wide range of services.
                    </p>
                    <p>
                        A highly qualified team is committed to providing each user with a unique and engaging experience.
                    </p>
                </div>
                <div class="inline-block flex items-center justify-center lg:justify-start">
                    <div class=" mt-7 pl-6 pr-6 pt-2 pb-2 text-xl border text-slate-800 border-slate-800 rounded-3xl text-center inline-block font-Montserrat">
                        {{ __('Learn more') }}
                    </div>
                </div>

            </div>


            <div class="flex">
                <img class="w-full" src="images/whoweare.png" />
            </div>


        </div>

        <div class="grid lg:grid-cols-3  grid-cols-1 grid-rows-1 gap-0 max-w-7xl mx-10 gap-6 lg:mt-20 mt-10">
            <div class="flex flex-col bg-white border border-amber-900 items-center rounded-xl ">
                <div class="mt-9 text-3xl text-neutral-800 font-semibold font-Cirka">
                    OUR MISSION
                </div>
                <div class="w-10/12 mt-5 mb-5 shadow-lg rounded bg-stone-100">
                    <p class="pt-2 pb-2 pl-4 pr-2 font-light text-black font-Montserrat">
                        Alvorada's mission is simple: to ensure that our customers best express their inner and outer beauty - by creating personalized aesthetic and wellness experiences.</p>
                    <!--                <div class="border ml-3 mb-5 mt-3 rounded-3xl border-stone-800 inline-block  text-stone-800 pt-1 pb-1 pr-4 pl-4 font-Montserrat">-->
                    <!--                    Learn more-->
                    <!--                </div>-->
                </div>
            </div>
            <div class="flex flex-col bg-white border border-amber-900 items-center rounded-xl ">
                <div class="mt-9 text-3xl text-neutral-800 font-semibold font-Cirka">
                    OUR VISION
                </div>
                <div class="w-10/12 mt-5 mb-5 shadow-lg rounded bg-stone-100">
                    <p class="pt-2 pb-2 pl-4 pr-2  font-light text-black font-Montserrat">
                        To be the premier destination where beauty, wellness and self-expression come together, inspiring people to live a balanced, confident lifestyle.</p>
                    <!--                <div class="border ml-3 mb-5 mt-3 rounded-3xl border-stone-800 inline-block  text-stone-800 pt-1 pb-1 pr-4 pl-4 font-Montserrat">-->
                    <!--                    Learn more-->
                    <!--                </div>-->
                </div>
            </div>
            <div class="flex flex-col bg-white border border-amber-900 items-center rounded-xl ">
                <div class="mt-9 text-3xl text-neutral-800 font-semibold font-Cirka">
                    OUR GOAL
                </div>
                <div class="w-10/12 mt-5 mb-5 shadow-lg rounded bg-stone-100">
                    <p class="pt-2 pb-2 pl-4  pr-2 font-light text-black font-Montserrat">
                        Our goal is to create a unique customer experience that focuses on offering personalized services and implementing innovative technologies.</p>
                    <!--                <div class="border ml-3 mb-5 mt-3 rounded-3xl border-stone-800 inline-block  text-stone-800 pt-1 pb-1 pr-4 pl-4 font-Montserrat">-->
                    <!--                    Learn more-->
                    <!--                </div>-->
                </div>
            </div>

        </div>

    </div>

@endsection
