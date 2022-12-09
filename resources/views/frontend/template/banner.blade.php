<?php
$singleBanner = App\Models\Slider::latest()->first();
$sliderBanner = App\Models\Slider::latest()
    ->take(3)
    ->get();
?>
@if (isset($singleBanner))
    <div class="lg:hidden">
        <div>
            <img src="{{ asset('images/' . $singleBanner->image) }}" class="w-full" alt="hands together" />
        </div>

        <div class="space-y-2 md:space-y-3 p-4 md:py-6 md:px-10">
            <div>
                <div>
                    <img src="./resources/images/icons/zigzag-line.svg" alt="hands together" />
                </div>
                <div class="text-xs text-textDark font-openSans font-700" style="letter-spacing: 0.29em">
                    {{ $singleBanner->title }}
                </div>
            </div>
            <div class="text-primary font-playFair font-700 text-xl" style="letter-spacing: 0.035em">
                {{ $singleBanner->short_description }}
            </div>
            <div class="text-textLight text-sm leading-6">
                {{-- <span class="hidden md:inline">Rotary Club of Himalayan Golf Course is an amazing club that aims
                    to provide astonishing experience.</span> --}}
                {{ $singleBanner->description }}
            </div>
            <div class="flex justify-end">
                <a href="{{ $singleBanner->link }}"
                    class="flex items-center space-x-2 cursor-pointer bg-secondary overflow-hidden rounded px-6 py-3 text-sm text-white">
                    <div>Read More</div>
                    <div>
                        <img src="./resources/images/icons/double-arrow.svg" alt="double arrow" />
                    </div>
                </a>
            </div>
        </div>
    </div>



    <!-- Hero Section for Laptop and Higher Resolution Devices -->
    <section class="hidden lg:block">
        <div class="bannerSwiper overflow-hidden">
            <div class="swiper-wrapper">
                <!-- Individual Slide -->
                @foreach ($sliderBanner as $slider)
                    <div class="swiper-slide">
                        <div class="relative">
                            <div class="w-full h-[538px]">
                                <img src="{{ asset('images/' . $slider->image) }}" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <div
                                    class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30 text-white grid place-items-center">
                                    <div class="w-full max-w-7xl mx-auto">
                                        <div class="flex w-full px-10 xl:px-14 space-x-6">
                                            <div class="space-y-6">
                                                <div class="bg-secondary h-24 w-0.75 rounded-t-full rounded-b-full">
                                                </div>
                                                <div class="bg-lightSecondary h-6 w-0.75 rounded-t-full rounded-b-full">
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div>
                                                    <div>
                                                        <img src="./resources/images/icons/zigzag-line.svg"
                                                            alt="zigzag line" />
                                                    </div>
                                                    <div class="text-xs font-openSans font-700"
                                                        style="letter-spacing: 0.415em">
                                                        {{ $slider->title }}
                                                    </div>
                                                </div>
                                                <h1 class="text-3xl font-playFair font-900">
                                                    {!! nl2br($slider->short_description) !!}
                                                </h1>
                                                <div class="">
                                                    {{ $slider->description }}
                                                </div>
                                                <div class="inline-block">
                                                    <a href="{{ $slider->link }}"
                                                        class="flex items-center space-x-2 cursor-pointer bg-secondary overflow-hidden rounded px-6 py-3 text-sm text-white">
                                                        <div>Read More</div>
                                                        <div>
                                                            <img src="./resources/images/icons/double-arrow.svg"
                                                                alt="double arrow" />
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <!-- SCroll arrow for herosection -->
        <div class="relative max-w-7xl mx-auto">
            <a id="scroll-arrow"
                class="absolute bottom-0 right-0 translate-y-1/2 -translate-x-full bg-secondary w-16 h-16 flex items-center justify-center cursor-pointer z-20"
                href="#about">
                <img src="./resources/images/icons/arrow-down-large.svg" alt="down arrow" />
            </a>
        </div>
    </section>

    <!-- Small Icons For Laptop and Higher Resolutions Only -->
    <div class="hidden lg:flex swiper-pagination max-w-7xl mx-auto px-14 lg:mb-2"></div>
@endif
