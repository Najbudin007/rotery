@extends('frontend.layouts.master')
<?php
$galleryFolder = App\Models\GalleryFolder::whereHas('images')->get();
?>
@section('styles')
    <style>
        .active-folder {
            background-color: #064d95;
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="max-w-7xl mx-auto">

        <div class="px-4 py-6 md:p-10 xl:px-14 space-y-5">
            <!-- Header -->
            <h1 class="font-playFair font-700 text-lg md:text-xl lg:text-2xl text-primary lg:text-center">
                ROTARY YEAR PHOTOS
            </h1>

            <!-- Year Slider -->
            <div class="swiper font-600">
                <div class="swiper-wrapper text-xs" id="photo-folders">
                    @foreach ($galleryFolder as $key => $folder)
                        <div class="flex-shrink-0 inline-block text-center w-auto swiper-slide border border-primary text-primary py-2.5 px-8 rounded cursor-pointer @if ($key <= 0) active-folder @endif"
                            id="{{ $folder->name }}" onclick="changeActiveFolder('{{ $folder->name }}')">
                            {{ $folder->name }}
                        </div>
                    @endforeach

                </div>
            </div>
            @foreach ($galleryFolder as $key => $folder)
                <!-- Rotary Photos For 2022 -->
                <div class="grid gap-5 lg:gap-8 grid-cols-2 lg:grid-cols-4 photos-gallery" id="photos-{{ $folder->name }}">
                    <!-- Front Large Photo -->

                    @foreach ($folder->images as $key => $photo)
                        @if ($key <= 0)
                            <div class="h-48 md:h-96 lg:h-128 col-span-2 lg:col-span-4">
                                <img src="{{ asset('images/' . $photo->image) }}" alt="rotary photo" class="w-full h-full">
                            </div>
                        @endif
                    @endforeach
                    <!-- Two Large Photos -->
                    <div class="grid grid-cols-2 col-span-2 lg:col-span-4 gap-5 lg:gap-8">
                        @foreach ($folder->images as $key => $photo)
                            @if ($key >= 1 && $key <= 2)
                                <div class="h-36 md:h-60 lg:h-[426px]">
                                    <img src="{{ asset('images/' . $photo->image) }}" alt="rotary photo"
                                        class="w-full h-full">
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <!-- Other Smaller Photos -->
                    @foreach ($folder->images as $key => $photo)
                        @if ($key >= 3)
                            <!-- Other Smaller Photos For Laptop and Higher Resolution Devices -->
                            <div class="h-36 md:h-60 lg:h-[205px] hidden lg:block">
                                <img src="{{ asset('images/' . $photo->image) }}" alt="rotary photo" class="w-full h-full">
                            </div>
                        @endif
                    @endforeach



                </div>
            @endforeach
        </div>




        {{-- paila ko  --}}

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

        const photoFolderContainer = document.getElementById("photo-folders");

        const changeActiveFolder = (id) => {
            const folders = photoFolderContainer.children;

            const clickedFolder = document.getElementById(id);
            const clickedPhotoGallery = document.getElementById(
                `photos-${clickedFolder.id}`
            );

            // Dont do anything if clicked folder is already active
            if (clickedFolder.classList.contains("active-folder")) return;

            for (let i = 0; i < folders.length; i++) {
                const folder = folders[i];
                if (folder.classList.contains("active-folder")) {
                    folder.classList.remove("active-folder");
                    const photosGallery = document.getElementById(
                        `photos-${folder.id}`
                    );

                    photosGallery.classList.remove("grid");
                    photosGallery.classList.add("hidden");
                }
            }

            clickedFolder.classList.add("active-folder");

            clickedPhotoGallery.classList.remove("hidden");
            clickedPhotoGallery.classList.add("grid");
        };
    </script>
@endsection
