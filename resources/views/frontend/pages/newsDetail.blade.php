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
          {{$news_details->title}}
        </h1>

        <!-- Short Description -->
        <div class="text-xxs md:text-xs">
          {!! $news_details->short_description !!}
        </div>
      </div>
    </div>

    <!-- Blog Image -->
    <div class="max-w-7xl mx-auto md:px-10 xl:px-14">
      <img
        src="{{asset('images/'.$news_details->image)}}"
        alt="individual blog"
        class="w-full"
      />
    </div>

    <!-- Blog Complete Detail -->
    <div class="max-w-7xl mx-auto p-4 md:p-10 xl:px-14 space-y-4 md:space-y-10">
      <div
        class="text-sm text-justify text-textLight lg:text-black md:font-300 leading-7 blog-description"
      >
        {!! nl2br($news_details->description)!!}
      </div>
      <div
        class="flex justify-between blog-user-detail text-sm text-textBlogUser"
      >
        <div class="flex items-center space-x-2.5">
          <div>
            <img src="../resources/images/icons/user.svg" alt="user icon" />
          </div>
          <div>{{$news_details->author}}</div>
        </div>
        <div class="flex items-center space-x-2.5">
          <div>
            <img src="../resources/images/icons/time.svg" alt="clock icon" />
          </div>
          <div>{{$news_details->created_at->diffForHumans()}}</div>
        </div>
      </div>
    </div>

   
@endsection