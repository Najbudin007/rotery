@extends('frontend.layouts.master')
@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="px-4 py-6 md:p-10 xl:px-14 space-y-5">
            <!-- Header -->
            <h1 class="font-playFair font-700 text-lg md:text-xl lg:text-2xl text-primary lg:text-center">
                ROTARY YEAR PHOTOS
            </h1>

            <!-- Year Slider -->
            <div class="swiper font-600 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper text-xs flex" id="swiper-wrapper-f2c3a80f9a99aad9" aria-live="polite">
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
            </div>

            <!-- Rotary Photos -->
            <div class="grid gap-5 lg:gap-8 grid-cols-2 lg:grid-cols-4">
                <!-- Front Large Photo -->
                <div class="h-48 md:h-96 lg:h-128 col-span-2 lg:col-span-4">
                    <img src="../resources/images/photos/photo-1.png" alt="rotary photo" class="w-full h-full">
                </div>

                <!-- Two Large Photos -->
                <div class="grid grid-cols-2 col-span-2 lg:col-span-4 gap-5 lg:gap-8">
                    <div class="h-36 md:h-60 lg:h-[426px]">
                        <img src="../resources/images/photos/photo-2.png" alt="rotary photo" class="w-full h-full">
                    </div>
                    <div class="h-36 md:h-60 lg:h-[426px]">
                        <img src="../resources/images/photos/photo-3.png" alt="rotary photo" class="w-full h-full">
                    </div>
                </div>

                <!-- Other Smaller Photos -->
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-2.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-3.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-4.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-5.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-6.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-7.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-8.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px]">
                    <img src="../resources/images/photos/photo-9.png" alt="rotary photo" class="w-full h-full">
                </div>

                <!-- Other Smaller Photos For Laptop and Higher Resolution Devices -->
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-2.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-3.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-4.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-5.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-6.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-7.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-8.png" alt="rotary photo" class="w-full h-full">
                </div>
                <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                    <img src="../resources/images/photos/photo-9.png" alt="rotary photo" class="w-full h-full">
                </div>
            </div>
        </div>
    </div>
@endsection
