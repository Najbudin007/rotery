@extends('frontend.layouts.master')
@section('content')
    <div class="lg:hidden">
        <div class="px-4 py-6 md:p-10">
            <!-- Header -->
            <h1 class="font-playFair font-700 text-lg md:text-xl text-primary">
                COMMUNITY SERVICES
            </h1>

            <!-- All Projects Or Services -->
            <div class="pt-7 md:pt-10 grid md:grid-cols-2 gap-4 md:gap-8">
                <!-- Individual Project -->
                @foreach ($projects as $key => $project)
                    <div class="space-y-2">
                        <div>
                            <img src="{{ asset('images/' . $project->image) }}" alt="individual project" class="w-full">
                        </div>
                        <div class="text-primary font-playFair font-700 tracking-header pt-1">
                            {{ $project->title }}
                        </div>
                        <div class="text-justify text-textLight leading-7 text-sm">
                            {!! $project->short_description !!}
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('singleProject', $project->slug) }}"
                                class="flex items-center space-x-2 cursor-pointer text-xs font-500 text-primary">
                                <div>View Details</div>
                                <div>
                                    <img src="../resources/images/icons/arrow-right-yellow.svg" alt="right arrow">
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    {{-- large devices --}}
    <div class="hidden lg:block max-w-7xl mx-auto">
        <div class="p-10 xl:px-14 space-y-10">
            <!-- Header -->
            <div class="text-[32px] font-playFair font-700 text-primary text-center tracking-header">
                Community Services
            </div>


            @foreach ($projects as $key => $project)
                @if ($key <= 0)
                    <div class="h-[437px]">
                        <img src="{{ asset('images/' . $project->image) }}" class="w-full h-full" alt="individual project">
                    </div>
                    <div class="space-y-4">
                        <div class="text-2xl text-primary font-playFair font-700 tracking-header">
                            {{ $project->title }}
                        </div>
                        <div class="leading-[35px] text-sm font-300" style="letter-spacing: -0.005em">
                            {!! $project->short_description !!}

                            <a href="{{ route('singleProject', $project->slug) }}"
                                class="text-primary font-400 underline">View Details</a>
                        </div>
                    </div>
                @endif
                @if ($key >= 1 && $key % 2 == 0)
                    <div class="flex space-x-[30px]">
                        <div class="h-[285px] w-[460px] flex-shrink-0">
                            <img src="{{ asset('images/' . $project->image) }}" class="w-full h-full"
                                alt="individual project">
                        </div>
                        <div class="space-y-4">
                            <div class="text-2xl text-primary font-playFair font-700 tracking-header">
                                {{ $project->title }}
                            </div>
                            <div class="leading-[35px] text-sm font-300 text-justify" style="letter-spacing: -0.005em">
                                {!! $project->short_description !!}


                                <a href="{{ route('singleProject', $project->slug) }}"
                                    class="text-primary font-400 underline">View Details</a>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($key >= 1 && $key % 2 !== 0)
                    <div class="flex space-x-[30px]">
                        <div class="space-y-4">
                            <div class="text-2xl text-primary font-playFair font-700 tracking-header">
                                {{ $project->title }}
                            </div>
                            <div class="leading-[35px] text-sm font-300 text-justify" style="letter-spacing: -0.005em">
                                {!! $project->short_description !!}


                                <a href="{{ route('singleProject', $project->slug) }}"
                                    class="text-primary font-400 underline">View Details</a>
                            </div>
                        </div>
                        <div class="h-[285px] w-[460px] flex-shrink-0">
                            <img src="{{ asset('images/' . $project->image) }}" class="w-full h-full"
                                alt="individual project">
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endsection
