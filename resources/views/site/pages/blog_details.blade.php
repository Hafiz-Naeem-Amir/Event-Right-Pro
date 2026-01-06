<x-layouts.frontend>
@section('content')
    <div class="min-h-screen flex flex-col">
        <main class="flex-grow">
            <style>
                .blog-content ul,
                .blog-content ol {
                    list-style: auto !important;
                }
            </style>

            @if ($blogs)
                <div class="pb-20 bg-scroll min-h-screen"
                    style="background-image: url('{{ asset('frontend/assets/images/events.png') }}')">

                    <div class="mr-4 flex justify-end z-30">
                        <a type="button" href="#"
                            class="scroll-up-button bg-primary rounded-full p-4 fixed z-20
                            2xl:mt-[49%] xl:mt-[59%] xlg:mt-[68%] lg:mt-[75%]
                            xxmd:mt-[83%] md:mt-[90%] xmd:mt-[90%] sm:mt-[117%]
                            msm:mt-[125%] xsm:mt-[160%]">
                            <img src="{{ asset('frontend/assets/images/downarrow.png') }}"
                                alt="" class="w-3 h-3 z-20">
                        </a>
                    </div>

                    <div
                        class="mt-5 3xl:mx-52 2xl:mx-28 1xl:mx-28 xl:mx-36 xlg:mx-32
                        lg:mx-36 xxmd:mx-24 xmd:mx-32 md:mx-28 sm:mx-20 msm:mx-16
                        xsm:mx-10 xxsm:mx-5 z-10 relative">

                        <div>

                                <img src="{{ asset('uploads/blogs/' . $blogs->image) }}" class="mx-auto h-[50%]" height="50p%" width="50%" alt="Events detals">
                        </div>

                        <div class="flex justify-center sm:space-x-0 md:space-x-6 msm:space-x-0
                            xxsm:space-x-0 xxmd:flex-row xmd:flex-col xxsm:flex-col">

                            <div class="xxmd:w-2/3 xmd:w-full xxsm:w-full">
                                <div class="mt-10 bg-white shadow-lg rounded-md p-6">
                                    <div class="p-4">

                                        <p class="font-poppins font-bold text-3xl leading-10 text-black">
                                            The Art of Hosting: {{ $blogs->title }}
                                        </p>

                                        <div class="flex pt-4">
                                            <p class="font-poppins font-medium text-base leading-6 text-gray-200">
                                                <strong>Party • </strong>

                                            </p>
                                        </div>

                                        <div class="p-6 font-poppins blog-content">
                                            <p>{{ $blogs->title }}</p>
                                        </div>

                                        <div class="flex flex-wrap">
                                            <a href="{{ route('site.blog') }}"
                                                class="mt-2 mr-3 px-3 py-2 text-success bg-success-light
                                                rounded-md font-poppins font-normal text-base leading-6">
                                                Party
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            @endif

        </main>
    </div>
@endsection
</x-layouts.frontend>
