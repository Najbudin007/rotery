@extends('frontend.layouts.master')

@section('content')
    <!-- Title And Short Description -->
    <div class="max-w-7xl mx-auto">
      <div class="py-6 px-4 md:p-10 xl:px-14 text-center">
        <!-- Title of the Blog -->
        <h1
          class="pb-3 lg:pb-6 text-lg md:text-xl lg:text-3xl font-playFair font-700 leading-5 text-primary"
          style="letter-spacing: 0.035em"
        >
          Amazing Golf Course Around The World
        </h1>

        <!-- Short Description -->
        <div class="text-xxs md:text-xs">
          Rotary Club of Himalayan Golf Course is an amazing club that aims to
          provide astonishing experience....
        </div>
      </div>
    </div>

    <!-- Blog Image -->
    <div class="max-w-7xl mx-auto md:px-10 xl:px-14">
      <img
        src="../resources/images/blog/individual-blog.png"
        alt="individual blog"
        class="w-full"
      />
    </div>

    <!-- Blog Complete Detail -->
    <div class="max-w-7xl mx-auto p-4 md:p-10 xl:px-14 space-y-4 md:space-y-10">
      <div
        class="text-sm text-justify text-textLight lg:text-black md:font-300 leading-7 blog-description"
      >
        Rotary Himalayan Golf Course is one of the best golf course in the
        World. We provide best services where our members can enjoy all the
        facilities to the full extent. Rotary Himalayan Golf Course is one of
        the best golf course in the World. We provide best services where our
        members can enjoy all the facilities to the full extent. Rotary
        Himalayan Golf Course is one of the best golf course in the World. We
        provide best services where our members can enjoy all the facilities to
        the full extent. <br />

        Rotary Himalayan Golf Course is one of the best golf course in the
        World. We provide best services where our members can enjoy all the
        facilities to the full extent.Rotary Himalayan Golf Course is one of the
        best golf course in the World. We provide best services where our
        members can enjoy all the facilities to the full extent. <br />

        Rotary Himalayan Golf Course is one of the best golf course in the
        World. We provide best services where our members can enjoy all the
        facilities to the full extent. <br />

        Rotary Himalayan Golf Course is one of the best golf course in the
        World. We provide best services where our members can enjoy all the
        facilities to the full extent. <br />

        Rotary Himalayan Golf Course is one of the best golf course in the
        World. We provide best services where our members can enjoy all the
        facilities to the full extent.Rotary Himalayan Golf Course is one of the
        best golf course in the World. We provide best services where our
        members can enjoy all the facilities to the full extent.
      </div>
      <div
        class="flex justify-between blog-user-detail text-sm text-textBlogUser"
      >
        <div class="flex items-center space-x-2.5">
          <div>
            <img src="../resources/images/icons/user.svg" alt="user icon" />
          </div>
          <div>Amber Frankestine</div>
        </div>
        <div class="flex items-center space-x-2.5">
          <div>
            <img src="../resources/images/icons/time.svg" alt="clock icon" />
          </div>
          <div>2020-12-12</div>
        </div>
      </div>
    </div>

    <!-- Comment Section -->
    {{-- <div class="max-w-7xl mx-auto p-4 pt-0 md:pt-0 md:p-10 xl:px-14">
      <div class="text-textDark">
        <form class="space-y-2.5 comment-form">
          <div
            class="font-playFair font-700 tracking-header lg:font-poppins lg:font-600 lg:text-4xl"
          >
            Leave A Comment
          </div>
          <div class="font-300 text-xxs lg:text-sm">
            Your email address will not be published
          </div>
          <!-- Input Field For Name -->
          <div class="text-xs font-500">
            <label for="name" class="pb-2 inline-block">Name</label>
            <input
              type="text"
              id="name"
              class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
              placeholder="Enter Your Name"
            />
          </div>
          <!-- Input Field For Email -->
          <div class="text-xs font-500">
            <label for="email" class="pb-2 inline-block">Email</label>
            <input
              type="email"
              id="email"
              class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
              placeholder="Enter Your Email"
            />
          </div>
          <!-- Textarea For Message -->
          <div class="text-xs font-500">
            <label for="message" class="pb-2 inline-block">Message</label>
            <textarea
              id="message"
              rows="10"
              class="border leading-6 resize-none w-full px-4 py-2.5 rounded-md focus:border-gray-400"
              placeholder="Enter Your Message"
            ></textarea>
          </div>
          <div class="flex space-x-2">
            <input type="checkbox" id="confirm" class="border" />
            <label for="confirm" class="text-xxs"
              >Save my name, email & website in the browser for the next time I
              comment.</label
            >
          </div>
          <div>
            <button
              class="bg-primary text-white text-xs text-center w-24 py-2 rounded-md"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
    </div> --}}
    
@endsection