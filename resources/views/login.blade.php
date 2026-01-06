<x-layouts.frontend>
    @section('content')
    <div class="flex justify-center mt-24">
        <div
            class="bg-white shadow-2xl rounded-md p-5 mt-10 1xl:w-[28%] xl:w-[35%] lg:w-[40%] xmd:w-[50%] md:w-[60%] sm:w-[70%] xxsm:w-full">

            <!-- Logo -->
            <div class="flex justify-center mt-5">
                <img src="https://eventrights.saasmonks.in/images/upload/645e53bbf24a8.png"
                    alt="Logo" class="object-cover w-auto h-20">
            </div>

            <!-- Heading -->
            <p class="pt-6 text-3xl font-bold leading-9 text-center text-black font-poppins">
                Sign in to your account
            </p>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="pt-6">
                @csrf
                <div class="pt-5 flex sm:space-x-7 justify-center xxsm:space-y-5 msm:space-y-0 msm:space-x-5 xsm:space-x-0 xxsm:space-x-0 xxsm:mx-10.0 xxsm:flex-wrap xsm:flex-wrap msm:flex-nowrap">
                    <label class="w-full">
                        <div class="border border-gray-light py-3.5 px-5 rounded-lg text-gray-100 w-full font-normal font-poppins text-base leading-6 flex items-center space-x-2">
                            <input type="radio" value="user" name="type" checked class="w-5 h-5 mr-2 border border-gray-light focus:outline-none">
                            <span>User</span>
                        </div>
                    </label>
                    <label class="w-full">
                        <div class="border border-gray-light py-3.5 px-5 rounded-lg text-gray-100 w-full font-normal font-poppins text-base leading-6 flex items-center space-x-2">
                            <input type="radio" value="org" name="type" class="w-5 h-5 mr-2 border border-gray-light focus:outline-none">
                            <span>Organizer</span>
                        </div>
                    </label>
                </div>

                <!-- Email -->
                <div class="pt-5">
                    <label for="email" class="text-base font-medium leading-6 text-black font-poppins">Email</label>
                    <input type="email" name="email" id="email"
                        class="z-20 block w-full p-3 text-sm font-normal text-black border rounded-lg font-poppins border-gray-light focus:outline-none"
                        placeholder="Your Email" required value="{{ old('email') }}">
                </div>

                <!-- Password -->
                <div class="pt-5">
                    <label for="password" class="text-base font-medium leading-6 text-black font-poppins">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password"
                            class="z-30 block w-full p-3 text-sm font-normal text-black border rounded-lg focus:outline-none font-poppins border-gray-light"
                            placeholder="Password" required>
                        <span class="absolute right-2.5 bottom-2.5 text-xl font-poppins font-medium text-gray px-2">
                            <i class="fa-regular fa-eye text-primary" id="togglePassword"></i>
                        </span>
                    </div>
                </div>
               

                <!-- Remember & Forgot -->
                <div class="flex justify-between pt-4">
                    <div class="flex">
                        <input type="checkbox" value="true" name="remember" class="mr-2">
                        <label class="font-poppins font-medium text-xs leading-5 text-black pt-0.5">Remember me</label>
                    </div>
                    <div>
                        @if(Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs font-medium leading-5 font-poppins text-primary">Forgot your password?</a>
                        @endif
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-7">
                    <button type="submit"
                        class="w-full py-4 text-sm font-medium leading-4 text-white rounded-lg font-poppins bg-primary focus:outline-none">
                        Sign In
                    </button>
                </div>
            </form>

            <!-- Register & Admin Links -->
            <div class="flex justify-center pt-6">
                <h1 class="pt-4 text-base font-medium leading-5 text-left font-poppins text-gray">
                    Don’t have an account?
                    <a href="{{ route('register') }}" class="text-base text-primary text-medium">Create Account</a>
                </h1>
            </div>
            <a href="{{ url('admin/login') }}">
                <h1 class="pt-4 text-base font-medium leading-5 text-left font-poppins text-primary text-center">Admin Login</h1>
            </a>

        </div>
    </div>
    @endsection
</x-layouts.frontend>
