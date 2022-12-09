@extends('frontend.layouts.master')
<?php
$galleryFolder = App\Models\GalleryFolder::whereHas('videos')->get();
?>
@section('styles')
    <style>
        .active-folder {
            background-color: #064d95;
            color: white;
        }
    </style>
    <style>
        iframe {
            min-width: 100%;
            height: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="px-4 py-6 md:p-10 xl:px-14 space-y-5">
            <!-- Header -->
            <h1 class="font-playFair font-700 text-lg md:text-xl lg:text-2xl text-primary lg:text-center">
                ROTARY VIDEOS
            </h1>
            <div class="swiper font-600">
                <div class="swiper-wrapper text-xs" id="video-folders">
                    @foreach ($galleryFolder as $key => $folder)
                        <div class="flex-shrink-0 inline-block text-center w-auto swiper-slide border border-primary text-primary py-2.5 px-8 rounded cursor-pointer @if ($key <= 0) active-folder @endif"
                            id="{{ $folder->name }}" onclick="changeActiveFolder('{{ $folder->name }}')">
                            {{ $folder->name }}
                        </div>
                    @endforeach

                </div>
            </div>

            @foreach ($galleryFolder as $key => $folder)
                <div class="grid gap-5 lg:gap-8 grid-cols-2 lg:grid-cols-3 videos-gallery" id="videos-{{ $folder->name }}">
                    @foreach ($folder->videos as $key => $video)
                        <!-- Front Large Video -->
                        @if ($key <= 0)
                            <div class="h-48 md:h-96 lg:h-128 col-span-2 lg:col-span-3">

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
            @endforeach


        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const swiper = new Swiper(".swiper", {
            direction: "horizontal",
            speed: 1000,
            spaceBetween: 10,
            slidesPerView: "auto",
            breakpoints: {
                1024: {
                    spaceBetween: 16,
                },
            },
        });

        const videoFolderContainer = document.getElementById("video-folders");

        const changeActiveFolder = (id) => {
            const folders = videoFolderContainer.children;

            const clickedFolder = document.getElementById(id);
            const clickedVideoGallery = document.getElementById(
                `videos-${clickedFolder.id}`
            );

            // Dont do anything if clicked folder is already active
            if (clickedFolder.classList.contains("active-folder")) return;

            for (let i = 0; i < folders.length; i++) {
                const folder = folders[i];
                if (folder.classList.contains("active-folder")) {
                    folder.classList.remove("active-folder");
                    const videosGallery = document.getElementById(
                        `videos-${folder.id}`
                    );

                    videosGallery.classList.remove("grid");
                    videosGallery.classList.add("hidden");
                }
            }

            clickedFolder.classList.add("active-folder");

            clickedVideoGallery.classList.remove("hidden");
            clickedVideoGallery.classList.add("grid");
        };
    </script>
@endsection
