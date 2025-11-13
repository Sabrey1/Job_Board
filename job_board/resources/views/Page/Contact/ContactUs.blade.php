<x-app-layout>
   <x-slot name="header">
        <div class="font-semibold text-3xl text-gray-800 leading-tight">
            {{__('ទាក់ទងមកយើងខ្ញុំ')}} <br>
            <p class="text-gray-500" style="font-size: 18px; font-weight: bold">{{ __('Contact US') }}</p>
            </div>
    </x-slot>

    <!-- Scroll to Top Button -->
        <button id="scrollTopBtn"
            class="fixed bottom-8 right-8 p-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full shadow-2xl hover:shadow-blue-500/50 hover:scale-110 transition-all duration-300 z-50 group">
            <svg class="w-5 h-5 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>
    <div>
        <div style="max-width: 1200px; width: 100%;  margin: 0 auto;">
            <div class="grid grid-cols-12 gap-4 mt-5">
                <div class="col-span-6 p-2 ">
                    <p class="font-bold">
                        Our Contact
                    </p>
                    <div class="flex items-center mb-2">
                            <i class="fa-solid fa-location-dot mr-3"></i>
                            <p> Phum Paprak Khang Tboung, Sangkat Kakab, Khan Porsenchey, Phnom Penh, Cambodia</p>
                        </div>
                        <div class="flex items-center mb-2">
                             <i class="fa-solid fa-phone mr-3"></i>
                             <p>+855 93 739 400</p>
                        </div>
                        <div class="flex items-center mb-2">
                            <i class="fa-solid fa-envelope mr-3"></i>
                            <p>info@jobify.works</p>
                        </div>
                        <div class="flex items-center mb-4">
                            <i class="fa-solid fa-clock mr-3"></i>
                            <p>Monday — Friday<br>
                            8:00am - 6:00pm</p>
                        </div>

                        <div class="mt-5">
                            <iframe class="w-full h-64 rounded-lg border"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.0374369375413!2d103.84636459999996!3d13.347947399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31101703ece55631%3A0xc33e7bb7e0ac1e57!2sBuild%20Bright%20University%20Siem%20Reap%20Campus!5e0!3m2!1sen!2skh!4v1757049600184!5m2!1sen!2skh"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                </div>
                <div class="col-span-6 p-2 text-center mt-2">
                    <p class="font-semibold text-3xl text-gray-800 leading-tight">Contact Form</p>
                    <form>
                        <input type="text" class="my-3 p-2 border border-indigo-600 w-full rounded-lg" placeholder="Full name">
                        <br>
                        <input type="text" class="my-3 p-2 border border-indigo-600 w-full rounded-lg" placeholder="E-mail">
                        <br>
                        <textarea class="my-3 p-2 border border-indigo-600 w-full rounded-lg" placeholder="Message"></textarea>
                        <br>
                        <button class="  bg-[oklch(28.2%_0.091_267.935)] text-white px-4 py-3 rounded-md hover:bg-[oklch(37.9%_0.146_265.522)]" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 80px">
        @include('layouts.Footer')
    </div>
</x-app-layout>

<script>
    const scrollBtn = document.getElementById('scrollTopBtn');

    // Hide button initially
    scrollBtn.style.display = 'none';

    // Show button when user scrolls down
    window.onscroll = function() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollBtn.style.display = "block";
        } else {
            scrollBtn.style.display = "none";
        }
    };

    // Scroll to top on click
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
