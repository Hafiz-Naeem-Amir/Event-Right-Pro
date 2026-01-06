<x-layouts.frontend>
    @section('content')
        <div class="min-h-screen flex flex-col">
            <main class="flex-grow">

                <div class="pb-20 bg-scroll min-h-screen" style="background-image: url('images/events.png')">



                    <div
                        class="mt-5 3xl:mx-52 2xl:mx-28 1xl:mx-28 xl:mx-36 xlg:mx-32 lg:mx-36 xxmd:mx-24 xmd:mx-32 md:mx-28 sm:mx-20 msm:mx-16 xsm:mx-10 xxsm:mx-5 z-10 relative">
                        <div
                            class="absolute bg-blue blur-3xl opacity-10 s:bg-opacity-10 3xl:w-[370px] 3xl:h-[370px] 2xl:w-[300px] 2xl:h-[300px] 1xl:w-[300px] xmd:w-[300px] xmd:h-[300px] sm:w-[200px] sm:h-[300px] xxsm:w-[300px] xxsm:h-[300px] rounded-full -mt-5 2xl:-ml-20 1xl:-ml-20 sm:ml-2 xxsm:-ml-7">
                        </div>
                        <div class="flex justify-start pt-5 z-10">
                            <p
                                class="font-poppins font-semibold md:text-5xl xxsm:text-2xl xsm:text-2xl sm:text-2xl text-blue leading-10 ">
                                Events</p>&nbsp;&nbsp;
                            <p
                                class="font-poppins font-medium md:text-2xl xxsm:text-xl xsm:text-xl sm:text-xl text-blue leading-10 pt-3">
                                ({{ $categoryEvents->count() }}) </p>
                        </div>
                        <div class="mb-4 pt-4">
                            <ul class="flex flex-wrap -mb-px text-lg font-medium text-center events xmd:space-y-0 md:space-y-2 sm:space-y-2 xxsm:space-y-2"
                                id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2 ">
                                    <button
                                        class="inline-block p-4 px-6 py-3 rounded-md z-20 font-poppins shadow-md focus:outline-none relative"
                                        id="all_events" data-tabs-target="#events" type="button" role="tab"
                                        aria-controls="events" aria-selected="false">All Events</button>
                                </li>
                                <li class="mr-2">
                                    <button
                                        class="inline-block z-20 px-5 py-3 rounded-md font-poppins shadow-md focus:outline-none relative"
                                        id="online_events" data-tabs-target="#online" type="button" role="tab"
                                        aria-controls="online" aria-selected="false">Online
                                        Events({{ $online->count() }})</button>
                                </li>
                                <li class="mr-2">
                                    <button
                                        class="inline-block z-20 px-5 py-3 rounded-md font-poppins shadow-md focus:outline-none relative"
                                        id="venue_events" data-tabs-target="#venue" type="button" role="tab"
                                        aria-controls="venue" aria-selected="false">Venue
                                        Events({{ $offline->count() }})</button>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="hidden" id="events" role="tabpanel" aria-labelledby="all_events">
                                <div
                                    class="grid gap-x-7 1xl:grid-cols-4 xl:grid-cols-4 xlg:grid-cols-4 xmd:grid-cols-2 xxmd:gap-y-7 xmd:gap-y-7 xxsm:gap-y-7 sm:grid-cols-1 sm:gap-y-7 msm:grid-cols-1 xxsm:grid-cols-1 justify-between pt-10 z-30 relative">

                                    @foreach ($categoryEvents as $event)
                                        <div
                                            class="shadow-2xl p-5 rounded-lg bg-white hover:scale-110 transition-all duration-500 cursor-pointer">
                                            <a href="{{ url('event/' . $event->id . '/' . $event->slug) }}">
                                                <div class="relative capitalize">
                                                    <img src="{{ asset('uploads/events/' . $event->image) }}"
                                                        alt="{{ $event->title }}"
                                                        class="h-40 rounded-lg w-full object-cover bg-cover">
                                                    @if ($event->sold_out === 'sold')
                                                        <span
                                                            class="bg-danger text-center text-sm text-white py-1 px-2 rounded-bl-lg rounded-tr-lg absolute top-0 right-0">
                                                            Sold Out
                                                        </span>
                                                    @endif
                                                </div>
                                                <p
                                                    class="font-poppins font-semibold text-xl leading-8 pt-2 w-[90%] truncate">
                                                    {{ $event->name }}
                                                </p>
                                                <p class="font-poppins font-normal text-base leading-6 text-gray pt-1">
                                                    {{ \Carbon\Carbon::parse($event->start_time)->format('d M Y') }} -
                                                    {{ \Carbon\Carbon::parse($event->end_time)->format('d M Y') }}
                                                </p>

                                            </a>
                                            <div class="flex justify-between mt-7">
                                                <a href="{{ url('event-detail/' . $event['id'] ?? '') }}"
                                                    class="text-primary text-center font-poppins font-medium text-base leading-7 flex">
                                                    View Details <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="hidden" id="online" role="tabpanel" aria-labelledby="online_events">
                                <div
                                    class="grid gap-x-7 1xl:grid-cols-4 xl:grid-cols-4 xlg:grid-cols-4 xmd:grid-cols-2 xxmd:gap-y-7 xmd:gap-y-7 xxsm:gap-y-7 sm:grid-cols-1 sm:gap-y-7 msm:grid-cols-1 xxsm:grid-cols-1 justify-between pt-10 z-30 relative">

                                    @foreach ($online as $event)
                                        <div
                                            class="shadow-2xl p-5 rounded-lg bg-white hover:scale-110 transition-all duration-500 cursor-pointer">

                                            <a href="">
                                                <div class="relative">
                                                    <img src="{{ asset('uploads/events/' . $event->image) }}"
                                                        alt="{{ $event->name }}"
                                                        class="h-40 rounded-lg w-full object-cover bg-cover">

                                                    {{-- Sold Out Badge --}}
                                                    @if ($event->sold_out === 'sold')
                                                        <span
                                                            class="bg-danger text-center text-sm text-white py-1 px-2 rounded-bl-lg rounded-tr-lg absolute top-0 right-0">
                                                            Sold Out
                                                        </span>
                                                    @endif
                                                </div>

                                                <p
                                                    class="font-poppins font-semibold text-xl leading-8 pt-2 w-[90%] truncate">
                                                    {{ $event->name }}
                                                </p>
                                                <p class="font-poppins font-normal text-base leading-6 text-gray pt-1">
                                                    {{ \Carbon\Carbon::parse($event->start_time)->format('d M Y') }} -
                                                    {{ \Carbon\Carbon::parse($event->end_time)->format('d M Y') }}
                                                </p>
                                            </a>

                                            <div class="flex justify-between mt-7">
                                                <a href="{{ url('event/' . $event->id . '/' . $event->slug) }}"
                                                    class="text-primary text-center font-poppins font-medium text-base leading-7 flex">
                                                    View Details <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="hidden" id="venue" role="tabpanel" aria-labelledby="venue_events">
                                <div
                                    class="grid gap-x-7 1xl:grid-cols-4 xl:grid-cols-4 xlg:grid-cols-4 xmd:grid-cols-2 xxmd:gap-y-7 xmd:gap-y-7 xxsm:gap-y-7 sm:grid-cols-1 sm:gap-y-7 msm:grid-cols-1 xxsm:grid-cols-1 justify-between pt-10 z-30 relative">

                                    @foreach ($offline as $event)
                                        <div
                                            class="shadow-2xl p-5 rounded-lg bg-white hover:scale-110 transition-all duration-500 cursor-pointer">

                                            <a href="">
                                                <div class="relative">
                                                    <img src="{{ asset('uploads/events/' . $event->image) }}"
                                                        alt="{{ $event->name }}"
                                                        class="h-40 rounded-lg w-full object-cover bg-cover">

                                                    {{-- Sold Out Badge --}}
                                                    @if ($event->sold_out === 'sold')
                                                        <span
                                                            class="bg-danger text-center text-sm text-white py-1 px-2 rounded-bl-lg rounded-tr-lg absolute top-0 right-0">
                                                            Sold Out
                                                        </span>
                                                    @endif
                                                </div>

                                                <p
                                                    class="font-poppins font-semibold text-xl leading-8 pt-2 w-[90%] truncate">
                                                    {{ $event->name }}
                                                </p>
                                                <p class="font-poppins font-normal text-base leading-6 text-gray pt-1">
                                                    {{ \Carbon\Carbon::parse($event->start_time)->format('d M Y') }} -
                                                    {{ \Carbon\Carbon::parse($event->end_time)->format('d M Y') }}
                                                </p>
                                            </a>

                                            <div class="flex justify-between mt-7">
                                                <a href="{{ url('event/' . $event->id . '/' . $event->slug) }}"
                                                    class="text-primary text-center font-poppins font-medium text-base leading-7 flex">
                                                    View Details <i class="fa-solid fa-arrow-right w-3 h-3 mt-1.5 ml-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
</x-layouts.frontend>
