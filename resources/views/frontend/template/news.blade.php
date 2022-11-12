  <div class=" lg:w-7/12 bg-gray-200 flex flex-col  z-40">
      <div class=" my-60 flex justify-between items-center  ">


          <h2 class="font-bold text-2xl leading-auto uppercase text-gray-150  rounded-md font-playFair">
              Our News</h2>

          <button class=" bg-blue-100 px-20 py-10 rounded-xs text-white flex items-center">
              <span class=' font-medium text-xs leading-[117.4%] mr-4'>View All</span>
              <img src="{{ asset('frontend-theme/images/arrow.svg') }}" alt=" Your Steel Storage" />
          </button>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 justify-between gap-x-40">

          <div class="my-20 lg:mt-0">
              <img src='{{ asset('frontend-theme/images/news1.png') }}' class="object-cover w-full rounded-md h-214" />
              <h4 class="font-semiBold text-lg leading-[127%] text-blue-100 px-20 mt-24">Lorem Ipsum
                  is simply dummy text</h4>


              <p class="font-normal text-sm leading-[172%] px-20 mt-20 ">Lorem Ipsum is simply dummy
                  text of the printing and typesetting industry...</p>

              <p class="font-normal text-xs text-orange px-20 mt-20">12-20-2021</p>


          </div>

          <div class="my-20 lg:mt-0">

              <img src='{{ asset('frontend-theme/images/news2.png') }}' class="object-cover w-full rounded-md h-214" />

              <h4 class="font-semiBold text-lg leading-[127%] text-blue-100 px-20 mt-24 ">Lorem Ipsum
                  is simply dummy text</h4>

              <p class="font-normal text-sm leading-[172%] px-20 mt-20 ">Lorem Ipsum is simply dummy
                  text of the printing and typesetting industry...</p>

              <p class="font-normal text-xs text-orange px-20 mt-20">12-20-2021</p>


          </div>
      </div>
  </div>
