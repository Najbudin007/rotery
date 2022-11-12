        <div class="c-banner relative">
            <div class="banner-image mySlides h-full ">

                <img src="{{ asset('frontend-theme/images/bg.png') }}" class="w-full h-full object-cover  " />


            </div>


            <div class='o-container  px-16 h-full '>
                <div class="lg:w-5/12 banner-content absolute top-0  h-full  ">
                    <img src="{{ asset('frontend-theme/images/icon-curl-blue.svg') }}" class="pl-32" />
                    <div class="banner-heading ">

                        <h4 class="banner-title font-bold font-openSans text-xs leading-[12px] text-white pl-32  ">
                            LOREM IPSUM DOLOR SIT AMET</h4>
                        <h1 class=" font-playFair font-black text-3xl leading-[117%] mt-10 text-white pl-32">Lorem
                            Ipsum is simply dummy text of the printing
                        </h1>
                    </div>
                    <div class="banner-paragraph">

                        <p class=" font-poppins font-normal text-sm leading-[150%] mt-20 text-white  pl-32">Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s,.</p>
                    </div>
                    <div class="pl-32 mt-10 ">
                        <button class="banner-button bg-orange rounded-sm px-32 py-10 text-white flex items-center">
                            <span class=' font-medium text-xs leading-[117.4%] mr-4'>Read More</span>
                            <img src="{{ asset('frontend-theme/images/arrow.svg') }}" alt=" Your Steel Storage" />
                        </button>
                    </div>
                </div>
                <div class="relative">
                    <div class="scroller" id="scroller-btn">
                        <img src="{{ asset('frontend-theme/images/arrow-down.svg') }}"
                            class="bg-orange p-20 rounded-sm " />
                    </div>
                </div>


            </div>
        </div>

        <script>
            var scroll = document.getElementById("scroller-btn")
            scroll.addEventListener("click", function() {
                window.scrollTo({
                    top: window.innerHeight,
                    behavior: "smooth"
                })

            })


            let slideIndex = 1;
            showSlides(slideIndex)

            function currentSlide(n) {
                showSlides(slideIndex = n);
                console.log("Clicked", showSlides)
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides")
                let dots = document.getElementsByClassName("dot")
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slideslength
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace("active", "");
                }
                slides[slideIndex - 1].style.display = "block"
                dots[slideIndex - 1].className += "active";


            }
        </script>

        <div class="o-container px-16">

            <div>
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        </div>
