@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/resources/css/home.css') }}" />
@endsection
@section('scripts')
    <script src="{{ asset('/resources/js/slider.js') }}"></script>
@endsection
@section('content')
    <!-- Hero Section -->
    @include('frontend.template.banner')

    <!-- About Us -->
    @include('frontend.template.aboutus')

    <!-- Notice And News -->
    <div class="relative">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="lg:flex">
                <!-- Notice -->
                @include('frontend.template.notice')

                <!-- News -->
                @include('frontend.template.news')
            </div>
        </div>

        <!-- Blue Container -->
        <div class="absolute h-full w-1/2 top-0 left-0 bg-primary -z-10"></div>

        <!-- Light Gray Container -->
        <div class="absolute h-full w-1/2 top-0 left-1/2 bg-bgLightSecondary -z-10"></div>
    </div>

    <!-- Projects -->
    @include('frontend.template.project')

    <!-- Messages -->
    @include('frontend.template.testimonial')
@endsection
