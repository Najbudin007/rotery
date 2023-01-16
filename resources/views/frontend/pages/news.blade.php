@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('./resources/css/news.css') }}" />
@endsection
@section('content')

<?php
$news = App\Models\News::where('status', 'active')
    ->latest()
    ->get();
?>

<?php
$notice = App\Models\Notice::where('status', 'active')
    ->latest()
    ->get();
?>

<?php
$news_banner = App\Models\News::where('status', 'active')
    ->first();
?>
    <div class="hero-section relative mb-24 md:mb-32 lg:mb-40">
        <div class="max-w-5xl mx-auto container absolute top-full left-1/2 -translate-x-1/2 -translate-y-1/2 p-4 md:p-10">
            <div class="bg-white shadow-lg p-5 md:p-10 space-y-5">
                <h1 class="tracking-header font-playFair sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">
                  {{$news_banner->title}}
                </h1>
                <div class="flex items-center text-sm space-x-6 md:space-x-10">
                    <div class="flex items-center space-x-2 pr-10 border-r border-black">
                        <div class="w-7 h-7 flex-shrink-0">
                            <img src="{{asset('images/'.$news_banner->image)}}" class="w-full h-full" alt="Anit Gurung">
                        </div>
                        <div class="truncate">RotarY News</div>
                    </div>
                    <div>{{$news_banner->created_at->diffForHumans()}}</div>
                </div>
            </div>
        </div>
    </div>
    {{-- news --}}
    <div>
        <div class="max-w-7xl mx-auto pb-6 md:pb-10 lg:pb-16" style="flex: 2">
            <div class="relative space-y-4 md:space-y-8 lg:space-y-10">
                <div class="px-4 md:px-10 xl:px-14">
                    <div class="text-lg text-center text-primary font-playFair font-700 md:text-2xl">
                        Latest News
                    </div>
                </div>

                <div
                    class="news-swiper overflow-hidden relative px-4 mx-2 md:px-6 lg:px-4 lg:mx-12 swiper-initialized swiper-horizontal swiper-pointer-events">
                    <!-- All Latest News Swiper And Slider -->
                    <div class="swiper-wrapper" id="swiper-wrapper-3d6ae7cc1899ca83" aria-live="off"
                        style="transition-duration: 0ms; transform: translate3d(-1576px, 0px, 0px);">
                        @foreach ($news as $new)
                        
                        <!-- Invididual Latest News Card -->
                        <div class="bg-white space-y-3 xl:space-y-4 news-card rounded-xl swiper-slide border"
                            data-swiper-slide-index="4" style="width: 364px; margin-right: 30px;" role="group"
                            aria-label="5 / 6">
                            <div>
                                <img src="{{asset('images/' .$new->image)}}" alt="Latest News" class="w-full">
                            </div>
                            <div class="pt-2">
                                <div class="text-sm text-primary border-l border-secondary px-4"
                                    style="border-left-width: 3px">
                                    <a href="{{route('news_detail',$new->slug)}}" class="font-600 text-sm md:text-base lg:text-lg">
                                       {{$new->title}}
                                    </a>
                                </div>
                            </div>
                            <div class="text-xs lg:text-sm text-textDarkSecondary px-4 leading-6">
                               {!! $new->short_description !!}
                            </div>

                            <div class="text-secondary text-xxs px-4 pb-6">{{$new->created_at->diffForHumans()}}</div>
                        </div>
                        @endforeach

                    </div>

                    <!-- Left And Right Arrows For News Slider -->
                    <div class="hidden lg:block">
                        <div class="swiper-button-prev w-0 h-0 overflow-hidden" id="latest-news-prev" tabindex="0"
                            role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3d6ae7cc1899ca83">
                        </div>
                        <div class="swiper-button-next w-0 h-0 overflow-hidden" id="latest-news-next" tabindex="0"
                            role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3d6ae7cc1899ca83"></div>
                    </div>

                    <!-- Custom Arrows For Slider -->
                    <div class="hidden absolute top-1/2 left-0 -translate-y-1/2 lg:flex w-full h-0 justify-between items-center"
                        style="z-index: 11">
                        <div class="overflow-hidden bg-white border w-12 h-12 rounded-full flex items-center justify-center cursor-pointer bg-opacity-60 hover:bg-opacity-80 transition-all duration-300 rotate-180"
                            onclick="document.getElementById('latest-news-prev').click()">
                            <img src="../resources/images/icons/right-arrow-slider.svg" class="w-5 h-5"
                                alt="right arrow">
                        </div>
                        <div class="overflow-hidden bg-white border w-12 h-12 rounded-full flex items-center justify-center cursor-pointer bg-opacity-60 hover:bg-opacity-80 transition-all duration-300"
                            onclick="document.getElementById('latest-news-next').click()">
                            <img src="../resources/images/icons/right-arrow-slider.svg" class="w-5 h-5"
                                alt="right arrow">
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-bgLightNotice">
        <div class="max-w-7xl mx-auto py-6 md:py-10 lg:py-16" style="flex: 2">
            <div class="relative space-y-4 md:space-y-8 lg:space-y-10">
                <div class="px-4 md:px-10 xl:px-14">
                    <div class="text-lg text-primary font-playFair font-700 md:text-2xl">
                        Notice Highlight
                    </div>
                </div>

                <div
                    class="notice-swiper overflow-hidden relative px-4 mx-2 md:px-6 lg:px-4 lg:mx-12 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <!-- All Notice Highlights Swiper And Slider -->
                    <div class="swiper-wrapper" id="swiper-wrapper-e88601f4ea855658" aria-live="polite"
                        style="transition-duration: 0ms; transform: translate3d(-1560px, 0px, 0px);">

                        <!-- Invididual Notice Highlight Card -->
                        @foreach ($notice as $noti)
                        <div class="bg-white text-xs md:text-sm lg:text-base space-y-2.5 lg:space-y-4 notice-highlight-card cursor-pointer rounded-tl rounded-bl border-l-6 border-l-secondary swiper-slide border p-4 lg:p-7 swiper-slide-next"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="margin-right: 30px;">
                            <div class="font-600 text-sm sm:text-base lg:text-lg">
                              {{$noti->title}}
                            </div>
                            <div>{{$noti->created_at->diffForHumans()}}</div>
                            <div class="text-textDark">
                               {!! $noti->short_description !!}
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Left And Right Arrows For Notice Slider -->
                    <div class="hidden lg:block">
                        <div class="swiper-button-prev w-0 h-0 overflow-hidden" id="latest-notice-prev" tabindex="0"
                            role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e88601f4ea855658">
                        </div>
                        <div class="swiper-button-next w-0 h-0 overflow-hidden" id="latest-notice-next" tabindex="0"
                            role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e88601f4ea855658"></div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

                <!-- Custom Arrows For Slider -->
                <div class="hidden w-full lg:flex lg:justify-end space-x-4 pr-12">
                    <div class="overflow-hidden bg-white border w-12 h-12 rounded-full flex items-center justify-center cursor-pointer bg-opacity-60 hover:bg-opacity-80 transition-all duration-300 rotate-180"
                        onclick="document.getElementById('latest-notice-prev').click()">
                        <img src="../resources/images/icons/right-arrow-slider.svg" class="w-5 h-5" alt="right arrow">
                    </div>
                    <div class="overflow-hidden bg-white border w-12 h-12 rounded-full flex items-center justify-center cursor-pointer bg-opacity-60 hover:bg-opacity-80 transition-all duration-300"
                        onclick="document.getElementById('latest-notice-next').click()">
                        <img src="../resources/images/icons/right-arrow-slider.svg" class="w-5 h-5" alt="right arrow">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- popular news --}}

    <div>
        <div class="max-w-7xl mx-auto py-6 md:py-10 lg:py-16" style="flex: 2">
            <div class="relative space-y-4 md:space-y-8 lg:space-y-10">
                <div class="px-4 md:px-10 xl:px-14">
                    <div class="text-lg text-center text-primary font-playFair font-700 md:text-2xl">
                        Popular News
                    </div>
                </div>

                <div
                    class="news-swiper overflow-hidden relative px-4 mx-2 md:px-6 lg:px-4 lg:mx-12 swiper-initialized swiper-horizontal swiper-pointer-events">
                    <!-- All Popular News Swiper And Slider -->
                    <div class="swiper-wrapper" id="swiper-wrapper-cb26e104d7627a14d" aria-live="off"
                        style="transition-duration: 0ms; transform: translate3d(-2758px, 0px, 0px);">
                        <!-- Invididual Popular News Card -->
                        @foreach ($news as $new)
                        <div class="bg-white space-y-3 xl:space-y-4 news-card rounded-xl swiper-slide border"
                            data-swiper-slide-index="0" style="width: 364px; margin-right: 30px;" role="group"
                            aria-label="1 / 6">
                            <div>
                                <img src="{{asset('images/'.$new->image)}}" alt="Latest News" class="w-full">
                            </div>
                            <div class="pt-2">
                                <div class="text-sm text-primary border-l border-secondary px-4"
                                    style="border-left-width: 3px">
                                    <a href="{{route('news_detail',$new->slug)}}" class="font-600 text-sm md:text-base lg:text-lg">
                                      {{$new->title}}
                                    </a>
                                </div>
                            </div>
                            <div class="text-xs lg:text-sm text-textDarkSecondary px-4 leading-6">
                                {!! $new->short_description !!}
                            </div>

                            <div class="text-secondary text-xxs px-4 pb-6">{{$new->created_at->diffForHumans()}}</div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Left And Right Arrows For Popular News Slider -->
                    <div class="hidden lg:block">
                        <div class="swiper-button-prev w-0 h-0 overflow-hidden" id="popular-news-prev" tabindex="0"
                            role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-cb26e104d7627a14d">
                        </div>
                        <div class="swiper-button-next w-0 h-0 overflow-hidden" id="popular-news-next" tabindex="0"
                            role="button" aria-label="Next slide" aria-controls="swiper-wrapper-cb26e104d7627a14d">
                        </div>
                    </div>

                    <!-- Custom Arrows For Slider -->
                    <div class="hidden absolute top-1/2 left-0 -translate-y-1/2 lg:flex w-full h-0 justify-between items-center"
                        style="z-index: 11">
                        <div class="overflow-hidden bg-white border w-12 h-12 rounded-full flex items-center justify-center cursor-pointer bg-opacity-60 hover:bg-opacity-80 transition-all duration-300 rotate-180"
                            onclick="document.getElementById('popular-news-prev').click()">
                            <img src="../resources/images/icons/right-arrow-slider.svg" class="w-5 h-5"
                                alt="right arrow">
                        </div>
                        <div class="overflow-hidden bg-white border w-12 h-12 rounded-full flex items-center justify-center cursor-pointer bg-opacity-60 hover:bg-opacity-80 transition-all duration-300"
                            onclick="document.getElementById('popular-news-next').click()">
                            <img src="../resources/images/icons/right-arrow-slider.svg" class="w-5 h-5"
                                alt="right arrow">
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
    <script>

      const newsSwiper = new Swiper(".news-swiper", {
        direction: "horizontal",
        speed: 1000,
        spaceBetween: 30,
        slidesPerView: 1,
        loop: true,
        autoplay: {
          delay: 3000,
          pauseOnMouseEnter: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        },
      });

      const noticeSwiper = new Swiper(".notice-swiper", {
        direction: "horizontal",
        speed: 1000,
        spaceBetween: 30,
        slidesPerView: 1,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          768: {
            slidesPerView: "auto",
          },
        },
      });
  
    </script>
@endsection

