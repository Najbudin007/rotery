<?php
$news = App\Models\News::where('status', 'active')
    ->latest()
    ->limit(2)
    ->get();
?>
<div class="bg-bgLightSecondary px-4 py-6 md:p-10 lg:px-16 space-y-7 lg:flex lg:flex-col" style="flex: 2">
    <div class="flex justify-between">
        <div class="text-xl lg:text-2xl text-textDarkSecondary font-playFair font-700">
            OUR NEWS
        </div>
        <a href="{{ route('allNews') }}"
            class="hidden lg:flex items-center space-x-4 cursor-pointer bg-primary overflow-hidden rounded px-6 h-10.5 text-xs font-500 text-white">
            <div>View All</div>
            <div>
                <img src="./resources/images/icons/double-arrow.svg" alt="double arrow" />
            </div>
        </a>
    </div>

    <!-- Swiper For Mobile And Tablet -->
    <div class="news-swiper lg:hidden overflow-hidden">
        <!-- All News Cards -->
        <div class="swiper-wrapper">
            <!-- Invididual News Card -->
            @foreach ($news as $new)
                <div class="bg-white space-y-3 news-card rounded-xl swiper-slide">
                    <div>
                        <img src="{{ asset('images/' . $new->image) }}" alt="golf course" class="w-full" />
                    </div>
                    <div class="px-4 border-l border-secondary" style="border-left-width: 3px">
                        <a href="news/news-detail.html" class="text-sm text-primary font-600">
                            {{ $new->title }} </a>
                    </div>
                    <div class="text-xs text-textDarkSecondary px-4 leading-6">
                        {!! $new->short_description !!}
                    </div>
                    <div class="text-secondary text-xxs px-4 pb-3">
                        {{ $new->created_at->diffForHumans() }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- News For Laptop and Higher Resolutions -->
    <div class="hidden lg:block lg:flex-1">
        <div class="flex space-x-8 h-full">
            @foreach ($news as $new)
                <!-- Invididual News Card -->
                <div class="bg-white news-card rounded-xl flex flex-col">
                    <div class="flex-1">
                        <img src="{{ asset('images/' . $new->image) }}" alt="golf course" class="w-full h-full" />
                    </div>
                    <div class="flex flex-col justify-between py-6 space-y-4">
                        <div class="h-[60px]">
                            <a href="news/news-detail.html"
                                class="text-lg text-primary border-l line-clamp-2 border-secondary px-4 font-600"
                                style="border-left-width: 3px">
                                {{ $new->title }}
                            </a>
                        </div>
                        <div class="text-sm text-textDarkSecondary px-4 leading-7 line-clamp-2">
                            {{ $new->short_description }}
                        </div>
                        <div class="text-secondary text-xxs px-4">{{ $new->created_at->diffForHumans() }}</div>
                    </div>
                </div>
            @endforeach

            <!-- Invididual News Card -->

        </div>
    </div>

    <div class="flex justify-end lg:hidden">
        <a href="{{ route('allNews') }}"
            class="flex items-center space-x-2 cursor-pointer text-xs font-500 text-primary">
            <div>View All</div>
            <div>
                <img src="./resources/images/icons/double-arrow-yellow.svg" alt="double arrow" />
            </div>
        </a>
    </div>
</div>
