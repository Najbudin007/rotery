<!doctype html>
<html class="no-js" lang="en">



<body class="">


    @include('frontend.layouts.header')

    <header class="c-header">
        @include('frontend.layouts.topbar')

        @include('frontend.layouts.navbar')


    </header>
    <!--/.c-header-->

    <main class="js-padding-top">
        @include('frontend.template.banner')

        @include('frontend.template.aboutus')
        <div class="bg-gray-200 mt-96">

            <div class="o-container px-16">
                <div class="flex flex-col lg:flex-row gap-x-60  ">



                    @include('frontend.template.notice')
                    @include('frontend.template.news')

                </div>


            </div>

        </div>

        @include('frontend.template.project')

        @include('frontend.template.testimonial')



    </main>

    @include('frontend.layouts.footer')
    <!--/.c-footer-->





    <script src="{{ asset('frontend-theme/js/manifest.js') }}"></script>
    <script src="{{ asset('frontend-theme/js/vendor.js') }}"></script>
    <script src="{{ asset('frontend-theme/js/scripts.js') }}"></script>

</body>

</html>
