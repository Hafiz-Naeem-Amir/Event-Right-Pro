<x-layouts.frontend>
    @section('content')
        <div class="min-h-screen flex flex-col">
            <main class="flex-grow">
                <div class="pb-20 bg-scroll min-h-screen" style="background-image: url('images/events.png')">

                    <div class="mr-4 flex justify-end z-30">
                        <a type="button" href="#"
                            class="scroll-up-button bg-primary rounded-full p-4 fixed z-20 mt-[30%]">
                            <img src="{{ asset('site/images/downarrow.png') }}" alt="" class="w-3 h-3 z-20">
                        </a>
                    </div>
                    <div
                        class="mt-5 3xl:mx-52 2xl:mx-28 1xl:mx-28 xl:mx-36 xlg:mx-32 lg:mx-36 xxmd:mx-24 xmd:mx-32 md:mx-28 sm:mx-20 msm:mx-16 xsm:mx-10 xxsm:mx-5 z-10 relative">
                        <div
                            class="absolute bg-success blur-3xl opacity-10 s:bg-opacity-10 3xl:w-[370px] 3xl:h-[370px] 2xl:w-[300px] 2xl:h-[300px] 1xl:w-[300px] xmd:w-[300px] xmd:h-[300px] sm:w-[200px] sm:h-[300px] xxsm:w-[300px] xxsm:h-[300px] rounded-full -mt-5 2xl:-ml-20 1xl:-ml-20 sm:ml-2 xxsm:-ml-7">
                        </div>

                        <div class="flex justify-start pt-5 z-10">
                            <p
                                class="font-poppins font-semibold md:text-5xl xxsm:text-2xl xsm:text-2xl sm:text-2xl text-success leading-10 ">
                                Categories</p>
                        </div>
                        <div
                            class="grid gap-x-7 3xl:grid-cols-4 xl:grid-cols-4 xlg:grid-cols-2 xxmd:grid-cols-2 xxmd:gap-y-7 sm:grid-cols-1 sm:gap-y-7 msm:grid-cols-1 xxsm:grid-cols-1 msm:gapy-7 xxsm:gap-y-7 justify-between pt-10 z-10 relative">
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/657c7c3130bf2.png') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/13/Food%20Fest.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Food Fest</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/649ae69f85eb7.jpg') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/11/Football.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Football</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/miguel-angel-hernandez-4Kmvlc1M9rU-unsplash.jpg') }}"
                                    alt="" class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/9/Movies.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Movies</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/486d7a9d7a9d7.jpg') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/8/Health.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Health</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/fkludf864f86s7f.jpg') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/7/Travel.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Travel</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/63e364ccdc3e4.jfif') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/6/Events.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Events</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/63e3640fae231.jfif') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/5/Kids.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Kids</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/63e363b51b6cb.jpg') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/4/Singing.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Singing</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/63e36347c412f.jfif') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/3/Gaming.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Gaming</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/63e362ec606df.jfif') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/2/At%20Night.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">At Night</p>
                                </a>
                            </div>
                            <div
                                class="shadow-2xl bg-white p-5 rounded-lg hover:scale-110 transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('site/images/upload/63e36174668ea.jpg') }}" alt=""
                                    class="h-40 rounded-lg w-full object-cover">
                                <a href="{{ asset('site/events-category/1/Party.html') }}">
                                    <p class="font-popping font-semibold text-xl leading-8 text-center pt-3">Party</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        @endsection
</x-layouts.frontend>
