<div>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <div class="bg-scroll" style="background-image: url('images/Eventright Background.png')}}')">
        <div class="w-full h-full m-auto ">
            <div id="default-carousel" class="relative" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="your-carousel relative w-full mx-auto overflow-hidden h-1/2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($events as $event)
                            <div class="h-1/2 relative">
                                <a href="{{ url('event/' . $event->id . '/' . $event->slug) }}">
                                    <div class="h-1/2 relative">
                                        <img src="{{ asset('frontend/assets/images/upload/' . $event->image) }}"
                                            class="object-cover h-[600px] w-full mx-auto xxsm:max-msm:h-full"
                                            alt="{{ $event->name }}">
                                        <h1
                                            class="font-poppins font-medium leading-6 text-center absolute inset-0 flex items-center justify-center text-5xl text-white drop-shadow-[1px_1px_1px_rgba(0,0,0,0.5)]">
                                            {{ $event->name }}</h1>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="h-1/2 relative">
                        <a href="https://eventrights.saasmonks.in/event/7/history-of-cinema">
                            <div class="h-1/2 relative">
                                <img src="{{ asset('frontend/assets/images/upload/641aa3d0328a5.jpg') }}"
                                    class="object-cover h-[600px] w-full mx-auto xxsm:max-msm:h-full" alt="Image 1">
                                <h1
                                    class="font-poppins font-medium leading-6 text-center absolute inset-0 flex items-center justify-center text-5xl text-white drop-shadow-[1px_1px_1px_rgba(0,0,0,0.5)]">
                                    Origin of Cinema</h1>
                            </div>
                        </a>
                    </div>
                    <div class="h-1/2 relative">
                        <a href="https://eventrights.saasmonks.in/event/4/dance-party">
                            <div class="h-1/2 relative">
                                <img src="{{ asset('frontend/assets/images/upload/641aa353a30cc.jpg') }}"
                                    class="object-cover h-[600px] w-full mx-auto xxsm:max-msm:h-full" alt="Image 1">
                                <h1
                                    class="font-poppins font-medium leading-6 text-center absolute inset-0 flex items-center justify-center text-5xl text-white drop-shadow-[1px_1px_1px_rgba(0,0,0,0.5)]">
                                    Musicverse Madness</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Custom privious/next button -->
                <button type="button"
                    class="hidden absolute hs-carousel-prev left-2 top-1/2 md:max-xxmd:top-1/3 transform -translate-y-1/2 bg-primary text-white rounded-full w-10 h-10 md:flex justify-center items-center hover:bg-gray-600">
                    <i class="fas fa-chevron-left opacity-100"></i>
                </button>
                <button type="button"
                    class="hidden absolute hs-carousel-next right-2 top-1/2 md:max-xxmd:top-1/3 transform -translate-y-1/2 bg-primary text-white rounded-full w-10 h-10 md:flex justify-center items-center hover:bg-gray-600">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <!-- Carousel wrapper end -->

                <div>
                    <div
                        class="xxmd:absolute xmd:max-lg:top-[20%] z-30 3xl:top-1/2 2xl:top-1/2 2xl:mt-2 3xl:mx-52 2xl:mx-60 1xl:top-1/2 1xl:mt-0 1xl:mx-36 xl:top-[60%] xl:mt-32 xl:mx-36 xlg:mt-5
                      xlg:mx-32 lg:top-[90%] lg:mx-36 xxmd:top-[0%] xxmd:mx-24 xmd:top-12 xmd:mx-32 md:top-80 md:mx-28 sm:top-96 sm:flex-wrap sm:mx-20 msm:flex-wrap msm:mx-16 msm:top-5 xsm:flex-wrap xsm:mx-10 xxsm:flex-wrap xxsm:top-0 xxsm:mx-5
                      3xl:w-[74%] 1xl:w-[81%] xl:w-[82%] xlg:w-[77%] lg:w-[70%] xxmd:w-[80%] xmd:w-[70%] md:w-[70%] sm:w-[70%] msm:w-[70%] xsm:w-[80%] xxsm:w-[80%]">
                        <div
                            class="xlg:ml-[7%] xxmd:max-lg:mt-[50%] xxsm:ml-[0%] bg-white rounded-lg flex p-6 justify-between lg:mt-0 md:mt-[5rem] xlg:mt-8 3xl:flex-nowrap 1xl:flex-nowrap xxmd:flex-nowrap md:flex-wrap sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap">
                            <div
                                class=" xmd:w-1/2 md:w-full sm:w-full msm:w-full xsm:w-full xxsm:w-full xmd:mx-0 xmd:py-3 xxmd:py-0 xxmd:mx-5 sm:py-3 msm:py-3 xsm:py-3 xxsm:py-3 md:mx-0 md:py-3 sm:mx-0 msm:mx-0 xsm:mx-0 xxsm:mx-0">
                                <div class="flex">
                                    <label for="category"
                                        class="font-poppins font-medium text-lg leading-4 text-black">Category</label>
                                </div>
                                <div class="pt-3">
                                    <form method="post" action="https://eventrights.saasmonks.in/all-events">
                                        <input type="hidden" name="_token"
                                            value="oRGp5peMR93FC4Hks54bh4wNw2khx6aZeLGt3xbd"> <select id="category"
                                            name="category" class="select2 z-20 w-full">
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="">
                                                All</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="13">
                                                Food Fest</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="11">
                                                Football</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="9">
                                                Movies</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="8">
                                                Health</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="7">
                                                Travel</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="6">
                                                Events</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="5">
                                                Kids</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="4">
                                                Singing</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="3">
                                                Gaming</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="2">
                                                At Night</option>
                                            <option
                                                class="text-black font-poppins hover:text-primary hover:bg-primary-light p-2"
                                                value="1">
                                                Party</option>
                                        </select>
                                </div>
                            </div>
                            <div class="xmd:w-1/2 md:w-full sm:w-full msm:w-full xsm:w-full xxsm:w-full">
                                <div class="flex">
                                    <label for="event"
                                        class="font-poppins font-medium text-lg leading-4 text-black">Event
                                        Type</label>
                                </div>
                                <div class="pt-3 ">
                                    <select id="event" name="type" class="select2 z-20 w-full">
                                        <option class="font-poppins font-normal text-sm text-black leading-6" selected
                                            value="">
                                            All</option>
                                        <option class="font-poppins font-normal text-sm text-black leading-6"
                                            value="online">
                                            Online</option>
                                        <option class="font-poppins font-normal text-sm text-black leading-6"
                                            value="offline">
                                            Venue</option>
                                    </select>
                                </div>
                            </div>
                            <div
                                class="xmd:w-1/2 md:w-full sm:w-full msm:w-full xsm:w-full xxsm:w-full xmd:mx-0 xmd:py-0 xxmd:py-0 xxmd:mx-5 sm:py-3 msm:py-3 xsm:py-3 xxsm:py-3 md:mx-0 md:py-3 sm:mx-0 msm:mx-0 xsm:mx-0 xxsm:mx-0">
                                <div class="flex">
                                    <label for="duration"
                                        class="font-poppins font-medium text-lg leading-4 text-black">Duration</label>
                                </div>
                                <div class="pt-3">
                                    <select id="duration" name="duration"
                                        class="select2 z-20 w-full border border-gray-300">
                                        <option class="font-poppins font-normal text-sm text-black leading-6 " selected
                                            value="">
                                            All</option>
                                        <option class="font-poppins font-normal text-sm text-black leading-6"
                                            value="Today">
                                            Today</option>
                                        <option class="font-poppins font-normal text-sm text-black leading-6"
                                            value="Tomorrow">
                                            Tomorrow</option>
                                        <option class="font-poppins font-normal text-sm text-black leading-6"
                                            value="ThisWeek">
                                            This week</option>
                                        <option class="font-poppins font-normal text-sm text-black leading-6"
                                            value="date">
                                            Choose Date</option>
                                    </select>
                                </div>
                            </div>

                            <div
                                class="xmd:w-1/2 md:w-full sm:w-full msm:w-full xsm:w-full xxsm:w-full xmd:mx-0 xmd:py-0 xxmd:py-0 xxmd:mx-5 sm:py-3 msm:py-3 xsm:py-3 xxsm:py-3 md:mx-0 md:py-3 sm:mx-0 msm:mx-0 xsm:mx-0 xxsm:mx-0 date-section hidden">
                                <div class="flex">
                                    <label for="date"
                                        class="font-poppins font-medium text-lg leading-4 text-black">Choose
                                        date</label>
                                </div>
                                <div class="pt-3">
                                    <input class=" border rounded form-control form-control-a date"
                                        placeholder="Choose date" name="date" id="date">
                                </div>
                            </div>
                            <div class="pt-2">
                                <button type="submit"
                                    class="px-10 py-3 text-white bg-primary text-center font-poppins font-normal text-base leading-6 rounded-md">
                                    Search
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


            <div class="mr-4 flex justify-end">
                <a type="button" href="#" class="back-to-top bg-primary rounded-full p-4 fixed z-20  mt-72">
                    <img src="{{ asset('frontend/assets/images/downarrow.png') }}" alt=""
                        class="w-3 h-3 z-20">
                </a>
            </div>

            <div
                class="xxmd:mt-20 3xl:mx-52 2xl:mx-28 1xl:mx-28 xl:mx-36 xlg:mx-32 lg:mx-36 xxmd:mx-24 xmd:mx-32 md:mx-28 sm:mx-20 msm:mx-16 xsm:mx-10 xxsm:mx-5  xxmd:pt-0  z-10 relative">

                <div
                    class="absolute bg-blue blur-3xl opacity-10 s:bg-opacity-10 3xl:w-[370px] 3xl:h-[370px] 2xl:w-[300px] 2xl:h-[300px] 1xl:w-[300px] xmd:w-[300px] xmd:h-[300px] sm:w-[200px] sm:h-[300px] xxsm:w-[300px] xxsm:h-[300px] rounded-full -mt-5 2xl:-ml-20 1xl:-ml-20 sm:ml-2 xxsm:-ml-7">
                </div>
                <div
                    class="flex sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap justify-between pt-20 mx-5 z-10">
                    <div class="">
                        <p
                            class="font-poppins font-semibold md:text-5xl xxsm:text-2xl xsm:text-2xl sm:text-2xl text-blue leading-1 ">
                            Latest Event</p>
                    </div>
                    <div class=" xxsm:max-sm:hidden">
                        <a type="button" href="https://eventrights.saasmonks.in/all-events"
                            class="px-10 py-3 text-blue border border-blue text-center font-poppins font-normal text-base leading-6 rounded-md flex">See
                            all
                            <img src="{{ asset('frontend/assets/images/right.png') }}" alt=""
                                class="w-3 h-3 mt-1.5 ml-2"></a>
                    </div>
                </div>
                <div
                    class=" grid gap-x-7 3xl:grid-cols-4 xl:grid-cols-4 xlg:grid-cols-2 xxmd:grid-cols-2 xxmd:gap-y-7 xmd:gap-y-7 xxsm:gap-y-7 sm:grid-cols-1 sm:gap-y-7 msm:grid-cols-1 xxsm:grid-cols-1 justify-between pt-10">
                    <div
                        class="shadow-lg p-5 rounded-lg bg-white hover:scale-110 transition-all duration-500 cursor-pointer">
                        <div class="relative overflow-hidden">
                            <a href="https://eventrights.saasmonks.in/event/5/virtual-live-karaoke">
                                <div class="relative capitalize">
                                    <img src="{{ asset('frontend/assets/images/upload/63e5eebbab2f9.jpg') }}"
                                        alt="" class="h-40 rounded-lg w-full object-cover bg-cover ">
                                </div>
                                <p class="font-popping font-semibold text-xl leading-8 pt-2 w-[90%] truncate">
                                    Virtual Live Karaoke
                                </p>
                                <p class="font-poppins  font-normal text-base leading-6 text-gray pt-1">
                                    10 Feb 2024 -
                                    29 Feb 2028
                                </p>
                            </a>
                            <div class="flex justify-between mt-7">
                                <a type="button" href="https://eventrights.saasmonks.in/event/5/virtual-live-karaoke"
                                    class=" text-primary text-center font-poppins font-medium text-base leading-7 flex">View
                                    Details
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="shadow-lg p-5 rounded-lg bg-white hover:scale-110 transition-all duration-500 cursor-pointer">
                        <div class="relative overflow-hidden">
                            <a href="https://eventrights.saasmonks.in/event/19/karaoke-jams">
                                <div class="relative capitalize">
                                    <img src="{{ asset('frontend/assets/images/upload/659638830a0af.jpg') }}"
                                        alt="" class="h-40 rounded-lg w-full object-cover bg-cover ">
                                    <span
                                        class="bg-danger text-center text-sm text-white py-1 px-2 rounded-bl-lg rounded-tr-lg absolute top-0 right-0">
                                        sold out
                                </div>
                                <p class="font-popping font-semibold text-xl leading-8 pt-2 w-[90%] truncate">
                                    Karaoke Jams
                                </p>
                                <p class="font-poppins  font-normal text-base leading-6 text-gray pt-1">
                                    04 Jan 2024 -
                                    31 Jan 2027
                                </p>
                            </a>
                            <div class="flex justify-between mt-7">
                                <a type="button" href="https://eventrights.saasmonks.in/event/19/karaoke-jams"
                                    class=" text-primary text-center font-poppins font-medium text-base leading-7 flex">View
                                    Details
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="shadow-lg p-5 rounded-lg bg-white hover:scale-110 transition-all duration-500 cursor-pointer">
                        <div class="relative overflow-hidden">
                            <a href="https://eventrights.saasmonks.in/event/13/book-fair">
                                <div class="relative capitalize">
                                    <img src="{{ asset('frontend/assets/images/upload/65963a0aa7484.jpg') }}"
                                        alt="" class="h-40 rounded-lg w-full object-cover bg-cover ">
                                </div>
                                <p class="font-popping font-semibold text-xl leading-8 pt-2 w-[90%] truncate">
                                    Book Fair
                                </p>
                                <p class="font-poppins  font-normal text-base leading-6 text-gray pt-1">
                                    18 Oct 2023 -
                                    31 Oct 2028
                                </p>
                            </a>
                            <div class="flex justify-between mt-7">
                                <a type="button" href="https://eventrights.saasmonks.in/event/13/book-fair"
                                    class=" text-primary text-center font-poppins font-medium text-base leading-7 flex">View
                                    Details
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="shadow-lg p-5 rounded-lg bg-white hover:scale-110 transition-all duration-500 cursor-pointer">
                        <div class="relative overflow-hidden">
                            <a href="https://eventrights.saasmonks.in/event/4/dance-party">
                                <div class="relative capitalize">
                                    <img src="{{ asset('frontend/assets/images/upload/63e5ed9879e3b.jpg') }}"
                                        alt="" class="h-40 rounded-lg w-full object-cover bg-cover ">
                                </div>
                                <p class="font-popping font-semibold text-xl leading-8 pt-2 w-[90%] truncate">
                                    Dance Party
                                </p>
                                <p class="font-poppins  font-normal text-base leading-6 text-gray pt-1">
                                    24 Jun 2023 -
                                    30 Jun 2028
                                </p>
                            </a>
                            <div class="flex justify-between mt-7">
                                <a type="button" href="https://eventrights.saasmonks.in/event/4/dance-party"
                                    class=" text-primary text-center font-poppins font-medium text-base leading-7 flex">View
                                    Details
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sm:hidden">
                        <a type="button" href="https://eventrights.saasmonks.in/all-events"
                            class="px-10 py-3 text-blue border border-blue text-center font-poppins font-normal text-base leading-6 rounded-md flex">See
                            all
                            <img src="{{ asset('frontend/assets/images/right.png') }}" alt=""
                                class="w-3 h-3 mt-1.5 ml-2"></a>
                    </div>
                </div>

                <div
                    class="absolute bg-success blur-3xl opacity-10 s:bg-opacity-10 3xl:w-[370px] 3xl:h-[370px] 2xl:w-[300px] 2xl:h-[300px] 1xl:w-[300px] xmd:w-[300px] xmd:h-[300px] sm:w-[200px] sm:h-[300px] xxsm:w-[300px] xxsm:h-[300px] rounded-full -mt-5 2xl:-ml-20 1xl:-ml-20 sm:ml-2 xxsm:-ml-7">
                </div>
                <div
                    class="flex sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap justify-between pt-20 mx-5 z-10">
                    <div class="">
                        <p
                            class="font-poppins font-semibold md:text-5xl xxsm:text-2xl xsm:text-2xl sm:text-2xl text-success leading-1 ">
                            Feature Categories</p>
                    </div>
                    <div class=" xxsm:max-sm:hidden">
                        <a type="button" href="https://eventrights.saasmonks.in/all-category"
                            class="px-10 py-3 text-success border border-success text-center font-poppins font-normal text-base leading-6 rounded-md flex">See
                            all
                            <img src="{{ asset('frontend/assets/images/right-success.png') }}" alt=""
                                class="w-3 h-3 mt-1.5 ml-2"></a>
                    </div>
                </div>
                <div
                    class="grid gap-x-7 3xl:grid-cols-4 xl:grid-cols-4 xlg:grid-cols-2 xxmd:grid-cols-2 xxmd:gap-y-7 sm:grid-cols-1 sm:gap-y-7 msm:grid-cols-1 xxsm:grid-cols-1 msm:gapy-7 xxsm:gap-y-7 justify-between pt-10 z-10 relative">
                    <div
                        class="shadow-lg bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                        <a href="https://eventrights.saasmonks.in/events-category/13/food-fest">
                            <img src="{{ asset('frontend/assets/images/upload/657c7c3130bf2.png') }}" alt=""
                                class="rounded-lg w-full h-40 bg-cover object-cover">
                            <a href="https://eventrights.saasmonks.in/events-category/13/food-fest">
                                <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">
                                    Food Fest
                                </p>
                            </a>
                        </a>
                    </div>
                    <div
                        class="shadow-lg bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                        <a href="https://eventrights.saasmonks.in/events-category/9/movies">
                            <img src="{{ asset('frontend/assets/images/upload/miguel-angel-hernandez-4Kmvlc1M9rU-unsplash.jpg') }}"
                                alt="" class="rounded-lg w-full h-40 bg-cover object-cover">
                            <a href="https://eventrights.saasmonks.in/events-category/9/movies">
                                <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">
                                    Movies
                                </p>
                            </a>
                        </a>
                    </div>
                    <div
                        class="shadow-lg bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                        <a href="https://eventrights.saasmonks.in/events-category/8/health">
                            <img src="{{ asset('frontend/assets/images/upload/486d7a9d7a9d7.jpg') }}" alt=""
                                class="rounded-lg w-full h-40 bg-cover object-cover">
                            <a href="https://eventrights.saasmonks.in/events-category/8/health">
                                <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">
                                    Health
                                </p>
                            </a>
                        </a>
                    </div>
                    <div class="sm:hidden">
                        <a type="button" href="https://eventrights.saasmonks.in/all-category"
                            class="px-10 py-3 text-success border border-success text-center font-poppins font-normal text-base leading-6 rounded-md flex">See
                            all
                            <img src="{{ asset('frontend/assets/images/right-success.png') }}" alt=""
                                class="w-3 h-3 mt-1.5 ml-2"></a>
                    </div>
                </div>


                <div
                    class="absolute bg-warning blur-3xl opacity-10 s:bg-opacity-10 3xl:w-[370px] 3xl:h-[370px] 2xl:w-[300px] 2xl:h-[300px] 1xl:w-[300px] xmd:w-[300px] xmd:h-[300px] sm:w-[200px] sm:h-[300px] xxsm:w-[300px] xxsm:h-[300px] rounded-full -mt-5 2xl:-ml-20 1xl:-ml-20 sm:ml-2 xxsm:-ml-7">
                </div>
                <div
                    class="flex sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap justify-between pt-20 mx-5 z-0">
                    <div>
                        <p
                            class="font-poppins font-semibold md:text-5xl xxsm:text-2xl xsm:text-2xl sm:text-2xl text-warning leading-10">
                            Latest Blogs</p>
                    </div>
                    <div class=" xxsm:max-sm:hidden">
                        <a type="button" href="https://eventrights.saasmonks.in/all-blogs"
                            class="px-10 py-3 text-warning border border-warning text-center font-poppins font-normal text-base leading-6 rounded-md flex">See
                            all
                            <img src="{{ asset('frontend/assets/images/right-warning.png') }}" alt=""
                                class="w-3 h-3 mt-1.5 ml-2"></a>
                    </div>
                </div>
                <div class="grid xl:grid-cols-2 gap-5 lg:grid-cols-1 xxsm:grid-cols-1 pb-5">
                    <div
                        class="flex 3xl:flex-row 2xl:flex-nowrap 1xl:flex-nowrap xl:flex-nowrap xlg:flex-wrap flex-wrap justify-between 3xl:pt-5 xl:pt-5 gap-x-5 xl:w-full xlg:w-full">
                        <div
                            class="w-full shadow-lg p-5 rounded-lg flex 3xl:flex-nowrap md:flex-nowrap sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap bg-white xlg:w-full xmd:w-full 3xl:mb-0 xl:mb-0 xlg:mb-5 xxsm:mb-5">
                            <div
                                class="relative 3xl:w-[60%] xl:w-[60%] xlg:w-[30%] xmd:w-[60%] xxmd:w-[20%]  sm:w-1/2">
                                <img src="{{ asset('frontend/assets/images/upload/adi-goldstein-Hli3R6LKibo-unsplash.jpg') }}"
                                    alt="" class="rounded-lg h-56 w-full ">
                            </div>
                            <div class="ml-4 3xl:w-full xl:w-full xlg:w-full xmd:w-full xxmd:w-[80%] sm:w-1/2">
                                <div class="flex justify-between">
                                    <button
                                        class="px-3 py-1 xxsm:max-md:mt-5 text-success bg-success-light rounded-full">Party</button>
                                    <p class="font-poppins font-medium text-base  leading-6 text-gray">
                                        21 Feb 2023 </p>
                                </div>
                                <p class="font-popping font-bold capitalize text-xl  leading-8 text-left pt-3">
                                    The Art of Hosting: Tips and Tricks for the Perfect Party</p>
                                <p class="font-popping font-normal text-base !leading-7 text-gray text-left">
                                    Hosting a party can be both exciting and challenging. From planning
                                    the guest list to choosing the right theme, decor, and menu, there
                                    are many aspect...
                                </p>
                                <a type="button"
                                    href="https://eventrights.saasmonks.in/blog-detail/8/the-art-of-hosting-tips-and-tricks-for-the-perfect-party"
                                    class="mt-5 text-primary font-poppins font-medium text-base leading-7 flex pt-1 justify-end">Read
                                    More
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex 3xl:flex-row 2xl:flex-nowrap 1xl:flex-nowrap xl:flex-nowrap xlg:flex-wrap flex-wrap justify-between 3xl:pt-5 xl:pt-5 gap-x-5 xl:w-full xlg:w-full">
                        <div
                            class="w-full shadow-lg p-5 rounded-lg flex 3xl:flex-nowrap md:flex-nowrap sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap bg-white xlg:w-full xmd:w-full 3xl:mb-0 xl:mb-0 xlg:mb-5 xxsm:mb-5">
                            <div
                                class="relative 3xl:w-[60%] xl:w-[60%] xlg:w-[30%] xmd:w-[60%] xxmd:w-[20%]  sm:w-1/2">
                                <img src="{{ asset('frontend/assets/images/upload/florian-olivo-Mf23RF8xArY-unsplash.jpg') }}"
                                    alt="" class="rounded-lg h-56 w-full ">
                            </div>
                            <div class="ml-4 3xl:w-full xl:w-full xlg:w-full xmd:w-full xxmd:w-[80%] sm:w-1/2">
                                <div class="flex justify-between">
                                    <button
                                        class="px-3 py-1 xxsm:max-md:mt-5 text-success bg-success-light rounded-full">Gaming</button>
                                    <p class="font-poppins font-medium text-base  leading-6 text-gray">
                                        21 Feb 2023 </p>
                                </div>
                                <p class="font-popping font-bold capitalize text-xl  leading-8 text-left pt-3">
                                    Level Up Your Gaming Skills: Strategies and Tips for Gamers of All
                                    Levels</p>
                                <p class="font-popping font-normal text-base !leading-7 text-gray text-left">
                                    Gaming has become a popular form of entertainment for people of all
                                    ages, from casual players to competitive gamers. Whether you are a
                                    beginner just s...
                                </p>
                                <a type="button"
                                    href="https://eventrights.saasmonks.in/blog-detail/7/level-up-your-gaming-skills-strategies-and-tips-for-gamers-of-all-levels"
                                    class="mt-5 text-primary font-poppins font-medium text-base leading-7 flex pt-1 justify-end">Read
                                    More
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex 3xl:flex-row 2xl:flex-nowrap 1xl:flex-nowrap xl:flex-nowrap xlg:flex-wrap flex-wrap justify-between 3xl:pt-5 xl:pt-5 gap-x-5 xl:w-full xlg:w-full">
                        <div
                            class="w-full shadow-lg p-5 rounded-lg flex 3xl:flex-nowrap md:flex-nowrap sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap bg-white xlg:w-full xmd:w-full 3xl:mb-0 xl:mb-0 xlg:mb-5 xxsm:mb-5">
                            <div
                                class="relative 3xl:w-[60%] xl:w-[60%] xlg:w-[30%] xmd:w-[60%] xxmd:w-[20%]  sm:w-1/2">
                                <img src="{{ asset('frontend/assets/images/upload/miguel-angel-hernandez-4Kmvlc1M9rU-unsplash.jpg') }}"
                                    alt="" class="rounded-lg h-56 w-full ">
                            </div>
                            <div class="ml-4 3xl:w-full xl:w-full xlg:w-full xmd:w-full xxmd:w-[80%] sm:w-1/2">
                                <div class="flex justify-between">
                                    <button
                                        class="px-3 py-1 xxsm:max-md:mt-5 text-success bg-success-light rounded-full">Movies</button>
                                    <p class="font-poppins font-medium text-base  leading-6 text-gray">
                                        21 Feb 2023 </p>
                                </div>
                                <p class="font-popping font-bold capitalize text-xl  leading-8 text-left pt-3">
                                    Live Event - From Script to Screen: The Art of Filmmaking</p>
                                <p class="font-popping font-normal text-base !leading-7 text-gray text-left">
                                    Filmmaking is a creative process that involves turning an idea or a
                                    script into a visual story on the screen. It is a complex and
                                    collaborative art fo...
                                </p>
                                <a type="button"
                                    href="https://eventrights.saasmonks.in/blog-detail/6/live-event-from-script-to-screen-the-art-of-filmmaking"
                                    class="mt-5 text-primary font-poppins font-medium text-base leading-7 flex pt-1 justify-end">Read
                                    More
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex 3xl:flex-row 2xl:flex-nowrap 1xl:flex-nowrap xl:flex-nowrap xlg:flex-wrap flex-wrap justify-between 3xl:pt-5 xl:pt-5 gap-x-5 xl:w-full xlg:w-full">
                        <div
                            class="w-full shadow-lg p-5 rounded-lg flex 3xl:flex-nowrap md:flex-nowrap sm:flex-wrap msm:flex-wrap xsm:flex-wrap xxsm:flex-wrap bg-white xlg:w-full xmd:w-full 3xl:mb-0 xl:mb-0 xlg:mb-5 xxsm:mb-5">
                            <div
                                class="relative 3xl:w-[60%] xl:w-[60%] xlg:w-[30%] xmd:w-[60%] xxmd:w-[20%]  sm:w-1/2">
                                <img src="{{ asset('frontend/assets/images/upload/priscilla-du-preez--mCXEsLd2sU-unsplash.jpg') }}"
                                    alt="" class="rounded-lg h-56 w-full ">
                            </div>
                            <div class="ml-4 3xl:w-full xl:w-full xlg:w-full xmd:w-full xxmd:w-[80%] sm:w-1/2">
                                <div class="flex justify-between">
                                    <button
                                        class="px-3 py-1 xxsm:max-md:mt-5 text-success bg-success-light rounded-full">Kids</button>
                                    <p class="font-poppins font-medium text-base  leading-6 text-gray">
                                        21 Feb 2023 </p>
                                </div>
                                <p class="font-popping font-bold capitalize text-xl  leading-8 text-left pt-3">
                                    Healthy Habits for Happy Kids: Tips for Promoting Physical and
                                    Mental Well-being</p>
                                <p class="font-popping font-normal text-base !leading-7 text-gray text-left">
                                    As parents, ensuring the health and happiness of our kids is a top
                                    priority. One key aspect of this is promoting healthy habits that
                                    contribute to the...
                                </p>
                                <a type="button"
                                    href="https://eventrights.saasmonks.in/blog-detail/5/healthy-habits-for-happy-kids-tips-for-promoting-physical-and-mental-well-being"
                                    class="mt-5 text-primary font-poppins font-medium text-base leading-7 flex pt-1 justify-end">Read
                                    More
                                    <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full bg-gradient-to-r from-gradient-bg1 to-gradient-bg2">
                    <div class="w-full bg-cover bg-no-repeat"
                        style="background-image: url({{ asset('frontend/assets/images/bg-img.png') }});height: 548px;">
                        <div id="success_msg"
                            class="w-full bg-[#4fd69c] text-white font-semibold text-center text-lg tracking-wide">
                        </div>
                        <div
                            class="xxxxl:pl-[300px] xxxxl:pr-[300px] xxxxl:pt-[116px] s:pl-[10px] s:pr-[10px] s:pt-[50px] xxl:pl-[100px] xxl:pr-[100px] xxxl:pr-[150px] xxxl:pl-[150px] p-10 ml-28">
                            <div class="xxxxl:w-[658px] lg:w-[700px] pt-20">
                                <h1
                                    class="text-dark-gray xxxxl:text-6xl mb-7 s:text-4xl font-poppins font-semibold md:text-5xl xxsm:text-2xl xsm:text-2xl sm:text-2xl leading-10">
                                    Book Your Favorite Events From Anywhere </h1>
                                <p class="font-poppins font-medium text-[#8896AB] text-base leading-8 mb-10">
                                    Mobile Apps are available for Android &amp; iOS both. <br>
                                    Please Download &amp; Start Booking Now!
                                </p>
                                <a href="https://codecanyon.net/item/user-app-for-eventright-pro-event-ticket-booking-system/46176963?s_rank=3"
                                    target="_blank"><button
                                        class="w-48 h-14 text-white font-poppins font-semibold text-lg rounded-[6px]"><img
                                            src="{{ asset('frontend/assets/images/AppStore.svg') }}"
                                            alt=""></button></a>
                                <a href="https://codecanyon.net/item/user-app-for-eventright-pro-event-ticket-booking-system/46176963?s_rank=3"
                                    target="_blank"><button
                                        class="w-48 h-14 text-white font-poppins font-semibold text-lg rounded-[6px]"><img
                                            src="{{ asset('frontend/assets/images/GooglePlay.svg') }}"
                                            alt=""></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sm:hidden">
                    <a type="button" href="https://eventrights.saasmonks.in/all-blogs"
                        class="px-10 py-3 text-warning border border-warning text-center font-poppins font-normal text-base leading-6 rounded-md flex">See
                        all
                        <img src="{{ asset('frontend/assets/images/right-warning.png') }}" alt=""
                            class="w-3 h-3 mt-1.5 ml-2"></a>
                </div>


                <div class="overflow-hidden mx-auto relative px-4 sm:px-6 lg:px-8 pb-[65px] xl:pb-24">
                    <h2 class="font-poppins font-bold text-[18px] text-primary tracking-wider text-center my-8">
                        Well-known Organizers On-board
                    </h2>
                    <div
                        class="[--gap:2rem] group relative flex overflow-hidden select-none [mask-image:linear-gradient(to_right,rgba(0,0,0,0)_0%,rgb(0,0,0)_calc(var(--gap)*2),rgb(0,0,0)_calc(100%-var(--gap)*2),rgba(0,0,0,0)_100%)]">
                        <ul
                            class="shrink-0 flex items-center justify-around min-w-full animate-infinite-scroll group-hover:[animation-play-state:paused]">
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/1.png') }}" alt="Brand 1"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/2.png') }}" alt="Brand 2"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/3.png') }}" alt="Brand 3"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/4.png') }}" alt="Brand 4"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/5.png') }}" alt="Brand 5"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/6.png') }}" alt="Brand 6"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/7.png') }}" alt="Brand 7"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/8.png') }}" alt="Brand 8"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                        </ul>
                        <ul
                            class="shrink-0 flex items-center justify-around min-w-full animate-infinite-scroll group-hover:[animation-play-state:paused]">
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/1.png') }}" alt="Brand 1"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/2.png') }}" alt="Brand 2"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/3.png') }}" alt="Brand 3"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/4.png') }}" alt="Brand 4"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/5.png') }}" alt="Brand 5"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/6.png') }}" alt="Brand 6"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/7.png') }}" alt="Brand 7"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                            <li class="flex items-center justify-center md:justify-start">
                                <a href="https://example.com"
                                    class="flex-none relative p-4 lg:px-6 before:content-[''] before:absolute before:inset-0 before:z-[-1] before:scale-90 before:rounded-full hocus:before:scale-100 before:transition-all hocus:before:bg-violet-50"
                                    target="_blank" rel="noopener">
                                    <img src="{{ asset('frontend/assets/images/brands/8.png') }}" alt="Brand 8"
                                        class="h-[160px] object-contain hover:scale-110 transition-all duration-500 cursor-pointer">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
