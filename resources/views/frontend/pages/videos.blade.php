@extends('frontend.layouts.master')
@section('content')
    <style>
        iframe {
            width: 100%;
            height: 100%;
        }
    </style>
    <div class="max-w-7xl mx-auto">
        <div class="px-4 py-6 md:p-10 xl:px-14 space-y-5">
            <!-- Header -->
            <h1 class="font-playFair font-700 text-lg md:text-xl lg:text-2xl text-primary lg:text-center">
                ROTARY VIDEOS
            </h1>

            <!-- Year Slider -->
            {{-- <div class="swiper font-600 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper text-xs flex" id="swiper-wrapper-d1ee3e6dfc012e5c" aria-live="polite">
                    <div class="flex-shrink-0 text-center w-28 lg:w-30 swiper-slide bg-primary border border-primary text-white py-2.5 rounded cursor-pointer swiper-slide-active"
                        role="group" aria-label="1 / 8" style="margin-right: 16px;">
                        2021-2022
                    </div>
                    <div class="flex-shrink-0 text-center w-28 lg:w-30 swiper-slide border border-primary text-primary py-2.5 rounded cursor-pointer swiper-slide-next"
                        role="group" aria-label="2 / 8" style="margin-right: 16px;">
                        2020-2021
                    </div>
                    <div class="flex-shrink-0 text-center w-28 lg:w-30 swiper-slide border border-primary text-primary py-2.5 rounded cursor-pointer"
                        role="group" aria-label="3 / 8" style="margin-right: 16px;">
                        2020-2020
                    </div>
                    <div class="flex-shrink-0 text-center w-28 lg:w-30 swiper-slide border border-primary text-primary py-2.5 rounded cursor-pointer"
                        role="group" aria-label="4 / 8" style="margin-right: 16px;">
                        2021-2020
                    </div>
                    <div class="flex-shrink-0 text-center w-28 lg:w-30 swiper-slide border border-primary text-primary py-2.5 rounded cursor-pointer"
                        role="group" aria-label="5 / 8" style="margin-right: 16px;">
                        2020-2019
                    </div>
                    <div class="flex-shrink-0 text-center w-28 lg:w-30 swiper-slide border border-primary text-primary py-2.5 rounded cursor-pointer"
                        role="group" aria-label="6 / 8" style="margin-right: 16px;">
                        2019-2018
                    </div>
                    <div class="flex-shrink-0 text-center w-28 lg:w-30 swiper-slide border border-primary text-primary py-2.5 rounded cursor-pointer"
                        role="group" aria-label="7 / 8" style="margin-right: 16px;">
                        2018-2017
                    </div>
                    <div class="flex-shrink-0 text-center w-40 swiper-slide border border-primary text-primary py-2.5 rounded cursor-pointer"
                        role="group" aria-label="8 / 8" style="margin-right: 16px;">
                        A LONG TIME AGO
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div> --}}

            <!-- Rotary Videos -->
            <div class="grid gap-5 lg:gap-8 grid-cols-2 lg:grid-cols-3">
                <!-- Front Large Video -->
                @foreach ($videos as $key => $video)
                    @if ($key <= 0)
                        <div class="h-48 md:h-96 lg:h-128 col-span-2 lg:col-span-3">
                            {{-- <iframe class="w-full h-full" src="https://www.youtube.com/embed/7Bc6TUtelto"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe> --}}
                            {!! $video->link !!}
                        </div>
                    @endif
                    @if ($key >= 1)
                        <!-- Other Smaller Videos -->
                        <div class="h-36 md:h-[243px] lg:h-[258px]">
                            {!! $video->link !!}

                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
