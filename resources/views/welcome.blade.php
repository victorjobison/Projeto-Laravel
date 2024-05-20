<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="bg-fundo">
        <div class=" font-sans w-full min-h-screen m-0">
            <div class="bg-white shadow">
                <div class="container mx-auto px-4">
                    <div class="flex items-center justify-between py-4">
                        <div>
                            <x-application-mark />
                        </div>

                        <div class="hidden sm:flex sm:items-center">
                        @if (Route::has('login'))
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-black/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-800 text-sm font-semibold hover:text-gray-600 mr-4">
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-gray-600 hover:border-gray-600">
                                        Sign up
                                    </a>
                                @endif
                            @endauth
                        @endif
                        </div>
                        <div class="sm:hidden cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12.9499909,17 C12.7183558,18.1411202 11.709479,19 10.5,19 C9.29052104,19 8.28164422,18.1411202 8.05000906,17 L3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L8.05000906,16 C8.28164422,14.8588798 9.29052104,14 10.5,14 C11.709479,14 12.7183558,14.8588798 12.9499909,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L12.9499909,17 Z M18.9499909,12 C18.7183558,13.1411202 17.709479,14 16.5,14 C15.290521,14 14.2816442,13.1411202 14.0500091,12 L3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L14.0500091,11 C14.2816442,9.85887984 15.290521,9 16.5,9 C17.709479,9 18.7183558,9.85887984 18.9499909,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L18.9499909,12 Z M9.94999094,7 C9.71835578,8.14112016 8.70947896,9 7.5,9 C6.29052104,9 5.28164422,8.14112016 5.05000906,7 L3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L5.05000906,6 C5.28164422,4.85887984 6.29052104,4 7.5,4 C8.70947896,4 9.71835578,4.85887984 9.94999094,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L9.94999094,7 Z M7.5,8 C8.32842712,8 9,7.32842712 9,6.5 C9,5.67157288 8.32842712,5 7.5,5 C6.67157288,5 6,5.67157288 6,6.5 C6,7.32842712 6.67157288,8 7.5,8 Z M16.5,13 C17.3284271,13 18,12.3284271 18,11.5 C18,10.6715729 17.3284271,10 16.5,10 C15.6715729,10 15,10.6715729 15,11.5 C15,12.3284271 15.6715729,13 16.5,13 Z M10.5,18 C11.3284271,18 12,17.3284271 12,16.5 C12,15.6715729 11.3284271,15 10.5,15 C9.67157288,15 9,15.6715729 9,16.5 C9,17.3284271 9.67157288,18 10.5,18 Z"/>
                        </svg>
                        </div>
                    </div>
                    
                    <div class="block sm:hidden bg-white border-t-2 py-2">
                        <div class="flex flex-col">
                
                        <div class="flex justify-between items-center border-t-2 pt-2">
                            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Sign in</a>
                            <a href="#" class="text-gray-800 text-sm font-semibold border px-4 py-1 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <section>
                <section class="sticky">

                <div class="max-w-lg px-4 sm:pt-24 pt-12 sm:pb-8 mx-auto text-left md:max-w-none md:text-center">
                    <h1 class="font-extrabold leading-10 tracking-tight text-left text-[#201515] text-center sm:leading-none text-5xl sm:text-9xl">
                    <span class="inline md:block">DMZ</span>
                    <span class="relative mt-2 bg-clip-text text-[#201515] md:inline-block" >Appointments.</span>
                    </h1>
                </div>


                <div class=" flex items-center justify-center" >
                    <div class='text-center '>
                        <a href="#details">
                        <div class="br">
                            <bottom type="button" class="flex items-center justify-center w-12 h-12 rounded-full bg-cool-gray-100 text-gray-800 animate-bounce hover:text-gray-900 hover:bg-cool-gray-50 transition duration-300 ease-in-out cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path fill="black" d="M16.293 9.293L12 13.586L7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"/></svg>
                            </bottom>
                        </div>
                        </a>
                    </div>
                </div>

                </section>
            </section>

            <div class="text-left" id="details">
                <div class='sm:px-28'>
                    <section class="relative flex items-center w-full">
                        <div class="relative items-center w-full px-5 mx-auto md:px-12 lg:px-16 max-w-7xl">
                            <div class="relative flex-col items-start m-auto align-middle">
                                <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                                    <div class="relative items-center gap-12 m-auto lg:inline-flex md:order-first">
                                        <div class="max-w-xl text-center lg:text-left">
                                            <div>

                                                <p class="text-3xl font-semibold tracking-tight text-[#201515] sm:text-5xl">
                                                Appointments Management Software
                                                </p>
                                                <p class="max-w-xl mt-4 text-base tracking-tight text-gray-600">
                                                Appointments Management Software is a digital tool that facilitates scheduling and tracking appointments. It allows clients to book and manage their own appointments online, sends automatic reminders to reduce no-shows, and integrates with popular calendars. Additionally, it maintains detailed client records and offers analytical reports to improve service efficiency.                                                </p>
                                            </div>
                                    
                                        </div>
                                    </div>
                                    <div class="order-first block w-full mt-12 aspect-square lg:mt-0">
                                        <div class=" flex-col items-center justify-center  px-6 ">
                                                                                
                                            <div class="grid w-full max-w-xl grid-cols-7 gap-6 mx-auto mt-6">
                                            <p class="flex items-center justify-center h-16 text-gray-800">Sa</p>
                                            <p class="flex items-center justify-center h-16 text-gray-800">Fr</p>
                                            <p class="flex items-center justify-center h-16 text-gray-800">Th</p>
                                            <p class="flex items-center justify-center h-16 text-gray-800">We</p>
                                            <p class="flex items-center justify-center h-16 text-gray-800">Tu</p>
                                            <p class="flex items-center justify-center h-16 text-gray-800">Mo</p>
                                            <p class="flex items-center justify-center h-16 text-gray-800">Su</p>
                                            </div>

                                            <div class="grid w-full max-w-xl grid-cols-7 gap-6 mx-auto">
                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">1</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">2</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">3</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">4</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">5</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">6</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">7</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">8</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">9</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">10</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">11</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">12</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">13</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">14</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">15</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">16</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">17</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">18</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">19</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">20</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">21</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">22</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">23</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">24</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">25</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">26</div>
                                            </div>

                                                    <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">27</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">28</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">29</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">30</div>
                                            </div>

                                            <div class="relative w-full h-12 cursor-pointer hover:scale-110 box bg-gradient after:absolute after:inset-0 after:z-10 after:h-full after:w-full after:transition-opacity after:duration-500 hover:bg-white">
                                                <div class="absolute inset-[3px] z-20 flex items-center justify-center text-black">31</div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <br>
        <div class="flex flex-col mx-3 rounded-lg">
           <div class="w-full draggable">
                <div class="container flex flex-col mx-auto">
                    <div class="flex flex-col items-center w-full my-19">
                        <span class="mb-">
                            <x-application-mark />
                        </span>
                        <div class="flex items-center">
                            <p class="text-base font-normal leading-7 text-center text-grey-700">
                                2024 Dmz Appointments. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
