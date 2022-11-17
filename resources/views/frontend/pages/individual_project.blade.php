@extends('frontend.layouts.master')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="px-4 py-6 md:p-10 xl:p-14">
            <!-- Detail About Individual Project -->
            <div>
                <h1 class="font-playFair text-center font-700 text-primary text-lg tracking-header md:text-xl lg:text-2xl">
                    {{ $project->title }}
                </h1>
                <div class="pt-6 md:pt-10 pb-3.5">
                    <img src="{{ asset('images/' . $project->image) }}" class="w-full h-[254px] md:h-[379px] lg:h-[562px]"
                        alt="Rotary Golf Club Community Service">
                </div>
                {!! $project->description !!}
                {{-- <div class="text-textLight text-justify text-sm leading-7 lg:hidden">
                    Rotary Himalayan Golf Course is one of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. Rotary Himalayan Golf Course is one
                    of the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. Rotary
                    Himalayan Golf Course is one of the best golf course in the World.
                    We provide best services where our members can enjoy all the
                    facilities to the full extent. <br>

                    Rotary Himalayan Golf Course is one of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. Rotary Himalayan Golf Course is one
                    of the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. <br>

                    Rotary Himalayan Golf Course is one of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent.
                </div>

                <div class="text-sm leading-8 font-300 hidden lg:block" style="letter-spacing: -0.005em">
                    Rotary Himalayan Golf Course is one of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. Rotary Himalayan Golf Course is one
                    of the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. One of
                    the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. One of
                    the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. One of
                    the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. Rotary
                    Himalayan Golf Course is one of the best golf course in the World.
                    We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. Rotary Himalayan Golf Course is one
                    of the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent.
                    <br>

                    One of the best golf course in the World. We provide best services
                    where our members can enjoy all the facilities to the full extent.
                    One of the best golf course in the World. We provide best services
                    where our members can enjoy all the facilities to the full extent.
                    One of the best golf course in the World. We provide best services
                    where our members can enjoy all the facilities to the full extent.
                    Rotary Himalayan Golf Course is one of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. One of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. Rotary Himalayan Golf Course is one
                    of the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. One of
                    the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. One of
                    the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent.
                </div> --}}
            </div>

            {{-- <div>
                <div class="font-playFair font-700 text-primary text-lg tracking-header pt-3 md:pt-6 md:text-xl">
                    Educational Awareness and Games
                </div>
                <div class="pt-6 pb-3.5 md:py-[30px] lg:py-10">
                    <div class="h-[222px] overflow-hidden md:flex md:h-[244px] md:space-x-[30px]">
                        <div class="flex-1">
                            <img src="../resources/images/projects/educational-awareness-and-games-1.png"
                                class="w-full h-full" alt="educational awareness and games">
                        </div>
                        <div class="flex-1 hidden md:block">
                            <img src="../resources/images/projects/educational-awareness-and-games-2.png"
                                class="w-full h-full" alt="educational awareness and games">
                        </div>
                        <div class="flex-1 hidden lg:block">
                            <img src="../resources/images/projects/educational-awareness-and-games-3.png"
                                class="w-full h-full" alt="educational awareness and games">
                        </div>
                    </div>
                </div>
                <div class="text-textLight text-sm text-justify leading-7 lg:hidden">
                    Rotary Himalayan Golf Course is one of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. Rotary Himalayan Golf Course is one
                    of the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent. Rotary
                    Himalayan Golf Course is one of the best golf course in the World.
                    We provide best services where our members can enjoy all the
                    facilities to the full extent. <br>

                    Rotary Himalayan Golf Course is one of the best golf course in the
                    World. We provide best services where our members can enjoy all the
                    facilities to the full extent. Rotary Himalayan Golf Course is one
                    of the best golf course in the World. We provide best services where
                    our members can enjoy all the facilities to the full extent.
                </div>

                <div class="hidden lg:block space-y-10">
                    <div class="text-sm leading-8 font-300" style="letter-spacing: -0.005em">
                        Rotary Himalayan Golf Course is one of the best golf course in the
                        World. We provide best services where our members can enjoy all
                        the facilities to the full extent. One of the best golf course in
                        the World. We provide best services where our members can enjoy
                        all the facilities to the full extent. One of the best golf course
                        in the World. We provide best services where our members can enjoy
                        all the facilities to the full extent. One of the best golf course
                        in the World. We provide best services where our members can enjoy
                        all the facilities to the full extent. Rotary Himalayan Golf
                        Course is one of the best golf course in the World. We provide
                        best services where our members can enjoy all the facilities to
                        the full extent. One of the best golf course in the World. We
                        provide best services where our members can enjoy all the
                        facilities to the full extent. One of the best golf course in the
                        World. We provide best services where our members can enjoy all
                        the facilities to the full extent. One of the best golf course in
                        the World. We provide best services where our members can enjoy
                        all the facilities to the full extent. Rotary Himalayan Golf
                        Course is one of the best golf course in the World. We provide
                        best services where our members can enjoy all the facilities to
                        the full extent. One of the best golf course in the World. We
                        provide best services where our members can enjoy all the
                        facilities to the full extent. One of the best golf course in the
                        World. We provide best services where our members can enjoy all
                        the facilities to the full extent. Rotary Himalayan Golf Course is
                        one of the best golf course in the World. We provide best services
                        where our members can enjoy all the facilities to the full extent.
                        <br>

                        One of the best golf course in the World. We provide best services
                        where our members can enjoy all the facilities to the full extent.
                        One of the best golf course in the World. We provide best services
                        where our members can enjoy all the facilities to the full extent.
                        One of the best golf course in the World. We provide best services
                        where our members can enjoy all the facilities to the full extent.
                        Rotary Himalayan Golf Course is one of the best golf course in the
                        World. We provide best services where our members can enjoy all
                        the facilities to the full extent. One of the best golf course in
                        the World. We provide best services where our members can enjoy
                        all the facilities to the full extent. One of the best golf course
                        in the World. We provide best services where our members can enjoy
                        all the facilities to the full extent. One of the best golf course
                        in the World. We provide best services where our members can enjoy
                        all the facilities to the full extent. Rotary Himalayan Golf
                        Course is one of the best golf course in the World. We provide
                        best services where our members can enjoy all the facilities to
                        the full extent. One of the best golf course in the World. We
                        provide best services where our members can enjoy all the
                        facilities to the full extent. One of the best golf course in the
                        World. We provide best services where our members can enjoy all
                        the facilities to the full extent.
                    </div>

                    <div class="flex space-x-[30px]">
                        <div class="space-y-10 w-[264px] flex-shrink-0">
                            <div class="w-full h-[264px]">
                                <img src="../resources/images/projects/students-1.png" class="w-full h-full" alt="students">
                            </div>
                            <div class="w-full h-[264px]">
                                <img src="../resources/images/projects/students-2.png" class="w-full h-full" alt="students">
                            </div>
                        </div>
                        <div class="flex-1 font-300 text-sm leading-8">
                            Rotary Himalayan Golf Course is one of the best golf course in
                            the World. We provide best services where our members can enjoy
                            all the facilities to the full extent. One of the best golf
                            course in the World. We provide best services where our members
                            can enjoy all the facilities to the full extent. One of the best
                            golf course in the World. We provide best services where our
                            members can enjoy all the facilities to the full extent. One of
                            the best golf course in the World. We provide best services
                            where our members can enjoy all the facilities to the full
                            extent. Rotary Himalayan Golf Course is one of the best golf
                            course in the World. We provide best services where our members
                            can enjoy all the facilities to the full extent. One of the best
                            golf course in the World. We provide best services where our
                            members can enjoy all the facilities to the full extent. One of
                            the best golf course in the World. We provide best services
                            where our members can enjoy all the facilities to the full
                            extent. One of the best golf course in the World. We provide
                            best services where our members can enjoy all the facilities to
                            the full extent. Rotary Himalayan Golf Course is one of the best
                            golf course in the World. We provide best services where our
                            members can enjoy all the facilities to the full extent. One of
                            the best golf course in the World. We provide best services
                            where our members can enjoy all the facilities to the full
                            extent. One of the best golf course in the World. We provide
                            best services where our members can enjoy all the facilities to
                            the full extent. Rotary Himalayan Golf Course is one of the best
                            golf course in the World. We provide best services where our
                            members can enjoy all the facilities to the full extent. One of
                            the best golf course in the World. We provide best services
                            where our members can enjoy all the facilities to the full
                            extent. One of the best golf course in the World. We provide
                            best services where our members can enjoy all the facilities to
                            the full extent.
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
