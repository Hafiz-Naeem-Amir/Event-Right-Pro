<x-layouts.frontend>
    @section('content')
        <div class="pb-20 bg-scroll min-h-screen" style="background-image: url('images/events.png')">

            <div class="mr-4 flex justify-end z-30">
                <a type="button" href="#"
                    class="scroll-up-button bg-primary rounded-full p-4 fixed z-20  2xl:mt-[49%] xl:mt-[59%] xlg:mt-[68%] lg:mt-[75%] xxmd:mt-[83%] md:mt-[90%]
                xmd:mt-[90%] sm:mt-[117%] msm:mt-[125%] xsm:mt-[160%]">
                    <img src="images/downarrow.png" alt="" class="w-3 h-3 z-20">
                </a>
            </div>
            <div
                class="mt-5 3xl:mx-52 2xl:mx-28 1xl:mx-28 xl:mx-36 xlg:mx-32 lg:mx-36 xxmd:mx-24 xmd:mx-32 md:mx-28 sm:mx-20 msm:mx-16 xsm:mx-10 xxsm:mx-5 z-10 relative">
                <div class="mt-10 pb-5">
                    <p class="font-poppins font-semibold text-5xl leading-10 text-primary">{{ $content['h1'] }}</p>
                </div>
                <div class="flex sm:space-x-6 msm:space-x-0 xxsm:space-x-0 xxmd:flex-row xmd:flex-col xxsm:flex-col">
                    <div class="xxmd:w-2/3 xmd:w-full xxsm:w-full">
                        <div id="map" style="width:100%;height:500px;">
                        </div>
                    </div>
                    <div class="xxmd:w-1/3 xmd:w-full xxsm:w-full">
                        <div class="p-4 bg-white shadow-lg rounded-md">
                            <div class="flex justify-center border-b border-gray-light pb-8">
                                <img src="{{ asset('uploads/content/' . $content->image) }}" alt=""
                                    class="z-20 h-20 w-40 object-contain">
                            </div>
                            <div class="flex pt-8 flex-wrap 1xl:flex-nowrap">
                                <div
                                    class="mr-5 bg-primary rounded-full h-10 overflow-hidden flex justify-center items-center">
                                    <i class="fa-solid fa-envelope w-10 text-center align-middle text-white"></i>
                                </div>
                                <div>
                                    <p
                                        class="font-poppins font-normal 1xl:text-xl xxmd:text-xl lg:text-base sm:text-base xxsm:text-base leading-7 text-gray-200">
                                        Email</p>
                                    <p
                                        class="font-poppins font-medium 1xl:text-xl xxmd:text-xl lg:text-base sm:text-base xxsm:text-base leading-7 text-gray-200 pt-1">
                                        <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                                            data-cfemail="2d485b4843595f444a4559034342035f485d41546d5e4c4c5e404243465e034443">
                                            {{ $content['email'] }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex pt-8 flex-wrap 1xl:flex-nowrap">
                                <div
                                    class="mr-5 bg-primary rounded-full h-10 overflow-hidden flex justify-center items-center">
                                    <i class="fa-solid fa-phone w-10 text-center align-middle text-white"></i>
                                </div>
                                <div>
                                    <p
                                        class="font-poppins font-normal 1xl:text-xl xxmd:text-xl lg:text-base sm:text-base xxsm:text-base leading-7 text-gray-200">
                                        Phone</p>
                                    <p
                                        class="font-poppins font-medium 1xl:text-xl xxmd:text-xl lg:text-base sm:text-base xxsm:text-base leading-7 text-gray-200 pt-1">
                                        {{ $content['phone'] }} </p>
                                </div>
                            </div>
                            <div class="flex pt-8 flex-wrap 1xl:flex-nowrap">
                                <div
                                    class="mr-5 bg-primary rounded-full h-10 overflow-hidden flex justify-center items-center">
                                    <i class="fa-solid fa-location-dot w-10 text-center align-middle text-white"></i>
                                </div>
                                <div>
                                    <p
                                        class="font-poppins font-normal 1xl:text-xl xxmd:text-xl lg:text-base sm:text-base xxsm:text-base leading-7 text-gray-200">
                                        Address
                                    </p>
                                    <div style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">
                                        <p
                                            class="font-poppins font-medium 1xl:text-xl xxmd:text-xl lg:text-base sm:text-base xxsm:text-base leading-7 text-gray-200 pt-1">
                                            {{ $content['address'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex pt-8 pb-5 flex-wrap 1xl:flex-nowrap">
                                <div
                                    class="mr-5 bg-primary rounded-full h-10 overflow-hidden flex justify-center items-center">
                                    <i class="fa-regular fa-hashtag w-10 text-center align-middle text-white"></i>
                                </div>
                                <div>
                                    <p
                                        class="font-poppins font-normal 1xl:text-xl xxmd:text-xl lg:text-base sm:text-base xxsm:text-base leading-7 text-gray-200">
                                        Social</p>
                                    <div class="flex mt-2">
                                        <a href="https://www.facebook.com/" target="blank" class="link-one">
                                            <i class="fa-brands fa-facebook fa-2x  mr-5 z-20 text-primary"></i>
                                        </a>
                                        <a href="https://www.twitter.com/" target="blank" class="link-one">
                                            <i class="fa-brands fa-twitter fa-2x  mr-5 z-20 text-primary"></i>
                                        </a>
                                        <a href="https://www.instagram.com/" target="blank" class="link-one">
                                            <i class="fa-brands fa-instagram fa-2x  mr-5 z-20 text-primary"></i>
                                        </a>
                                        <a href="https://www.pinterest.com/" target="blank" class="link-one">
                                            <i class="fa fa-pinterest-p text-primary fa-2x " aria-hidden="true"></i>
                                        </a>
                                        <style>
                                            .fa-2x {
                                                font-size: 24px;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-md p-4 mt-10">
                    <form action="" method="POST" class="php-email-form" id="contactForm">
                        @csrf

                        <p class="font-poppins font-semibold text-2xl leading-8 text-black">Contact Us</p>

                        <div class="grid md:grid-cols-2 sm:grid-cols-1 mt-5 gap-5">
                            <div>
                                <label class="font-poppins font-medium text-base text-black pb-2">
                                    First Name
                                </label>
                                <input type="text" name="name" required
                                    class="border border-gray-light w-full p-3 rounded-md" placeholder="Your Name">
                            </div>

                            <div>
                                <label class="font-poppins font-medium text-base text-black pb-2">
                                    Your Email
                                </label>
                                <input type="email" name="email" required
                                    class="border border-gray-light w-full p-3 rounded-md" placeholder="Your Email">
                            </div>
                        </div>

                        <div class="mt-5">
                            <label class="font-poppins font-medium text-base text-black pb-2">
                                Subject
                            </label>
                            <input type="text" name="subject" required
                                class="border border-gray-light w-full p-3 rounded-md" placeholder="Subject Message">
                        </div>

                        <div class="mt-5">
                            <textarea name="message" rows="4" required class="border border-gray-light w-full p-3 rounded-md"
                                placeholder="Describe your message..."></textarea>
                        </div>

                        <div class="mt-5 flex justify-end">
                            <button type="submit" class="bg-primary text-white px-5 py-2 rounded-md">
                                Send Message
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
       <!-- CSRF Token for AJAX -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- SweetAlert2 CSS & JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Contact & Map Script -->
<script>
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 37.4275, lng: 122.1697 },
        zoom: 13
    });
    let marker = new google.maps.Marker({
        position: { lat: 37.4275, lng: 122.1697 },
        map: map
    });
}

$(document).ready(function() {
    // CSRF token setup
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Contact form AJAX
   $('#contactForm').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        url: "{{ route('contact.store') }}",
        method: "POST",
        data: $(this).serialize(),
        success: function(response) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: response.message,
                confirmButtonText: 'OK'
            });
            $('#contactForm')[0].reset();
        },
        error: function(xhr) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong! Please try again.',
                confirmButtonText: 'OK'
            });
            console.log(xhr.responseText);
        }
    });
});

});
</script>

<!-- Google Maps API -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>



        <script async defer src="https://maps.googleapis.com/maps/api/js?key=&amp;callback=initMap"></script>
    @endsection
</x-layouts.frontend>
