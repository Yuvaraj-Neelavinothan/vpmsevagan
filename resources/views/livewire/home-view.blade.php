<div class="antialiased bg-gray-50 dark:bg-gray-900">


    <main class="p-4 h-auto pt-20 mt-7">
        {{-- booking stepper --}}
        <ol
            class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    1
                </span>
                Book Our Services <span class="hidden sm:inline-flex sm:ms-2"></span>
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>
            </li>
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    2
                </span>
                Resolve the Problem
                <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 12 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                </svg>
            </li>
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    3
                </span>
                Pay after Service Satisfaction
            </li>
        </ol>
        {{-- welcome image --}}
        <div class="m-2">
            <figure
                class="relative max-w-sm md:max-w-md lg:max-w-lg transition-all duration-300 cursor-pointer filter mx-auto">
                <a href="#">
                    <img class="rounded-lg" src="{{ asset('images/welcomeimg.jpg') }}" alt="image description">
                </a>
                <figcaption class="absolute px-4 text-lg text-white bottom-6">
                    <p class="text-center font-semibold">Services Available in surrounding 10kms areas of Villupuram,
                        Vikkravandi, Tindivanam and
                        Gingee...</p>
                </figcaption>
            </figure>
        </div>
        {{-- welcome quotes --}}
        {{-- <div class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-4 z-10 relative">
            <a href="#"
                class="inline-flex justify-between items-center py-1 px-1 pe-4 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-sm font-medium">our service experts will be knocking on your door,At your
                    fingertips.</span>
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </a>
        </div> --}}




        {{-- House Keeping Service --}}
        <div class="flex items-center justify-between mb-1">
            <a href="{{ route('house_keeping') }}" class="mx-auto">
                <h4
                    class="title-1 font-bold  mx-auto text-blue-500 border-b-2 border-blue-300 rounded-[2rem] p-2 dark:text-white flex items-center">
                    House
                    Keeping Services<svg class="w-4 h-4 md:w-6 md:h-6 ms-2 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </h4>
            </a>
        </div>
        <div
            class="w-full p-3 bg-white border border-gray-200 rounded-lg shadow mb-3 dark:bg-gray-800 dark:border-gray-700">

            <div class="owl-carousel owl-theme">
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 text-center mx-auto whitespace-nowrap font-bold tracking-tight text-gray-700 dark:text-white">
                                Appliances</h6>

                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/appliances.jpg') }}"
                                alt="product image" />
                        </a>

                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 text-center mx-auto font-bold tracking-tight text-gray-700 dark:text-white">
                                Kitchen</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/kitchen.jpg') }}"
                                alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto whitespace-nowrap text-center font-bold tracking-tight text-gray-700 dark:text-white">
                                Kitchen Sink</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/kitchen_sink.jpeg') }}"
                                alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto font-bold text-center tracking-tight text-gray-700 dark:text-white">
                                Bathroom</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/bathroom.jpg') }}"
                                alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto font-bold text-center tracking-tight text-gray-700 dark:text-white">
                                Toilet</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/toilet.jpeg') }}"
                                alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto whitespace-nowrap text-center font-bold tracking-tight text-gray-700 dark:text-white">
                                Urine Basin</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/urine_basin.jpg') }}"
                                alt="product image" />
                        </a>
                        <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto font-bold text-center tracking-tight text-gray-700 dark:text-white">
                                Bathtub</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/bathtub.jpg') }}"
                                alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto whitespace-nowrap text-center font-bold tracking-tight text-gray-700 dark:text-white">
                                Water Tank</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/water_tank.jpg') }}"
                                alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 text-center mx-auto font-bold whitespace-nowrap tracking-tight text-gray-700 dark:text-white">
                                Wash Basin</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 rounded-[1rem]" src="{{ asset('images/wash_basin.jpeg') }}"
                                alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>

        </div>
        {{-- Pro Workers Service --}}
        <div class="flex items-center justify-between mb-1">
            <a href="{{ route('pro_worker') }}" class="mx-auto">
                <h4
                    class="title-1 font-bold  mx-auto text-blue-500 border-b-2 border-blue-300 rounded-[2rem] p-2 dark:text-white flex items-center">
                    Pro Worker Services<svg class="w-4 h-4 md:w-6 md:h-6 ms-2 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </h4>
            </a>
        </div>
        <div class="flex items-center justify-center bg-gray-100">
            <div
                class="w-full p-3 bg-white border border-gray-200 rounded-lg shadow mb-3 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="title-2 text-center mb-2 text-gray-600 font-bold dark:text-white">(Installation & Services)
                </h5>
                <div class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/proservices.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">"With a team
                            of experienced
                            professionals, we provide top-notch services in electrical work, plumbing, and AC
                            maintenance. Our skilled workers are dedicated to ensuring your complete satisfaction."</p>
                        <a href="#"
                            class="inline-flex mr-2 items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 rounded-lg">
                            More Services
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        {{-- <button type="button"
                            class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Book
                            Now</button> --}}
                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
        </div>
        <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div> --}}

        {{-- Water Wash Service --}}
        <div class="flex items-center justify-between mb-1">
            <a href="{{ route('water_wash') }}" class="mx-auto">
                <h4
                    class="title-1 font-bold  mx-auto text-blue-500 border-b-2 border-blue-300 rounded-[2rem] p-2 dark:text-white flex items-center">
                    Water Wash Services<svg class="w-4 h-4 md:w-6 md:h-6 ms-2 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </h4>
            </a>
        </div>
        <div
            class="w-full p-3 bg-white border border-gray-200 rounded-lg shadow mb-3 dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2 gap-2 mb-4">
                <div class="flex justify-center">
                    <div class="border-2 p-2 rounded-lg border-gray-300 dark:border-gray-600">
                        <h5 class="mb-0 title-2 text-center font-bold tracking-tight text-gray-600 dark:text-white">
                            Bike Water Service</h5>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('images/bikewash.jpeg') }}"
                                    alt="" />
                            </a>
                            <div class="p-2">
                                <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">"Give
                                    your bike the care it deserves with our top-notch water service. Our team of experts
                                    ensures your bike looks spotless and runs smoothly."
                                </p>
                                {{-- <div class="flex justify-between items-center">
                                    <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                        &#8377;599
                                    </span>
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                        Book Now
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border-2 p-2 rounded-lg border-gray-300 dark:border-gray-600">
                        <h5 class="mb-0 title-2 text-center font-bold tracking-tight text-gray-600 dark:text-white">
                            Car Water Service</h5>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('images/carwash.jpeg') }}" alt="" />
                            </a>
                            <div class="p-2">
                                <p class="mb-3 text-sm md:text-base md:font-normal text-gray-700 dark:text-gray-400">
                                    "Keep your car looking pristine with our professional car water service. We provide
                                    a comprehensive clean that leaves your vehicle sparkling inside and out."
                                </p>
                                {{-- <div class="flex justify-between items-center">
                                    <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                        &#8377;599
                                    </span>
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                        Book Now
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
        <div class="grid grid-cols-2 gap-4">
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
        </div> --}}
        {{-- Construction Services --}}
        <div class="flex items-center justify-between mb-1">
            <a href="{{ route('construction_work') }}" class="mx-auto">
                <h4
                    class="title-1 font-bold  mx-auto text-blue-500 border-b-2 border-blue-300 rounded-[2rem] p-2 dark:text-white flex items-center">
                    Construction Services<svg class="w-4 h-4 md:w-6 md:h-6 ms-2 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </h4>
            </a>
        </div>
        <div
            class="w-full p-3 bg-white border border-gray-200 rounded-lg shadow mb-3 dark:bg-gray-800 dark:border-gray-700">

            <div class="owl-carousel owl-theme">
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 text-center mx-auto whitespace-nowrap font-bold tracking-tight text-gray-700 dark:text-white">
                                Bricks</h6>

                        </div>
                        <a href="#">
                            <img class="p-2 w-full h-24 md:h-48 rounded-[1rem]"
                                src="{{ asset('images/bricks.jpg') }}" alt="product image" />
                        </a>

                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 text-center mx-auto font-bold tracking-tight text-gray-700 dark:text-white">
                                Hollow Bricks</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 w-full h-24 md:h-48 rounded-[1rem]"
                                src="{{ asset('images/hollowbricks.jpeg') }}" alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto whitespace-nowrap text-center font-bold tracking-tight text-gray-700 dark:text-white">
                                M-Sand</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 w-full h-24 md:h-48 rounded-[1rem]"
                                src="{{ asset('images/m-sand.jpg') }}" alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto font-bold text-center tracking-tight text-gray-700 dark:text-white">
                                P-Sand</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 w-full h-24 md:h-48 object-cover rounded-[1rem]"
                                src="{{ asset('images/p-sand.jpg') }}" alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item mx-1">
                    <div
                        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between space-x-2 flex-wrap">
                            <h6
                                class="title-2 mx-auto font-bold text-center tracking-tight text-gray-700 dark:text-white">
                                Jalli</h6>
                        </div>
                        <a href="#">
                            <img class="p-2 w-full h-24 md:h-48 rounded-[1rem]"
                                src="{{ asset('images/jalli.jpeg') }}" alt="product image" />
                        </a>
                        {{-- <div class="p-2">
                            <div class="flex items-center justify-between space-x-2 flex-wrap">
                                <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                    &#8377;599
                                </span>
                                <button type="button"
                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                    Book Now
                                </button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>
        </div>
        {{-- Social proofs --}}
        <div class="flex items-center justify-between mb-1">
            <h6 class="title-2 font-bold  mx-auto text-gray-400 dark:text-white">Looking Forward To</h6>
        </div>
        <div class=" dark:border-gray-600 mb-4">
            <section class="border shadow rounded-lg border-gray-200 bg-white dark:bg-gray-900">
                <div class="max-w-screen-xl px-4 py-4 mx-auto text-center lg:py-8 lg:px-6">
                    <dl class="grid max-w-screen-md gap-4 mx-auto sm:grid-cols-3 dark:text-white">
                        <div class="flex flex-col items-center justify-center bg-gray-200 rounded-lg">
                            <dt class="mb-2 text-3xl md:text-4xl text-gray-700 font-extrabold">10K+</dt>
                            <dd class="text-gray-500 dark:text-gray-400 mb-2">Happy Customers</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center bg-gray-200 rounded-lg">
                            <dt class="mb-2 text-3xl md:text-4xl text-gray-700 font-extrabold">1K+</dt>
                            <dd class="text-gray-500 dark:text-gray-400 mb-2">Pro Workers</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center bg-gray-200 rounded-lg">
                            <dt class="mb-2 text-3xl md:text-4xl text-gray-700 font-extrabold">100+</dt>
                            <dd class="text-gray-500 dark:text-gray-400 mb-2">Services</dd>
                        </div>
                    </dl>
                </div>
            </section>
        </div>
        {{-- Other Services --}}
        <div class="flex items-center justify-between mb-1">
            <a href="{{ route('other_services') }}" class="mx-auto">
                <h4 class="title-1 font-bold  mx-auto text-gray-400 dark:text-white">Other Services</h4>
            </a>
        </div>
        <div
            class="w-full p-3 bg-white border border-gray-200 rounded-lg shadow mb-3 dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-2 gap-2 mb-4">
                <div class="flex justify-center">
                    <div class="border-2 p-2 rounded-lg border-gray-300 dark:border-gray-600">
                        <h5 class="mb-0 title-2 text-center font-bold tracking-tight text-gray-600 dark:text-white">
                            Spetic Tank Cleaning</h5>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('images/septictank.png') }}"
                                    alt="" />
                            </a>
                            <div class="p-2">
                                <p class="mb-3 text-sm md:text-base font-normal text-gray-700 dark:text-gray-400">"Our
                                    team provides a deep and effective clean, ensuring your septic tank remains
                                    environmentally safe."
                                </p>
                                {{-- <div class="flex justify-between items-center">
                                    <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                        &#8377;599
                                    </span>
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                        Book Now
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="border-2 p-2 rounded-lg border-gray-300 dark:border-gray-600">
                        <h5 class="mb-0 title-2 text-center font-bold tracking-tight text-gray-600 dark:text-white">
                            Scrap Collecting</h5>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('images/scrap.jpeg') }}" alt="" />
                            </a>
                            <div class="p-2">
                                <p class="mb-3 text-sm md:text-base md:font-normal text-gray-700 dark:text-gray-400">
                                    "Turn your scrap into value with our scrap collecting services. We provide
                                    hassle-free collection and ensuring your space is clean and clutter-free."
                                </p>
                                {{-- <div class="flex justify-between items-center">
                                    <span class="font-semibold text-gray-900 dark:text-white text-xs md:text-base">
                                        &#8377;599
                                    </span>
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-xs md:text-sm px-2 md:px-2 py-1 text-center">
                                        Book Now
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                items: 5,
                loop: true,
                center: true,
                autoplay: true,
                responsiveClass: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                dots: true,
                responsive: {
                    0: { // From 0px to 479px
                        items: 2
                    },
                    480: { // From 480px to 767px
                        items: 3
                    },
                    768: { // From 768px and above
                        items: 4
                    }
                }

            });
        });
    </script>
@endpush
