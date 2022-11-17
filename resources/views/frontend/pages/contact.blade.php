@extends('frontend.layouts.master')
@section('content')
    <div class="max-w-7xl mx-auto p-4 md:p-10 xl:px-14">
        <!-- Google Map -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.66876573604!2d84.4185697675878!3d27.696679323388242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb4094f6960b%3A0xb67a9c5f33e6c78!2sPulchowk%20Bus%20Stop!5e0!3m2!1sen!2snp!4v1662292430537!5m2!1sen!2snp"
            class="w-full h-64 md:h-80 lg:h-96" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
{{-- 
            @if($errors->has())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif --}}

        <div class="text-textDark pt-4 md:pt-10 max-w-4xl mx-auto">
            <h1 class="text-primary text-lg md:text-xl lg:text-3xl font-playFair font-700 text-center pb-5">
                Contact Us
            </h1>
            
            @if(Session::has('success'))
              <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold">{{ Session::get('success') }}</p>
              </div>
            @endif

           
            <form action="{{route('contactForm.store')}}" class="space-y-4 lg:space-y-6" method="POST">
                @csrf
                <!-- Input Field For Name -->
                <div class="text-xs font-500">
                    <label for="name" class="pb-2 inline-block">Name</label>
                    <input type="text" id="name" name="name" class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                        placeholder="Enter Your Name"
                        style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                </div>
                <!-- Input Field For Phone Number -->
                <div class="text-xs font-500">
                    <label for="phone-number" class="pb-2 inline-block">Phone</label>
                    <input type="text" name="phone" id="phone-number"
                        class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                        placeholder="Enter Your Phone Number">
                </div>
                <!-- Input Field For Email -->
                <div class="text-xs font-500">
                    <label for="email" class="pb-2 inline-block">Email</label>
                    <input type="email" name="email" id="email" class="border w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                        placeholder="Enter Your Email">
                </div>
                <!-- Textarea For Message -->
                <div class="text-xs font-500">
                    <label for="message" class="pb-2 inline-block">Message</label>
                    <textarea id="message" name="message" rows="10"
                        class="border leading-6 resize-none w-full px-4 py-2.5 rounded-md focus:border-gray-400"
                        placeholder="Enter Your Message"></textarea>
                </div>
                <div class="pt-2">
                    <button class="bg-primary text-white text-xs text-center w-24 py-2 rounded-md">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
