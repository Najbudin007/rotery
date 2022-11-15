<?php $banner = App\Models\Slider::first(); ?>
<div>
    <!-- Hero Section For Mobile -->
    <div class="md:hidden">
        <img src="./resources/images/home/hands-together-mobile.png" {{ asset('images/' . $banner->image) }} class="w-full"
            alt="hands together" />
    </div>

    <!-- Hero Section For Tablet -->
    <div class="hidden md:block lg:hidden">
        <img src="{{ asset('images/' . $banner->image) }}" class="w-full" alt="hands together" />
    </div>

    <!-- Common Hero Section Contents For Mobile And Tablet -->
    <div class="space-y-2 md:space-y-3 p-4 md:py-6 md:px-10 lg:hidden">
        <div>
            <div>
                <img src="./resources/images/icons/zigzag-line.svg" alt="hands together" />
            </div>
            <div class="text-xs text-textDark font-openSans font-700" style="letter-spacing: 0.29em">
                {{$banner->title}}
            </div>
        </div>
        <div class="text-primary font-playFair font-700 text-xl" style="letter-spacing: 0.035em">
            {!! nl2br($banner->description) !!}
        </div>
        <div class="text-textLight text-sm leading-6">
            <span class="hidden md:inline">
                {!! nl2br($banner->short_description) !!}
        </div>
        <div class="flex justify-end">
            <a href="{{route('about-our-club')}}"
                class="flex items-center space-x-2 cursor-pointer bg-secondary overflow-hidden rounded px-6 py-3 text-sm text-white">
                <div>Read More</div>
                <div>
                    <img src="./resources/images/icons/double-arrow.svg" alt="double arrow" />
                </div>
            </a>
        </div>
    </div>

    <!-- Hero Section For Laptop and Higher Resolution Devices -->
    <div class="hidden lg:block relative hero-section">
        <div class="bg-black bg-opacity-30 w-full h-full">
            <div class="relative max-w-7xl mx-auto h-full text-white grid place-items-center">
                <div class="flex w-full px-10 xl:px-14 space-x-6">
                    <div class="space-y-6">
                        <div class="bg-secondary h-24 w-0.75 rounded-t-full rounded-b-full"></div>
                        <div class="bg-lightSecondary h-6 w-0.75 rounded-t-full rounded-b-full"></div>
                    </div>
                    <div class="space-y-2">
                        <div>
                            <div>
                                <img src="./resources/images/icons/zigzag-line.svg" alt="zigzag line" />
                            </div>
                            <div class="text-xs font-openSans font-700" style="letter-spacing: 0.415em">
                                {!! nl2br($banner->description) !!}
                            </div>
                        </div>
                        <h1 class="text-3xl font-playFair font-900">
                           {{$banner->description}}
                        </h1>
                        <div class="">
                            {!! nl2br($banner->short_description) !!}
                        </div>
                        <div class="inline-block">
                            <a href="{{route('about-our-club')}}"
                                class="flex items-center space-x-2 cursor-pointer bg-secondary overflow-hidden rounded px-6 py-3 text-sm text-white">
                                <div>Read More</div>
                                <div>
                                    <img src="./resources/images/icons/double-arrow.svg" alt="double arrow" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Scroll Down Arrow -->
                <a id="scroll-arrow"
                    class="absolute bottom-0 right-0 translate-y-1/2 -translate-x-full bg-secondary w-16 h-16 flex items-center justify-center cursor-pointer"
                    href="#about">
                    <img src="./resources/images/icons/arrow-down-large.svg" alt="down arrow" />
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Small Icons For Laptop and Higher Resolutions Only -->
<div class="hidden lg:flex py-4 px-10 xl:px-14 max-w-7xl mx-auto space-x-2">
    <div class="h-2 w-6 bg-secondary rounded-full"></div>
    <div class="h-2 w-2 bg-bgLight rounded-full"></div>
    <div class="h-2 w-2 bg-bgLight rounded-full"></div>
    <div class="h-2 w-2 bg-bgLight rounded-full"></div>
</div>
