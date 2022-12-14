<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            @if (Auth::user()->isBoss())
                {{-- <div></div> --}}

                {{-- <nav class="flex justify-between bg-white px-6 py-4">

                    <div class="logo">
                        Bank messagrie
                    </div>

                    <div class="links flex justify-between space-x-4">
                        <p class="text-sm text-gray-700  inline-block px-4 "><a href="/">Home</a></p>
                        <p class="text-sm text-gray-700  inline-block px-4">About</p>
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/societies">See all Societies</a></p>
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/bank/messagrie">Bank Messagrie</a></p>
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/bank/reports">See all reports</a></p>




                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3  border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>

                </nav> --}}










                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main class="min-h-screen font-sans leading-normal tracking-normal mt-12">
                    {{-- {{ Auth::user()->bank->name}} --}}
                    {{ $slot }}
                </main>



                <footer class="w-full bg-blue-500 py-4 text-white">
                    <div class="content w-3/4 m-auto flex justify-between">
                        <p>made by Groupe 8</p>
                        <p>+213 34 56 78</p>
                    </div>
                </footer>


            @else
                <nav class="flex justify-between bg-white px-6 py-4">

                    <div class="logo">
                        Anonymous Alerts
                    </div>

                    <div class="links flex justify-between space-x-4">
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/">Home</a></p>
                        <p class="text-sm text-gray-700  inline-block px-4">About</p>
                        {{-- <p class="text-sm text-gray-700  inline-block px-4"><a href="/societies">See all Societies</a></p> --}}
                        @if (Auth::user()->society())
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/societies/{{Auth::user()->society()->id;}}">My Societies ({{Auth::user()->society()->name;}})</a></p>
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/society/{{Auth::user()->society()->id;}}/employees">Add an employee</a></p>

                        @else
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/societies/{{Auth::user()->mysociety->id;}}">My Society</a></p>

                        @endif
                        @if (Auth::user()->society())
                        <p class="text-sm text-gray-700  inline-block px-4"><a href="/messagrie">Messagrie</a></p>
                        @endif



                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3  border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>

                </nav>


                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>

                    <div class="container border rounded-md text-center w-64 m-auto mt-4 ml-4">
                        <p class="text-center text-blue-500 font-medium">
                            <a href="/user/{{Auth::user()->id}}/newpassword">Click here to Change your password</a>
                        </p>
                    </div>

                    {{ $slot }}
                </main>


            @endif

        </div>
    </body>

    @livewireScripts

    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>



</html>
