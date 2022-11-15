@extends('frontend.layouts.master')
@section('content')
<div class="max-w-7xl mx-auto">
    <div class="px-4 py-6 md:p-10 xl:px-14">
      <div>
        <h1 class="text-lg tracking-header text-primary font-playFair font-700 md:text-xl lg:text-2xl lg:text-center">
          MEET OUR CHARTER MEMBERS
        </h1>
        @if(isset($president))
        <!-- Charter President -->
        <div class="py-6">
          <div class="text-primary font-500 lg:text-2xl tracking-header">
            Charter President
          </div>
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 lg:gap-8 pt-6">
            <!-- Individual Charter President -->
            <div class="bg-white member-card rounded-xl">
              <div>
                <img src="{{asset('profile/'.$president->image)}}" alt="Charter President" class="w-full h-36 md:h-44 lg:h-52 object-cover">
              </div>
              <div class="text-sm text-primary border-l my-3 border-secondary px-4" style="border-left-width: 3px">
                <div class="font-600 text-sm">{{$president->name}}</div>
                <div class="text-xs">{{$president->designation}}</div>
              </div>
            </div>
          </div>
        </div>
@endif
        <!-- Other Charter Members -->
        <div class="text-primary font-500 lg:text-2xl pb-6 tracking-header">
          Other Charter Members
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 lg:gap-8">
          <!-- Individual Charter Member -->
          @foreach ($members as $member)
            @if($member->designation !== "president")
          <div class="bg-white member-card rounded-xl">
            <div>
              <img src="{{asset('profile/'.$member->image)}}" alt="Charter Member" class="w-full h-36 md:h-44 lg:h-52 object-cover">
            </div>
            <div class="text-sm text-primary border-l my-3 border-secondary px-4" style="border-left-width: 3px">
              <div class="font-600 text-sm">{{$member->name}}</div>
              <div class="text-xs">{{$member->designation}}</div>
            </div>
          </div>
          @endif
          @endforeach
       
        </div>

        {{-- <div class="hidden lg:grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 lg:gap-8 pt-6 more-members" style="display: grid;">
          <!-- Individual Charter Member -->
          <div class="bg-white member-card rounded-xl">
            <div>
              <img src="../resources/images/about/board-members/board-member-10.png" alt="Charter Member" class="w-full h-36 md:h-44 lg:h-52 object-cover">
            </div>
            <div class="text-sm text-primary border-l my-3 border-secondary px-4" style="border-left-width: 3px">
              <div class="font-600 text-sm">Ram Sharma</div>
              <div class="text-xs">ABCD President</div>
            </div>
          </div>

          <!-- Individual Charter Member -->
          <div class="bg-white member-card rounded-xl">
            <div>
              <img src="../resources/images/about/board-members/board-member-11.png" alt="Charter Member" class="w-full h-36 md:h-44 lg:h-52 object-cover">
            </div>
            <div class="text-sm text-primary border-l my-3 border-secondary px-4" style="border-left-width: 3px">
              <div class="font-600 text-sm">Ram Sharma</div>
              <div class="text-xs">ABCD President</div>
            </div>
          </div>

          <!-- Individual Charter Member -->
          <div class="bg-white member-card rounded-xl">
            <div>
              <img src="../resources/images/about/board-members/board-member-12.png" alt="Charter Member" class="w-full h-36 md:h-44 lg:h-52 object-cover">
            </div>
            <div class="text-sm text-primary border-l my-3 border-secondary px-4" style="border-left-width: 3px">
              <div class="font-600 text-sm">Ram Sharma</div>
              <div class="text-xs">ABCD President</div>
            </div>
          </div>
        </div> --}}

        {{-- <div class="flex justify-end lg:hidden pt-6" id="view-more">
          <div onclick="toggleBoardMembers()" class="flex items-center space-x-2 cursor-pointer text-xs font-500 text-primary">
            <div class="text">View More</div>
            <div>
              <img src="../resources/images/icons/down-arrow.svg" alt="Charter Member">
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
@endsection