<?php $testimonials = App\Models\Testimonial::where('status', 'active')->get(); ?>
<div class="bg-bgLightSecondary">
    <div class="max-w-7xl mx-auto py-6 md:py-10 lg:py-16" style="flex: 2">
      <div class="relative space-y-4 lg:space-y-7">
        <div class="px-4 md:px-10 xl:px-14">
          <div>
            <div>
              <img
                src="./resources/images/icons/zigzag-line-yellow.svg"
                alt="zigzag line"
              />
            </div>
            <div
              class="text-xxs text-secondary"
              style="letter-spacing: 0.29em"
            >
              WHAT THEY HAVE TO SAY?
            </div>
          </div>
          <div
            class="text-lg text-primary font-playFair font-700 md:text-2xl"
          >
            Message for 2021-2022
          </div>
        </div>

        <div
          class="message-swiper overflow-hidden relative px-4 md:mx-6 lg:px-4 xl:mx-10"
        >
          <!-- All Message Cards Slider and Swiper -->
          <div class="swiper-wrapper">

            <!-- Invididual Message Card -->
            @foreach ($testimonials as $testi )
            <div
              class="bg-white space-y-3 message-card rounded-xl swiper-slide"
            >
              <div>
                <img
                  src="./resources/images/about/board-members/board-member-2.png"
                  alt="board member"
                  class="w-full object-cover"
                />
              </div>
              <div class="lg:py-3 space-y-3">
                <div
                  class="text-sm text-primary border-l border-secondary px-4"
                  style="border-left-width: 3px"
                >
                  <div class="font-600 text-sm lg:text-lg">
                   {{$testi->name}}
                  </div>
                  <div class="font-500 text-xs lg:text-base">
                    {{$testi->designation}}
                  </div>
                </div>
                <div
                  class="text-xs lg:text-sm text-textDarkSecondary px-4"
                  style="line-height: 24px"
                >
                {!! nl2br($testi->message) !!}
                </div>
                {{-- <div
                  class="px-4 pb-3 flex items-center space-x-2 cursor-pointer text-xs font-500 text-primary message-view-all"
                >
                  <div>Read More</div>
                  <div>
                    <img
                      src="./resources/images/icons/double-arrow-yellow.svg"
                      alt="double arrow"
                    />
                  </div>
                </div> --}}
              </div>
            </div>
            @endforeach

        
          <!-- Left And Right Arrows For Message Slider -->
          <div class="hidden lg:block">
            <div
              class="swiper-button-prev w-0 h-0 overflow-hidden"
              id="message-slider-prev"
            ></div>
            <div
              class="swiper-button-next w-0 h-0 overflow-hidden"
              id="message-slider-next"
            ></div>
          </div>

          <!-- Custom Arrows For Slider -->
          <div
            class="absolute top-1/2 left-0 -translate-y-[28px] xl:-translate-y-[4px] -mb-10 hidden lg:flex w-full h-0 justify-between items-center"
            style="z-index: 11"
          >
            <div
              class="shadow-md overflow-hidden bg-white border border-white w-16 h-16 rounded-full flex items-center justify-center cursor-pointer bg-opacity-30 hover:bg-opacity-40 transition-all duration-300"
              onclick="document.getElementById('message-slider-prev').click()"
            >
              <img
                src="./resources/images/icons/left-arrow.svg"
                class="w-5 h-5"
                alt="left arrow"
              />
            </div>
            <div
              class="overflow-hidden bg-white border border-white w-16 h-16 rounded-full flex items-center justify-center cursor-pointer bg-opacity-30 hover:bg-opacity-40 transition-all duration-300 rotate-180"
              onclick="document.getElementById('message-slider-next').click()"
              style="
                box-shadow: 0px -4px 6px -1px rgb(0 0 0 / 0.1),
                  0 2px 4px -2px rgb(0 0 0 / 0.1);
              "
            >
              <img
                src="./resources/images/icons/left-arrow.svg"
                class="w-5 h-5"
                alt="left arrow"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>