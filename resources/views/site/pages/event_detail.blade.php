<x-layouts.frontend>
    @section('content')
        <main class="flex-grow">

            <div class="pb-20 bg-scroll min-h-screen"
                style="background-image: asset('https://eventrights.saasmonks.in/images/events.png')">

                <div class="mr-4 flex justify-end z-30">
                    <a type="button" href="#"
                        class="scroll-up-button bg-primary rounded-full p-4 fixed z-20  2xl:mt-[49%] xl:mt-[59%] xlg:mt-[68%] lg:mt-[75%] xxmd:mt-[83%] md:mt-[90%]
                            xmd:mt-[90%] sm:mt-[117%] msm:mt-[125%] xsm:mt-[160%]">
                        <img src="https://eventrights.saasmonks.in/images/downarrow.png" alt="" class="w-3 h-3 z-20">
                    </a>
                </div>
                <div
                    class="mt-5 3xl:mx-52 2xl:mx-28 1xl:mx-28 xl:mx-36 xlg:mx-32 lg:mx-36 xxmd:mx-24 xmd:mx-32 md:mx-28 sm:mx-20 msm:mx-16 xsm:mx-10 xxsm:mx-5 z-10 relative">
                    <div
                        class="flex sm:space-x-0 msm:space-x-0 xxsm:space-x-0 lg:space-x-3 xlg:space-x-5 xxmd:flex-row xmd:flex-col xxsm:flex-col">
                        <div class="xxmd:w-2/3 xmd:w-full xxsm:w-full">
                            <div>
                                <img src="{{ asset('uploads/events/' . $eventuser->image) }}"
                                    class="w-full h-96 object-cover" id="eventimage" alt="not found">
                            </div>
                            <div class="mt-8 pb-5 bg-white shadow-lg rounded-md">
                                <div
                                    class="flex justify-between p-4 lg:flex-wrap sm:flex-wrap msm:flex-wrap xxsm:flex-wrap">
                                    <div class="">
                                        <p class="font-poppins font-semibold text-3xl leading-9 text-black">
                                            {{ $eventuser->name }}</p>
                                    </div>
                                    <a href="{{ $eventuser->organizer_url }}">
                                        <div class="flex msm:flex-wrap xxsm:flex-wrap mt-4 mb-4 lx3:mt-0 lx3:mb-0 px-4">
                                            <div class="">
                                                {{-- {{ dd($eventuser->user->image) }} --}}
                                                {{-- @dd('jkhj') --}}

                                                <img src="{{ asset('uploads/user/images/' . $eventuser->user->image) }}"
                                                    class="w-10 h-10 bg-cover object-cover" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-poppins font-normal text-xs leading-4 text-gray-100">
                                                    Organized by:{{ $eventuser->user->name }}</p>
                                                <p class="font-poppins font-normal text-base leading-6 text-gray">
                                                    {{ $eventuser->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-4">
                                    <div
                                        class="pt-4 flex space-x-6 md:flex-wrap sm:flex-wrap xxsm:flex-wrap xxsm:space-x-3 md:space-x-6">
                                        <img src="https://eventrights.saasmonks.in/images/calender-icon.png" alt=""
                                            class="bg-success-light rounded-md p-2  max-w-9 max-h-9">
                                        <div class="flex space-x-2 xsm:ml-10 xsm:mr-5">
                                            <p class="font-bold text-black">
                                                {{ \Carbon\Carbon::parse($eventuser->start_date)->format('d') }}</p>
                                            <p class="text-gray-200">
                                                {{ \Carbon\Carbon::parse($eventuser->start_date)->format('M Y') }}</p>
                                            <p class="text-gray-200">
                                                {{ \Carbon\Carbon::parse($eventuser->start_date)->format('h:i A') }}
                                            </p>
                                        </div>
                                        <div
                                            class="font-poppins font-semibold sm:text-2xl leading-8 text-gray-200 pt-2 xxsm:text-sm">
                                            To</div>
                                        <div class="flex space-x-2">
                                            <p class="font-bold text-black">
                                                {{ \Carbon\Carbon::parse($eventuser->end_date)->format('d') }}</p>
                                            <p class="text-gray-200">
                                                {{ \Carbon\Carbon::parse($eventuser->end_date)->format('M Y') }}</p>
                                            <p class="text-gray-200">
                                                {{ \Carbon\Carbon::parse($eventuser->end_date)->format('h:i A') }}</p>
                                        </div>
                                    </div>
                                    <div class="pt-4 flex space-x-6 md:flex-nowrap sm:flex-wrap">
                                        <img src="https://eventrights.saasmonks.in/images/location-icon.png" alt=""
                                            class="p-2 w-auto h-10 rounded-md bg-blue-light max-w-9 max-h-9">
                                        <p
                                            class="font-poppins font-normal sm:text-lg leading-7 text-gray lg:mt-1.5 xxsm:mt-0 xxsm:text-sm">
                                            {{ $eventuser->location ?? 'Online Event' }}
                                        </p>
                                    </div>
                                    <div class="pt-4 flex space-x-6 sm:flex-wrap xxsm:flex-wrap">
                                        <img src="{{ asset('uploads/users/' . $eventuser->user->image) }}" alt=""
                                            class="p-2 rounded-md bg-warning-light max-w-9 max-h-9">
                                        <p class="font-poppins font-normal text-lg leading-7 text-gray">
                                            {{ $eventuser->people ?? 0 }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 bg-white shadow-lg rounded-md">
                                <div class="p-4">
                                    <p class="font-poppins font-semibold text-2xl leading-8 text-black">About Event</p>
                                    <p class="font-poppins font-normal text-lg leading-7 text-gray pt-5 mb-5">
                                    </p>
                                    <div style="text-align: justify;">
                                        <font color="#000000" face="Open Sans, Arial, sans-serif">{!! $eventuser->description !!}
                                        </font>
                                    </div>
                                    <div style="text-align: justify;">
                                        <font color="#000000" face="Open Sans, Arial, sans-serif"><br></font>
                                    </div>
                                    <p></p>
                                    <div class="flex flex-wrap mt-5">
                                        <a href="route('site.events')">
                                            <div
                                                class="mt-2 mr-3 px-3 py-2 text-success bg-success-light rounded-md font-poppins font-normal text-base leading-6">
                                                Party</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxmd:w-1/3 xmd:w-full xxsm:w-full mt-5">
                            <div class="p-4 bg-white shadow-lg rounded-md">
                                <p class="font-poppins font-semibold text-2xl leading-8 text-black pb-3">Image Gallery
                                </p>
                                <div
                                    class="grid lg:grid-cols-2 xxmd:grid-cols-1 xmd:grid-cols-2 sm:grid-cols-2 msm:grid-cols-2 xxsm:grid-cols-1 sm:mt-3 sm:gap-3">

                                    @foreach ($images as $image)
                                        <div class="hover:cursor-pointer" onclick="imagegallery('{{ $image }}')">
                                            <img src="{{ asset('uploads/events/' . $image) }}"
                                                class="imageGallery rounded-md object-cover bg-cover" alt="Event Image">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="p-4 bg-white shadow-lg rounded-md xlg:mt-10 lg:mt-20">
                                <p class="font-poppins font-semibold text-2xl leading-8 text-black pb-3">Location
                                </p>
                                <div id="map" class="mt-5" style="width:100%;height:400px;"><img
                                        src="https://eventrights.saasmonks.in/frontend/images/map-placeholder.png"
                                        class="w-full h-96 object-cover" alt="not found"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4 mt-10 w-full" id="tickets">

                        <div class="flex justify-between">
                            <p class="font-poppins font-semibold text-2xl leading-9 text-black">Tickets</p>
                        </div>
                        <div
                            class="grid xl:grid-cols-4 xlg:grid-cols-3 xxmd:grid-cols-2 sm:grid-cols-2 msm:grid-cols-1 xxsm:grid-cols-1 pt-5 gap-5">
                            <div class="mx-auto w-full">
                                <div class="p-5">
                                    <img src="{{ asset('uploads/events/' . ($images[0] ?? 'default.png')) }}">
                                    <h6 class="font-poopins text-xl leading-9 text-black mt-2 w-full">
                                        Tickets not available for this event!
                                    </h6>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4 mt-10 w-full">
                        <div class="flex">
                            <p class="font-poppins font-semibold text-2xl leading-7 text-black">Reviews</p>&nbsp;
                            <p class="font-poppins font-medium text-base leading-8 text-black">(0)</p>
                        </div>

                        <p class="font-poppins font-normal text-base leading-6 text-gray my-5">No reviews available.</p>

                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4 mt-10 w-full">
                        <p class="font-poppins font-semibold text-2xl leading-8 text-black">Frequently Asked Questions</p>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">1. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">2. Sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">3. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">4. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">5. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">6. Culpa qui officia deserunt
                                mollit anim id est laborum?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">7. Curabitur pretium tincidunt
                                lacus?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">8. Vivamus vestibulum nulla
                                nec ante?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">9. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">10. Sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">11. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">12. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">13. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">14. Culpa qui officia deserunt
                                mollit anim id est laborum?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">15. Curabitur pretium
                                tincidunt lacus?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="my-8">
                            <p class="font-poppins font-medium text-lg leading-6 text-black">16. Vivamus vestibulum nulla
                                nec ante?</p>
                            <p class="font-poppins font-normal text-base leading-6 text-gray ml-5">Sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco.</p>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4 mt-10 w-full">
                        <p class="font-poppins font-semibold text-2xl leading-8 text-black">Report Event</p>
                        <form id="reportEventForm" method="POST" action="{{ route('report.event') }}">
                            @csrf
                            <div class="">
                                <div class="grid md:grid-cols-2 sm:grid-cols-1 xxsm:grid-cols-1 mt-5 gap-3">
                                    <div>
                                        <label for="name"
                                            class="font-poppins font-normal text-lg leading-7 text-gray-100 pb-2">Name</label>
                                        <input type="text" name="name"
                                            class="focus:outline-none text-base leading-4 font-poppins font-normal text-gray-100 block p-3 rounded-md z-20 border border-gray-light w-full"
                                            placeholder="Name *">
                                    </div>
                                    <div>
                                        <label for="email"
                                            class="font-poppins font-normal text-lg leading-7 text-gray-100 pb-2">Email
                                            address</label>
                                        <input type="email" name="email"
                                            class="focus:outline-none text-base leading-4 font-poppins font-normal text-gray-100 block p-3 rounded-md z-20 border border-gray-light w-full"
                                            placeholder="Email *">
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 sm:grid-cols-1 xxsm:grid-cols-1 mt-5 gap-3">
                                    <div class="w-full">
                                        <label for="report_reason"
                                            class="font-poppins font-normal text-lg leading-7 text-gray-100 pb-2">Report
                                            Reason</label>
                                        <select id="report_reason" name="reason"
                                            class="w-full focus:outline-none text-base leading-4 font-poppins font-normal text-gray-100 block p-3 rounded-md z-20 border border-gray-light">
                                            <option selected disabled>Select Reason</option>
                                            <option value="Canceled Event">Canceled Event</option>
                                            <option value="Copyright or Trademark Infringement">Copyright or Trademark
                                                Infringement</option>
                                            <option value="Fraudulent or Unauthorized Event">Fraudulent or Unauthorized
                                                Event</option>
                                            <option value="Offensive or Illegal Event">Offensive or Illegal Event</option>
                                            <option value="Spam">Spam</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="w-full mt-5">
                                    <textarea name="message" rows="4" required
                                        class="block p-2.5 w-full focus:outline-none text-base leading-4 font-poppins font-normal text-gray-100 border border-gray-light rounded-md"
                                        placeholder="Describe your message..."></textarea>
                                </div>

                                {{-- <input type="hidden" name="event_id" value="{{ $eventDetail->id }}"> --}}

                                <div class="mt-5 flex justify-end">
                                    <button type="submit"
                                        class="bg-primary text-white font-poppins font-medium text-lg leading-7 px-5 py-2 rounded-md">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div id="myModal" class="modal" style="display: none;">
                        <span class="close cursor" onclick="closeModal()">×</span>
                        <div class="modal-content">
                            <div class="mySlides" id="allSlide">
                                <img src="" id="eventGalleryImg" class="centered-image">
                            </div>
                        </div>
                        <a class="prev" onclick="minusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                </div>
            </div>
            <script>
                function initMap() {
                    if ('40.7127753' == '' || '-74.0059728' == '' || '' == '' || '' == null) {
                        document.getElementById('map').innerHTML =
                            '<img src="https://eventrights.saasmonks.in/frontend/images/map-placeholder.png" class="w-full h-96 object-cover" alt="not found">';
                    } else {
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: parseFloat('40.7127753'),
                                lng: parseFloat('-74.0059728')
                            },
                            zoom: 13
                        });
                        let marker = new google.maps.Marker({
                            position: {
                                lat: parseFloat('40.7127753'),
                                lng: parseFloat('-74.0059728')
                            },
                            map: map
                        });
                    }
                }
                $('#reportEventForm').on('submit', function(e) {
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('report.event') }}",
                        data: $(this).serialize(),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message
                            });
                            $('#reportEventForm')[0].reset();
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON?.errors;
                            let errorMsg = '';
                            if (errors) {
                                for (const key in errors) {
                                    errorMsg += errors[key] + '\n';
                                }
                            }
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: errorMsg || 'Something went wrong!'
                            });
                        }
                    });
                });
            </script>

            <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=&amp;loading=async&amp;callback=initMap">
            </script>
        </main>
    @endsection
</x-layouts.frontend>
