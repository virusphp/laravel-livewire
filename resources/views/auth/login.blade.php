<x-guest-layout>
    <section class="h-full gradient-form bg-gray-200 md:h-screen">
        <div class="container py-12 px-6 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="xl:w-10/12">
                    <div class="block bg-white shadow-lg rounded-lg">
                        <div class="lg:flex lg:flex-wrap g-0">
                            <div class="lg:w-6/12 px-4 md:px-0">
                                <div class="md:p-12 md:mx-6">
                                    <div class="text-center">
                                        <img class="mx-auto w-48" src="{{ asset('images/logo/logo.png') }}"
                                            alt="logo" />
                                        <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">RSUD Kraton Pekalongan</h4>
                                    </div>
                                    <x-jet-validation-errors class="mb-4" />

                                    @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <p class="mb-4">Silahkan login akun anda.</p>
                                        <div class="mb-4">
                                            <x-jet-label for="email"
                                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
                                                value="{{ __('Email') }}" />
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                    </svg>
                                                </div>
                                                <x-jet-input id="email"
                                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    type="email" name="email" :value="old('email')" placeholder="Email"
                                                    required autofocus />
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="password"
                                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Password</label>
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                                    </svg>
                                                </div>
                                                <x-jet-input id="password"
                                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    type="password" name="password" :value="old('password')"
                                                    placeholder="Password" required autofocus />

                                                <button type="button"
                                                    class="text-white absolute right-2.5 bottom-2 bg-blue-400 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                                                    <svg id="password-show" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    <svg id="password-hide" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6 hidden">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                                    </svg>
                                                </button>

                                            </div>
                                        </div>
                                        <div class="text-center pt-1 mb-12 pb-1">
                                            <button
                                                class="inline-block px-6 py-4 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                                type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                                style="
                            background: linear-gradient(
                              to right,
                              #65eee7,
                              #47e4f0,
                              #19d4d4,
                              #05cebd
                            );
                          ">
                                                Log in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                                style="
                    background: linear-gradient(to right, #24e7ee, #36d3d8, #36ddc7, #459eb4);
                  ">
                                <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                                    <h4 class="text-xl font-semibold mb-6">RSUD Kraton Pekalongan</h4>
                                    <p class="text-sm">
                                        Rumah sakit yang berdisi sejak tahun xxxx yang terletak di Tengah kota
                                        pekalongan dan merupakan rumah sakit milik pemerintah daerah kabupaten
                                        pekalongan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
        <script>
            $(document).ready(function() {
                $("#password-show").click(function() {
                    $("#password").attr("type", "text");
                    $(this).parent().find("#password-show").addClass("hidden");
                    $(this).parent().find("#password-hide").removeClass("hidden");
                });

                $("#password-hide").click(function() {
                    $("#password").attr("type", "password");
                    $(this).parent().find("#password-hide").addClass("hidden");
                    $(this).parent().find("#password-show").removeClass("hidden");
                });
            });
        </script>
        @endpush

</x-guest-layout>