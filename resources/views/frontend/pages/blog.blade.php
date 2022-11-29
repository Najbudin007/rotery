@extends('frontend.layouts.master')

@section('content')

    <!-- Hero Section -->
    <div>
      <div class="relative hero-section">
        <div class="bg-black bg-opacity-30 w-full h-full">
          <div
            class="max-w-7xl mx-auto h-full text-white grid place-items-center"
          >
            <div class="w-full px-6 md:px-10 xl:px-14 space-x-6">
              <div class="space-y-2.5">
                <div
                  class="text-lg md:text-xl lg:text-3xl font-playFair font-900 leading-5"
                  style="letter-spacing: 0.035em"
                >
                  Amazing Golf Course Around <br />
                  The World
                </div>
                <div
                  class="text-xxs md:text-xs lg:text-sm"
                  style="letter-spacing: -0.005em"
                >
                  Rotary Club of Himalayan Golf Course is an amazing
                  <br class="hidden md:block" />
                  club that aims to provide astonishing experience....
                </div>
                <div class="inline-block">
                  <a
                    href="individual-blog.html"
                    class="font-500 flex items-center space-x-2 cursor-pointer bg-secondary overflow-hidden rounded p-3 md:px-6 text-xs text-white"
                  >
                    <div>Read More</div>
                    <div>
                      <img
                        src="../resources/images/icons/double-arrow.svg"
                        alt="double arrow"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Latest Blog Articles -->
    <div>
      <div
        class="max-w-7xl mx-auto py-6 md:py-10 px-4 md:px-10 xl:px-14 lg:space-y-7"
      >
        <div class="relative space-y-4 lg:space-y-7">
          <div>
            <h1
              class="text-lg text-primary font-playFair font-700 md:text-2xl lg:text-center"
            >
              Latest Blog Articles
            </h1>
          </div>

          <div class="blog-swiper overflow-hidden" id="latest-blog-swiper">
            <!-- Blog Articles Swiper -->
            <div class="swiper-wrapper lg:grid lg:grid-cols-4 lg:gap-8">

              <!-- Individual Blog Article -->
              <div
                class="border border-bgLight space-y-3 blog-card rounded-xl swiper-slide"
              >
                <div>
                  <img
                    src="../resources/images/home/golf-course.png"
                    alt="individual blog article"
                    class="w-full"
                  />
                </div>
                <div
                  class="text-sm text-primary border-l border-secondary px-4"
                  style="border-left-width: 3px"
                >
                  <div class="font-600 text-sm">
                    The best golf course in Nepal
                  </div>
                </div>
                <div class="text-xs text-textDarkSecondary px-4 leading-6">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry...
                </div>
                <div class="flex px-4 pb-3">
                  <a
                    href="{{route('blog_detail')}}"
                    class="flex items-center space-x-2 cursor-pointer text-xs font-500 text-primary message-view-all"
                  >
                    <div>Read More</div>
                    <div>
                      <img
                        src="../resources/images/icons/double-arrow-yellow.svg"
                        alt="double arrow"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pagination For Latest Blog Articles For Laptop And Higher Resolutions -->
        <div
          class="hidden lg:flex justify-between border border-bgLight rounded text-textPagination py-3.5 px-8"
          style="font-size: 15px"
        >
          <div class="space-x-3.5 flex items-center">
            <div
              class="w-4 h-4 flex items-center justify-center cursor-pointer"
            >
              <img
                src="../resources/images/icons/left-arrow-small.svg"
                alt="left arrow"
              />
            </div>
            <div class="space-x-3.5 flex items-center">
              <!-- Active Pagination -->
              <div
                class="border w-4 h-4 flex items-center justify-center cursor-default"
              >
                1
              </div>
              <div class="cursor-pointer">2</div>
              <div class="cursor-pointer">3</div>
              <div class="cursor-pointer">4</div>
              <div class="text-textLight opacity-90 cursor-default">...</div>
              <div class="cursor-pointer">15</div>
            </div>
            <div
              class="w-4 h-4 flex items-center justify-center cursor-pointer"
            >
              <img
                src="../resources/images/icons/left-arrow-small.svg"
                class="rotate-180 cursor-pointer"
                alt="left arrow"
              />
            </div>
          </div>
          <div>Showing 1/15</div>
        </div>
      </div>
    </div>

    <!-- Popular Blog Articles -->
    <div class="lg:hidden">
      <div class="max-w-7xl mx-auto px-4 md:px-10 xl:px-14 lg:space-y-7">
        <div class="relative space-y-4 lg:space-y-7">
          <div>
            <div
              class="text-lg text-primary font-playFair font-700 md:text-2xl lg:text-center"
            >
              Popular Blog Articles
            </div>
          </div>

          <div class="swiper overflow-hidden">
            <!-- Popular Blog Articles Swiper -->
            <div class="swiper-wrapper lg:grid lg:grid-cols-4 lg:gap-8">
              <!-- Individual Blog Article -->
              <div
                class="border border-bgLight space-y-3 blog-card rounded-xl swiper-slide"
              >
                <div>
                  <img
                    src="../resources/images/home/golf-course.png"
                    alt="individual blog article"
                    class="w-full"
                  />
                </div>
                <div
                  class="text-sm text-primary border-l border-secondary px-4"
                  style="border-left-width: 3px"
                >
                  <div class="font-600 text-sm">
                    The best golf course in Nepal
                  </div>
                </div>
                <div class="text-xs text-textDarkSecondary px-4 leading-6">
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry...
                </div>
                <div class="flex px-4 pb-3">
                  <a
                    href="individual-blog.html"
                    class="flex items-center space-x-2 cursor-pointer text-xs font-500 text-primary message-view-all"
                  >
                    <div>Read More</div>
                    <div>
                      <img
                        src="../resources/images/icons/double-arrow-yellow.svg"
                        alt="double arrow"
                      />
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- All Blog Articles -->
    <div class="lg:hidden">
      <div
        class="max-w-7xl mx-auto py-6 md:py-10 px-4 md:px-10 xl:px-14 lg:space-y-7"
      >
        <div class="relative space-y-4 lg:space-y-7">
          <div>
            <div
              class="text-lg text-primary font-playFair font-700 md:text-2xl lg:text-center"
            >
              All Blog Articles
            </div>
          </div>

          <!-- All Blog Articles -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Individual Blog Article -->
            <div
              class="border border-bgLight space-y-3 rounded-xl swiper-slide"
            >
              <div>
                <img
                  src="../resources/images/home/golf-course.png"
                  alt="individual blog article"
                  class="w-full"
                />
              </div>
              <div
                class="text-sm text-primary border-l border-secondary px-4"
                style="border-left-width: 5px"
              >
                <div class="font-600 text-sm">
                  The best golf course in Nepal The best golf course in Nepal
                </div>
              </div>
              <div class="text-xs text-textDarkSecondary px-4 leading-6">
                Rotary Club of Himalayan Golf course is the best golf course in
                Nepal. Rotary Club of Himalayan Golf course is the best golf
                course in Nepal...
              </div>
              <div class="flex px-4 pb-3">
                <a
                  href="individual-blog.html"
                  class="flex items-center space-x-2 cursor-pointer text-xs font-500 text-primary message-view-all"
                >
                  <div>Read More</div>
                  <div>
                    <img
                      src="../resources/images/icons/double-arrow-yellow.svg"
                      alt="double arrow"
                    />
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection