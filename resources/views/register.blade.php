<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS --}}
    <link href="{{ asset('frontend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="{{ asset('frontend/assets/images/upload/63f4c15738e28.png') }}" rel="icon" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    {{-- JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

    <style>
        :root {
            --primary_color: #723ac6;
            --light_primary_color: #723ac61a;
            --profile_primary_color: #723ac652;
            --middle_light_primary_color: #723ac685;
        }

        .bg-primary {
            background-color: var(--primary_color);
        }

        .bg-primary-dark {
            background-color: var(--profile_primary_color);
        }

        .navbar-nav>.active>a {
            color: var(--primary_color);
        }

        .text-primary {
            color: var(--primary_color);
        }

        .border-primary {
            border-color: var(--primary_color);
        }

        input[type="radio"]:checked {
            background-color: var(--primary_color) !important;
            color: var(--primary_color) !important;
        }
    </style>
</head>

<body>
    <div class="flex justify-center mt-16">
        <div
            class="bg-white shadow-2xl rounded-md p-5 mt-10 1xl:w-[40%] xl:w-[45%] lg:w-[45%] xmd:w-[55%] md:w-[65%] sm:w-[75%] xxsm:w-full">
            <div class="flex justify-center mt-5">
                <img src="{{ asset('frontend/assets/images/upload/645e53bbf24a8.png') }}" alt=""
                    class="h-20 w-auto object-cover">
            </div>

            <p class="font-poppins font-bold text-3xl leading-9 text-black text-center pt-6">
                Create an account
            </p>

            {{-- Laravel Form --}}
            <form action="{{ route('register') }}" method="POST">
                <input type="hidden" name="admin_dashboard" value="0">

                @csrf

                <div class="pt-12">
                    <div
                        class="flex sm:space-x-7 justify-center 1xl:mx-28 xl:mx-20 lg:mx-10 xmd:mx-10 sm:mx-10 msm:mx-10 xxsm:space-y-5 msm:space-y-0 msm:space-x-5 xsm:space-x-0 xxsm:space-x-0 xxsm:mx-10.0 xxsm:flex-wrap xsm:flex-wrap msm:flex-nowrap">
                        <label for="default-radio-1" class="w-full">
                            <div
                                class="border border-gray-light py-3.5 px-5 rounded-lg text-gray-100 w-full font-normal font-poppins text-base leading-6 flex">
                                <input id="default-radio-1" type="radio" value="user" checked name="user_type"
                                    class="user h-5 w-5 mr-2 border border-gray-light hover:border-gray-light focus:outline-none">
                                User
                            </div>
                        </label>
                        <label for="default-radio-2" class="w-full">
                            <div
                                class="border border-gray-light py-3.5 px-5 rounded-lg text-gray-100 w-full font-normal font-poppins text-base leading-6 flex">
                                <input id="default-radio-2" type="radio" value="organizer" name="user_type"
                                    class="org w-5 h-5 mr-2 border border-gray-light hover:border-gray-light focus:outline-none">
                                Organizer
                            </div>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5 sm:grid-cols-2 msm:grid-cols-2 xxsm:grid-cols-1">
                    {{-- First Name --}}
                    <div class="pt-5">
                        <label for="first_name" class="font-poppins font-medium text-base leading-6 text-black">First
                            Name</label>
                        <input type="text" name="first_name" required
                            class="w-full text-sm font-poppins font-normal text-black block p-3 z-20 rounded-lg border border-gray-light focus:outline-none"
                            placeholder="First Name">
                    </div>

                    {{-- Last Name --}}
                    <div class="pt-5">
                        <label for="last_name" class="font-poppins font-medium text-base leading-6 text-black">Last
                            Name</label>
                        <input type="text" name="last_name" required
                            class="w-full text-sm font-poppins font-normal text-black block p-3 z-20 rounded-lg border border-gray-light focus:outline-none"
                            placeholder="Last Name">
                    </div>

                    {{-- Contact Number --}}
                    <div class="">
                        <label for="number" class="font-poppins font-medium text-base leading-6 text-black">Contact
                            Number</label>
                        <div class="flex space-x-3">
                            <div class="w-[35%]">
                                <select id="countries" name="Countrycode"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                    <option value="" disabled selected>Select Country</option>
                                    {{-- Laravel: loop countries from controller --}}
                                    @foreach ($countries as $country)
                                        <option value="{{ $country['code'] }}">{{ $country['name'] }}
                                            (+{{ $country['code'] }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-[100%]">
                                <input type="number" name="phone"
                                    class="w-full text-sm font-poppins font-normal text-black block p-3 z-20 rounded-md border border-gray-light focus:outline-none"
                                    placeholder="Number">
                            </div>
                        </div>
                    </div>

                    {{-- Organization Name --}}
                    <div class="orginput hidden">
                        <label for="organization_name"
                            class="font-poppins font-medium text-base leading-6 text-black">Organization Name</label>
                        <input type="text" name="organization_name"
                            class="w-full text-sm font-poppins font-normal text-black block p-3 z-20 rounded-lg border border-gray-light focus:outline-none"
                            placeholder="Organization Name">
                    </div>

                    {{-- Email --}}
                    <div class="">
                        <label for="email" class="font-poppins font-medium text-base leading-6 text-black">Email
                            Address</label>
                        <input type="email" name="email" required
                            class="w-full text-sm font-poppins font-normal text-black block p-3 z-20 rounded-lg border border-gray-light focus:outline-none"
                            placeholder="Email Address">
                    </div>

                    {{-- Password --}}
                    <div class="">
                        <label for="password"
                            class="font-poppins font-medium text-base leading-6 text-black">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" required
                                class="w-full focus:outline-none text-sm font-poppins font-normal text-black block p-3 z-30 rounded-lg border border-gray-light"
                                placeholder="Password">
                            <span class="absolute right-2.5 bottom-2.5 text-xl font-poppins font-medium text-gray px-2">
                                <i class="fa-regular fa-eye text-primary" id="togglePassword"></i>
                            </span>
                        </div>
                    </div>
                    <div class="">
                        <label for="password_confirmation"
                            class="font-poppins font-medium text-base leading-6 text-black">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                class="w-full focus:outline-none text-sm font-poppins font-normal text-black block p-3 z-30 rounded-lg border border-gray-light"
                                placeholder="Confirm Password">
                            <span
                                class="absolute right-2.5 bottom-2.5 text-xl font-poppins font-medium text-gray px-2">
                                <i class="fa-regular fa-eye text-primary" id="togglePasswordConfirmation"></i>
                            </span>
                        </div>
                    </div>

                </div>

                {{-- Submit --}}
                <div class="pt-7">
                    <button
                        class="font-poppins text-white bg-primary leading-4 w-full text-sm font-medium py-4 rounded-lg focus:outline-none">Create</button>
                </div>
            </form>

            <div class="pt-6 flex justify-center">
                <h1 class="font-poppins font-medium text-base leading-5 pt-4 text-left text-gray">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary text-medium text-base">Login</a>
                </h1>
            </div>
        </div>
    </div>

    {{-- JS Scripts --}}
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            const togglePassword = document.querySelector("#togglePassword");
            togglePassword.addEventListener("click", function(e) {
                const password = document.querySelector("#password");
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);
                this.classList.toggle("fa-eye-slash");
            });
        });

        $('.user').on('click', function() {
            $('.orginput').addClass('hidden')
        });
        $('.org').on('click', function() {
            $('.orginput').removeClass('hidden')
        });

        $('#countries').select2();
    </script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>
