<?php $logos = App\Models\SiteSetting::first(); ?>
<nav class="text-textDark z-20 sticky top-0 bg-white shadow">
    <!-- Navigation for mobile and tablet -->
    <div class="flex justify-between items-center px-4 lg:hidden relative mobile-nav">
        <div class="cursor-pointer" onclick="toggleSidebar(true)">
            <img src="{{ asset('resources/images/icons/hamburger-menu.svg') }}" class="" alt="hamburger menu" />
        </div>
        <a href="/" class="block absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <img src="{{ asset('resources/images/rotary-logo.png') }}" alt="Rotary Club" class="w-full main-nav-logo" />
        </a>
        <div>
            <img src="{{ asset('resources/images/home/serve-to-change-lives1.png') }}" alt="Serve to change lives"
                class="hidden md:inline-block serve-to-change-lives" />
            <img src="{{ asset('resources/images/home/serve-to-change-lives.png') }}" alt="Serve to change lives"
                class="md:hidden" />
        </div>
    </div>
</nav>

<!-- Sidebar for mobile and tablet  -->
<div id="sidebar"
    class="fixed top-0 left-0 h-screen font-openSans font-600 text-textDark text-sm lg:hidden z-30 overflow-hidden transition-all duration-500"
    style="width: 0px">
    <div class="absolute top-0 left-0 h-screen bg-white">
        <div class="overflow-auto h-full" style="width: 340px; max-width: 95vw; padding: 22px">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <img class="w-4 h-4 cursor-pointer" src="{{ asset('resources/images/icons/close.svg') }}"
                        alt="close icon" onclick="toggleSidebar()" />
                </div>
                <a class="block" href="/">
                    <img src="{{ asset('resources/images/rotary-logo.png') }}" alt="Rotary Club"
                        class="main-nav-logo" />
                </a>
                <div class="w-4"></div>
            </div>
            <div>

                <!-- Home -->
                <div class="border-b sidebar-item flex items-center">
                    <a href="/" class="flex-1 flex h-full space-x-4 py-3 cursor-pointer">
                        <div>
                            <img src="{{ asset('resources/images/icons/navigation/home.svg') }}" class="w-5 h-5"
                                alt="home icon" />
                        </div>
                        <div>HOME</div>
                    </a>
                </div>

                <!-- About -->
                <div class="border-b sidebar-item">
                    <div class="flex justify-between items-center cursor-pointer" onClick="toggleMenus(0, 4)">
                        <div class="flex items-center space-x-4">
                            <div>
                                <img src="{{ asset('resources/images/icons/navigation/about.svg') }}" class="w-5 h-5"
                                    alt="about icon" />
                            </div>
                            <div>ABOUT</div>
                        </div>
                        <div>
                            <img src="{{ asset('resources/images/icons/arrow-down.svg') }}"
                                class="w-4 arrow transition-all duration-300" style="transform: rotate(0deg)"
                                alt="down arrow" />
                        </div>
                    </div>

                    <div class="overflow-hidden collapse-menu transition-all duration-300" style="height: 0px">
                        <div class="space-y-6 pl-8 flex flex-col">
                            <a href="{{ route('about-our-club') }}">About Our Club</a>
                            <a href="{{ route('members', 'board-members') }}">Our Board</a>
                            <a href="{{ route('members') }}">Our Members</a>
                            <a href="{{ route('charterMember') }}">Our Charter Members</a>
                        </div>
                    </div>
                </div>

                <!-- Our Projects -->
                <div class="border-b sidebar-item">
                    <div class="flex justify-between items-center cursor-pointer" onClick="toggleMenus(1, 5)">
                        <div class="flex items-center space-x-4">
                            <div>
                                <img src="{{ asset('resources/images/icons/navigation/projects.svg') }}"
                                    class="w-5 h-5" alt="projects icon" />
                            </div>
                            <div>OUR PROJECTS</div>
                        </div>
                        <div>
                            <img src="{{ asset('resources/images/icons/arrow-down.svg') }}"
                                class="w-4 arrow transition-all duration-300" style="transform: rotate(0deg)"
                                alt="down arrow" />
                        </div>
                    </div>

                    <div class="overflow-hidden collapse-menu transition-all duration-300" style="height: 0px">
                        <div class="space-y-6 pl-8 flex flex-col">
                            @foreach (App\Models\Project::latest()->take(3)->get() as $proj)
                                <a href="{{ route('singleProject', $proj->slug) }}">{{ $proj->title }}</a>
                            @endforeach

                            <a href="{{ route('allProject') }}">View All Projects</a>
                        </div>
                    </div>
                </div>

                <!-- Photos -->
                <div class="border-b sidebar-item">
                    <div class="flex justify-between items-center cursor-pointer" onClick="toggleMenus(2, 2)">
                        <div class="flex items-center space-x-4">
                            <div>
                                <img src="{{ asset('resources/images/icons/navigation/photos.svg') }}" class="w-5 h-5"
                                    alt="photos icon" />
                            </div>
                            <div>PHOTOS</div>
                        </div>
                        <div>
                            <img src="{{ asset('resources/images/icons/arrow-down.svg') }}"
                                class="w-4 arrow transition-all duration-300" style="transform: rotate(0deg)"
                                alt="down arrow" />
                        </div>
                    </div>

                    <div class="overflow-hidden collapse-menu transition-all duration-300" style="height: 0px">
                        <div class="space-y-6 pl-8 flex flex-col">
                            <a href="{{ route('photo') }}">Rotary Year Photos</a>
                            <a href="{{ route('videos') }}">Videos</a>
                        </div>
                    </div>
                </div>

                <!-- Blog -->
                {{-- <div class="border-b sidebar-item flex items-center">
                    <a href="blog/index.html" class="flex-1 py-4 flex space-x-4 cursor-pointer">
                        <div>
                            <img src="{{ asset('resources/images/icons/navigation/blog.svg') }}" class="w-5 h-5"
                                alt="blog icon" />
                        </div>
                        <div>BLOG</div>
                    </a>
                </div> --}}

                <!-- Become a Member -->
                <div class="border-b sidebar-item flex items-center">
                    <a href="{{ route('membership') }}" class="flex-1 py-4 flex space-x-4 cursor-pointer">
                        <div>
                            <img src="{{ asset('resources/images/icons/navigation/member.svg') }}" class="w-5 h-5"
                                alt="member icon" />
                        </div>
                        <div>BECOME A MEMBER</div>
                    </a>
                </div>

                <!-- Contact Us -->
                <div class="border-b sidebar-item flex items-center">
                    <a href="{{ route('contact') }}" class="flex-1 py-4 flex w-full space-x-4 cursor-pointer">
                        <div>
                            <img src="{{ asset('resources/images/icons/navigation/contact.svg') }}" class="w-5 h-5"
                                alt="contact icon" />
                        </div>
                        <div>CONTACT US</div>
                    </a>
                </div>

                <div class="text-xs text-textLight pt-6 pb-4">
                    <span>District: </span>
                    <span class="text-primary font-semibold">1010</span>
                    <span>, Club Number: </span>
                    <span class="text-primary font-semibold">123456</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation for laptop and higher resolution devices -->
<div class="hidden lg:block bg-white shadow z-20 sticky top-0">
    <div class="border-b">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center py-2 px-10 xl:px-14">
                <div class="flex items-center">
                    <div class="flex items-center flex-shrink-0 w-72 xl:w-80">
                        <a href="/" class="flex-shrink-0 flex">
                            <div class="flex-shrink-0">
                                @if (isset($logos->image))
                                    <img src="{{ asset('images/' . $logos->image) }}" alt="Rotary Club"
                                        style="width: 83px; height: 53px" />
                                @endif

                            </div>
                            <div class="px-2 border-r-2 mr-2 border-gray-200">
                                @if (isset($logos->alternate_image))
                                    <img src="{{ asset('images/' . $logos->alternate_image) }}" alt="Rotary Club"
                                        class="main-nav-logo" />
                                @endif
                            </div>
                            <div class="text-sm text-primary font-hind font-700">
                                Club of <br />
                                Himalayan <br />
                                Golfers
                            </div>
                        </a>
                    </div>
                    <div class="text-xs text-textLight">
                        <span>District: </span>
                        @if (isset($logos->district))
                            <span class="text-primary font-semibold">{{ $logos->district }}</span>
                        @endif
                        <span>, Club Number: </span>
                        @if (isset($logos->club_number))
                            <span class="text-primary font-semibold">{{ $logos->club_number }}</span>
                        @endif
                    </div>
                </div>
                <div>
                    <img src="{{ asset('resources/images/home/serve-to-change-lives1.png') }}"
                        alt="Serve To Change Lives" />
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation options for laptop and higher resolution devices -->
    <div class="relative" style="height: 55px">
        <div class="max-w-7xl mx-auto hidden lg:block h-full font-openSans font-600">
            <div class="px-10 xl:px-14 flex h-full">
                <div class="w-72 xl:w-80 flex-shrink-0 bg-white relative flex justify-between items-center">
                    <div
                        class="flex items-center space-x-2 cursor-pointer bg-secondary overflow-hidden rounded px-4 py-3 text-xxs text-white">
                        <div>
                            <img src="{{ asset('resources/images/icons/globe.svg') }}" alt="globe icon" />
                        </div>
                        <div>DISTRICT WEBSITE</div>
                    </div>
                    <a href="/" class="w-20 flex justify-center items-center h-full">
                        <img src="{{ asset('resources/images/icons/navigation/home-1.svg') }}" class="cursor-pointer"
                            style="width: 20.63px; height: 17.87px" alt="home icon" />
                    </a>

                    <div class="absolute bottom-0 right-0 h-1.5 w-20 bg-secondary"></div>
                </div>

                <div class="flex-1 bg-primary text-white flex text-xs font-openSans">
                    <!-- About -->
                    <div class="relative group h-full">
                        <div class="pl-3 xl:pl-6 h-full cursor-pointer">
                            <div class="h-full pl-3 xl:pl-6 relative">
                                <div class="flex items-center h-full">
                                    <div class="font-600">ABOUT</div>
                                    <div class="ml-2">
                                        <img src="{{ asset('resources/images/icons/arrow-down-white.svg') }}"
                                            class="w-3 group-hover:rotate-180" alt="down arrow" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-full left-0 bg-primary hidden group-hover:block shadow-xl"
                            style="padding: 27px">
                            <a href="{{ route('about-our-club') }}" class="cursor-pointer block">About Our Club</a>
                            <a href="{{ route('members', 'board-members') }}" class="cursor-pointer block"
                                style="margin: 14px 0">
                                Our Board
                            </a>
                            <a href="{{ route('members') }}" class="cursor-pointer block">Our Members</a>
                            <a href="{{ route('charterMember') }}" class="truncate cursor-pointer block"
                                style="margin-top: 14px">
                                Charter Members
                            </a>
                        </div>
                    </div>

                    <!-- Our Projects -->
                    <div class="relative group h-full">
                        <div class="pl-3 xl:pl-6 h-full cursor-pointer">
                            <div class="h-full pl-3 xl:pl-6 relative">
                                <div class="flex items-center h-full">
                                    <div class="font-600">OUR PROJECTS</div>
                                    <div class="ml-2">
                                        <img src="{{ asset('resources/images/icons/arrow-down-white.svg') }}"
                                            class="w-3 group-hover:rotate-180" alt="down arrow" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-full left-0 bg-primary hidden group-hover:block shadow-xl"
                            style="padding: 27px">
                            @foreach (App\Models\Project::latest()->take(3)->get() as $proj)
                                <a href="{{ route('singleProject', $proj->slug) }}"
                                    class="cursor-pointer block">{{ $proj->title }}</a>
                            @endforeach

                            <a href="{{ route('allProject') }}" class="cursor-pointer block"
                                style="margin-top: 14px 0">View All Projects</a>
                        </div>
                    </div>

                    <!-- Photos -->
                    <div class="relative group h-full">
                        <div class="pl-3 xl:pl-6 h-full cursor-pointer">
                            <div class="h-full pl-3 xl:pl-6 relative">
                                <div class="flex items-center h-full">
                                    <div class="font-600">PHOTOS</div>
                                    <div class="ml-2">
                                        <img src="{{ asset('resources/images/icons/arrow-down-white.svg') }}"
                                            class="w-3 group-hover:rotate-180" alt="down arrow" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-full left-0 bg-primary hidden group-hover:block shadow-xl"
                            style="padding: 27px">
                            <a href="{{ route('photo') }}" class="truncate cursor-pointer block">
                                Rotary Year Photos
                            </a>
                            <a href="{{ route('videos') }}" class="cursor-pointer block" style="margin-top: 14px">
                                Videos
                            </a>
                        </div>
                    </div>

                    <!-- Blog -->
                    <div class="pl-3 xl:pl-6">
                        <a href="{{route('blog')}}"
                            class="relative flex items-center h-full px-3 xl:px-6 cursor-pointer">
                            <div class="font-600">BLOG</div>
                        </a>
                    </div>

                    <!-- Become A Member -->
                    <div>
                        <a href="{{ route('membership') }}"
                            class="relative flex items-center h-full px-3 xl:px-6 cursor-pointer">
                            <div class="font-600">BECOME A MEMBER</div>
                        </a>
                    </div>

                    <!-- Contact Us -->
                    <div>
                        <a href="{{ route('contact') }}"
                            class="relative flex items-center h-full px-3 xl:px-6 cursor-pointer">
                            <div class="font-600">CONTACT US</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 -z-10 left-1/2 h-full w-1/2 bg-primary"></div>
    </div>
</div>

<!-- Shadow while sidebar is active in mobile or tablet -->
<div id="shadow-background"
    class="lg:hidden fixed top-0 left-0 w-full h-screen bg-transparent bg-opacity-40 transition-all duration-500 -z-10"
    style="z-index: -10" onclick="toggleSidebar()"></div>
