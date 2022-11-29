@extends('frontend.layouts.master')
@section('content')
    <div class="max-w-4xl mx-auto p-4 md:p-10 xl:px-14">
        <div class="text-textDark">
            <h1 class="text-primary text-lg md:text-xl lg:text-3xl font-playFair font-700 text-center pb-5">
                Membership Form
            </h1>

            @if (Session::has('success'))
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="font-bold">{{ Session::get('success') }}</p>
                </div>
            @endif

            <form action="{{ route('memberForm.store') }}" method="POST" class="space-y-4 lg:space-y-6 comment-form">
                @csrf
                <!-- Membership Category -->
                <div class="text-xs font-600 space-y-4 lg:font-500">
                    <div class="lg:text-sm lg:text-textDark">Membership Category :</div>
                    <div class="font-500 space-y-4 lg:flex lg:space-y-0 lg:space-x-14">
                        <div class="flex space-x-2 lg:items-start">
                            <input type="checkbox" name="member_category" value="Full Membership"
                                id="membership-full-membership" class="border mt-1">
                            <label for="membership-full-membership">Full membership (with more than 5 years of
                                service)</label>
                        </div>
                        <div class="flex space-x-2 lg:items-start">
                            <input type="checkbox" name="member_category" value="Associate Membership"
                                id="membership-associate-membership" class="border mt-1">
                            <label for="membership-associate-membership">Associate Membership (with less than 5 years of
                                service)</label>
                        </div>
                    </div>
                </div>

                <!-- Fees Category -->
                <div class="text-xs font-600 space-y-4 lg:font-500 py-4 lg:py-0">
                    <div class="lg:text-sm lg:text-textDark">Fees Category :</div>
                    <div class="font-500 space-y-4 lg:flex lg:space-y-0 lg:space-x-14">
                        <div class="flex space-x-2 lg:items-start">
                            <input type="checkbox" name="member_fees_category" value="Life MemberShip"
                                id="fees-life-membership" class="border">
                            <label for="fees-life-membership">Life Membership (one single payment of RS.100,000)</label>
                        </div>
                        <div class="flex space-x-2 lg:items-start">
                            <input type="checkbox" name="member_fees_category" value="Annual Membership"
                                id="fees-annual-membership" class="border">
                            <label for="fees-annual-membership">Annual Membership (Rs.10,000 per fiscal year)</label>
                        </div>
                    </div>
                </div>

                <!-- Input Field For Name -->
                <div class="text-xs font-500">
                    <label for="name" class="pb-2 inline-block">Name</label>
                    <input type="text" name="name" id="name"
                        class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" placeholder="Enter Your Name"
                        style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                </div>

                <!-- Input Field For Email -->
                <div class="text-xs font-500">
                    <label for="email" class="pb-2 inline-block">Email</label>
                    <input type="email" name="email" id="email"
                        class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400" placeholder="Enter Your Email">
                </div>

                <!-- Input Field For Phone Number -->
                <div class="text-xs font-500">
                    <label for="phone-number" class="pb-2 inline-block">Phone</label>
                    <input type="text" name="phone" id="phone-number"
                        class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                        placeholder="Enter Your Phone Number">
                </div>

                <!-- Input Fields For Home City And Country -->
                <div class="md:flex space-y-4 md:space-y-0 md:space-x-4">
                    <!-- Input Field For Home City -->
                    <div class="text-xs font-500 md:flex-1">
                        <label for="home-city" class="pb-2 inline-block">Home City</label>
                        <input type="text" name="city" id="home-city"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Home City">
                    </div>
                    <!-- Input Field For Country -->
                    <div class="text-xs font-500 md:flex-1">
                        <label for="country" class="pb-2 inline-block">Country</label>
                        <input type="text" name="country" id="country"
                            class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                            placeholder="Enter Your Country">
                    </div>
                </div>

                <!-- Multilateral Organizations Experience -->
                <div class="text-xs font-600 lg:font-500 space-y-4 pt-2">
                    <div class="lg:text-sm">Multilateral Organizations Experience</div>
                    <div class="font-500 text-xs space-y-4 lg:space-y-6">
                        <div class="md:grid space-y-4 md:space-y-0 md:gap-4 md:grid-cols-2">
                            <!-- Input Field For Job Title -->
                            <div>
                                <label for="job-title" class="pb-2 inline-block">Job Title</label>
                                <input type="text" name="job_title" id="job-title"
                                    class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                    placeholder="Enter Your Job Title">
                            </div>
                            <!-- Input Field For Year -->
                            <div>
                                <label for="year" class="pb-2 inline-block">Year</label>
                                <input type="date" name="date" id="year" value="2022-12-30" min="1980-01-01"
                                    max="2050-12-31" class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400">
                            </div>

                            <!-- Input Field For Country / Duty Station -->
                            <div class="md:col-span-2 lg:col-span-1">
                                <label for="duty-station" class="pb-2 inline-block">Country / Duty Station</label>
                                <div class="relative">
                                    <input type="text" name="duty_stations" id="duty-station"
                                        class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                        placeholder="Enter Your Duty Station">

                                    <!-- Add Icon -->
                                    <div
                                        class="w-6 h-6 bg-primary rounded flex items-center justify-center absolute right-2.5 cursor-pointer top-1/2 -translate-y-1/2 lg:w-8 lg:h-8 lg:-right-10">
                                        <img src="./resources/images/icons/add.svg" alt="add icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Textarea For Expertise Area -->
                        <div class="text-xs font-500">
                            <label for="expertise-area" class="pb-2 inline-block">Expertise Area</label>
                            <textarea id="expertise-area" name="experties_area" rows="6"
                                class="border leading-6 resize-none w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                                placeholder="Enter Your Expertise Area"></textarea>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <button class="bg-primary text-white text-xs text-center px-4 py-2 rounded-md">
                        Send a message
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
