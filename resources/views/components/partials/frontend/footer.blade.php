<div>
    {{ $slot }}
    <footer class="mt-auto">
        <div class="footer bg-primary py-3 bottom-0 m-0">
            <div
                class="flex xxsm:flex-wrap xsm:flex-wrap msm:flex-wrap 3xl:mx-52 2xl:mx-28 1xl:mx-28 xl:mx-36 xlg:mx-32 lg:mx-36 xxmd:mx-24 xmd:mx-32 sm:mx-20 msm:mx-16 xsm:mx-10 xxsm:mx-5 justify-between  md:mx-28 py-3 pt-4">
                <div class="flex justify-between items-center sm:items-left w-auto">
                    <ul
                        class="flex lg:flex-row xmd:flex-row md:flex-row md:text-xs md:-space-x-3 sm:flex-row msm:flex-row xsm:flex-col xxsm:flex-col msm:space-x-3 sm:space-x-2 lg:space-x-10 md:mt-0">
                        <li class="mt-2">
                            <a href="{{ route('site.home') }}"
                                class="md:px-3 capitalize font-poppins font-normal text-base leading-6 text-white">Home</a>
                        </li>
                        <li class="mt-2">
                            <a href="{{ route('admin.dashboard') }}"
                                class="md:px-3 capitalize font-poppins font-normal text-base leading-6 text-white">Organizer</a>
                        </li>
                        <li class="mt-2">
                            <a href="{{ route('site.privacy') }}"
                                class="md:px-3 capitalize font-poppins font-normal text-base leading-6 text-white flex">Privacy
                                Policy

                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="{{ route('site.contact') }}"
                                class="md:px-3 capitalize font-poppins font-normal text-base leading-6 text-white">Contact</a>
                        </li>
                        <li class="mt-2">
                            <a href="{{ route('site.FAQ') }}"
                                class="md:px-3 capitalize font-poppins font-normal text-base leading-6 text-white">FAQ&#039;s</a>
                        </li>
                    </ul>
                </div>
                <div class="sm:px-4 xmd:px-0 flex">
                    <div class="relative inline-block text-left">
                        <a type="button" href="javascript:void(0);"
                            class="px-3 py-2 text-white bg-primary-dark text-center font-poppins font-normal text-base leading-6 rounded-md flex language">
                            Language<img src="https://eventrights.saasmonks.in/images/downwhite.png"
                                class="w-3 h-2 mx-2 mt-2 language" alt="">
                        </a>

                        <div
                            class="languageClass hidden rigin-top-left absolute left-0 w-44 rounded-md shadow-2xl z-10 bottom-12">
                            <div class="rounded-md bg-white shadow-lg p-3">
                                <div class="">
                                    <div class="p-2 flex items-left justify-left">
                                        <a type="button"
                                            href="https://eventrights.saasmonks.in/change-language/English"
                                            class="hover:text-primary capitalize p-2 hover:bg-primary-light text-black w-full text-center font-poppins font-normal text-base leading-6 rounded-md flex language">
                                            <img src="{{ asset('frontend/assets/images/upload/English.png') }}"
                                                class="w-5 h-5 mx-2 language" alt="">English</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
