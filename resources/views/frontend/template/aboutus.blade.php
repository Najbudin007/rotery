<?php $about = App\Models\SiteSetting::first(); ?>
@if (isset($about))
    <div id="about" class="max-w-7xl mx-auto relative">
        <div
            class="flex flex-col-reverse lg:flex-row lg:items-center lg:space-x-10 px-4 md:px-10 xl:px-14 py-6 lg:py-10">
            <div class="space-y-3 md:space-y-5">
                <div>
                    <div>
                        <img src="./resources/images/icons/zigzag-line-yellow.svg" alt="zigzag line" />
                    </div>
                    <div class="text-secondary text-xxs md:text-xs" style="letter-spacing: 0.29em">
                        WHO WE ARE?
                    </div>
                    <div class="text-primary text-lg md:text-2xl font-playFair font-700 tracking-header">
                        ABOUT US
                    </div>
                </div>
                <div class="text-textLight text-sm text-justify leading-7 tracking-header">
                    {!! $about->description !!}
                </div>
                <div class="flex md:justify-end lg:justify-start pt-3">
                    <a href="{{ route('about-our-club') }}"
                        class="flex items-center space-x-2 cursor-pointer bg-primary overflow-hidden rounded px-[14px] py-[11px] lg:py-[15px] lg:px-[34px] text-xs lg:text-sm text-white">
                        <div>Read more</div>
                        <div>
                            <img src="./resources/images/icons/double-arrow.svg" alt="double arrow" />
                        </div>
                    </a>
                </div>
            </div>
            <div class="mb-8 home-about lg:flex-shrink-0">
                <div class="image relative w-full p-4 md:p-6 lg:p-4">
                    <div class="childrens">
                        <img src="{{ asset('images/' . $about->about_image) }}" class="md:hidden" alt="childrens" />
                        <img src="{{ asset('images/' . $about->about_image) }}" class="hidden md:inline-block lg:hidden"
                            alt="childrens" />
                        <img src="{{ asset('images/' . $about->about_image) }}" class="hidden lg:inline-block"
                            alt="childrens" />
                    </div>

                    <div class="line">
                        <img src="./resources/images/home/vertical-line.png" alt="vertical line"
                            class="absolute top-0 left-0 h-32 w-0.75 md:h-64 md:w-1.5 lg:h-44 lg:w-0.75" />
                        <img src="./resources/images/home/horizontal-line.png" alt="horizontal line"
                            class="absolute top-0 left-0 w-32 h-0.75 md:w-64 md:h-1.5 lg:w-44 lg:h-0.75" />
                        <img src="./resources/images/home/vertical-line.png" alt="vertical line"
                            class="absolute bottom-0 right-0 h-32 w-0.75 md:h-64 md:w-1.5 lg:h-44 lg:w-0.75" />
                        <img src="./resources/images/home/horizontal-line.png" alt="horizontal line"
                            class="absolute bottom-0 right-0 w-32 h-0.75 md:w-64 md:h-1.5 lg:w-44 lg:h-0.75" />
                    </div>
                </div>
            </div>

            <!-- Background Vectors For Laptop and Larger Resolutions -->
            <div class="hidden lg:block absolute top-24 left-0 -z-10" style="transform: translateX(-90px)">
                <img src="./resources/images/home/vector.svg" alt="background vector" />
            </div>

            <div class="hidden lg:block absolute bottom-0 translate-y-1/2 -z-10">
                <img src="./resources/images/home/vector-1.svg" alt="background vector" />
            </div>
        </div>
    </div>
@endif
