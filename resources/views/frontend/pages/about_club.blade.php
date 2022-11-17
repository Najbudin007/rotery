@extends('frontend.layouts.master')
@section('content')
    <?php  $about_club = App\Models\aboutus::first();
    ?>
    <div class="bg-primary">
        <div class="max-w-7xl mx-auto about-hero-section relative md:pt-1">
            <h1 class="font-playFair font-600 text-white text-center px-4 pt-10 md:pt-16 lg:pt-20 md:px-10 xl:px-14">
                A Prodigious Club Bringing Fabulous
                <div class="inline-block w-12 relative">
                    <img src="../resources/images/about/vector-bg.png" alt="hero section vector"
                        class="hidden md:inline-block vector-bg absolute bottom-0 left-0" />
                </div>
                <br />
                People Together
            </h1>

            <div class="absolute bottom-0 left-0 translate-y-1/2 w-full">
                <div class="px-5 md:px-10 xl:px-14">
                    <img src="{{asset('images/'.$about_club->image)}}" alt="Rotary Club" class="md:hidden w-full" />
                    <img src="{{asset('images/'.$about_club->image)}}" alt="Rotary Club"
                        class="hidden md:inline-block lg:hidden w-full" />
                    <img src="{{asset('images/'.$about_club->image)}}" alt="Rotary Club"
                        class="hidden lg:inline-block w-full" />
                </div>
            </div>
        </div>
    </div>

    <!-- Details About Our Valuable Members, Organized Events, Our Partners And Golf Course -->
    <div class="club-details max-w-7xl mx-auto px-4 py-6 md:p-10 xl:px-14 xl:pb-0">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center font-openSans">
            <div class="shadow py-5 px-1 space-y-1">
                <div class="text-lg font-600 lg:text-4xl">5.2K +</div>
                <div class="text-xs opacity-50 lg:text-base">
                    Our Valuable Members
                </div>
            </div>
            <div class="shadow py-5 px-1 space-y-1">
                <div class="text-lg font-600 lg:text-4xl">3K +</div>
                <div class="text-xs opacity-50 lg:text-base">Organized Events</div>
            </div>
            <div class="shadow py-5 px-1 space-y-1">
                <div class="text-lg font-600 lg:text-4xl">7K +</div>
                <div class="text-xs opacity-50 lg:text-base">Our Partners</div>
            </div>
            <div class="shadow py-5 px-1 space-y-1">
                <div class="text-lg font-600 lg:text-4xl">20</div>
                <div class="text-xs opacity-50 lg:text-base">Golf Course</div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
    </div>
    <!-- Who We Are? -->
    <div class="max-w-7xl mx-auto">
        <div class="px-4 pb-6 md:p-10 md:pt-0 xl:px-14 xl:pb-0 xl:pt-20">
            <div class="lg:flex lg:items-center lg:space-x-8">
                <!-- 4 Pictures For Laptop and Higher Resolution Devices -->
                <div class="hidden lg:block lg:flex-1">
                    <div class="space-x-8 flex">
                        <div class="space-y-8">
                            <div>
                                <img src="{{asset("images/". $about_club->who_image1)}}" alt="Golf" class="h-80 w-full" />
                            </div>
                            <div>
                                <img src="{{asset("images/". $about_club->who_image2)}}" alt="Golf" class="h-56 w-full" />
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div>
                                <img src="{{asset("images/". $about_club->who_image3)}}" alt="Golf" class="h-56 w-full" />
                            </div>
                            <div>
                                <img src="{{asset("images/". $about_club->who_image4)}}" alt="Golf" class="h-80 w-full" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-5 lg:flex-1">
                    <div class="font-playFair font-600 text-primary text-lg md:text-xl lg:text-2xl">
                        WHO WE ARE?
                    </div>
                    <div class="flex space-x-5 lg:hidden">
                        <div class="flex-1">
                            <img src="{{asset("images/". $about_club->who_image1)}}" alt="Golf" class="w-full h-60" />
                        </div>
                        <div class="flex-1 hidden md:block">
                            <img src="{{asset("images/". $about_club->who_image2)}}" alt="Golf" class="w-full h-60" />
                        </div>
                    </div>
                    <div class="text-sm text-textLight md:text-black md:font-300 leading-7"
                        style="letter-spacing: -0.005em; word-spacing: 0.5em">
                            {!! $about_club->description!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Us? -->
    <div class="max-w-7xl mx-auto">
        <div class="px-4 pb-6 md:p-10 md:pt-0 xl:px-14 xl:py-20">
            <div class="lg:flex lg:items-center lg:space-x-8">
                <div class="space-y-5 lg:flex-1">
                    <div class="font-playFair font-600 text-primary text-lg md:text-xl lg:text-2xl">
                        WHY US?
                    </div>
                    <div class="flex space-x-5 lg:hidden">
                        <div class="flex-1">
                            <img src="{{asset("images/". $about_club->why_image1)}}" alt="Golf" class="w-full h-60" />
                        </div>
                        <div class="flex-1 hidden md:block">
                            <img src="{{asset("images/". $about_club->why_image2)}}" alt="Golf" class="w-full h-60" />
                        </div>
                    </div>
                    <div class="text-sm text-textLight md:text-black md:font-300 leading-7"
                        style="letter-spacing: -0.005em; word-spacing: 0.5em">
                        {!! $about_club->summary !!}
                    </div>
                </div>

                <!-- 4 Pictures For Laptop and Higher Resolution Devices -->
                <div class="hidden lg:block lg:flex-1">
                    <div class="space-x-8 flex">
                        <div class="space-y-8">
                            <div>
                                <img src="{{asset("images/". $about_club->why_image1)}}" alt="Golf" class="h-80 w-full" />
                            </div>
                            <div>
                                <img src="{{asset("images/". $about_club->why_image2)}}" alt="Golf" class="h-56 w-full" />
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div>
                                <img src="{{asset("images/". $about_club->why_image3)}}" alt="Golf" class="h-56 w-full" />
                            </div>
                            <div>
                                <img src="{{asset("images/". $about_club->why_image4)}}" alt="Golf" class="h-80 w-full" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Glimpse Of Our Special Events -->
    <div class="max-w-7xl mx-auto">
        <div class="px-4 pb-6 md:p-10 md:pt-0 xl:px-14 xl:pt-0">
            <div>
                <div
                    class="font-playFair font-700 tracking-header text-lg md:text-xl lg:text-2xl lg:text-center text-primary pb-5 md:pb-7">
                    Glimpse Of Our Special Events
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-5">
                    <div>
                        <img src="{{asset("images/". $about_club->glimpse1)}}" alt="Special Event"
                            class="w-full h-40 md:h-80" />
                    </div>
                    <div>
                        <img src="{{asset("images/". $about_club->glimpse2)}}" alt="Special Event"
                            class="w-full h-40 md:h-80" />
                    </div>
                    <div>
                        <img src="{{asset("images/". $about_club->glimpse3)}}" alt="Special Event"
                            class="w-full h-40 md:h-80" />
                    </div>
                    <div class="lg:hidden">
                        <img src="{{asset("images/". $about_club->glimpse1)}}" alt="Special Event"
                            class="w-full h-40 md:h-80" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
