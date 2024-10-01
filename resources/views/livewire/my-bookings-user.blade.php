<div>
    {{-- The Master doesn't talk, he acts. --}}
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-8">
        <h2 class="mt-10 text-2xl text-center font-semibold text-gray-700 dark:text-white sm:text-2xl">My Bookings</h2>
        <div class="mx-auto max-w-screen-lg mt-4 px-4 2xl:px-0">
            <div class="rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:p-8">
                <h3 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Latest orders</h3>
                @forelse ($my_booking_services as $my_service)
                    <div
                        class="flex flex-wrap items-center gap-y-4 border-b border-gray-200 pb-4 dark:border-gray-700 md:pb-5">
                        <dl class="w-1/2 sm:w-48">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Order ID:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                <a href="#" class="hover:underline">#{{ $my_service->order_id }}</a>
                            </dd>
                        </dl>
                        <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Date:</dt>
                            <div class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                </svg>
                                <p class="text-sm font-medium text-gray-900 dark:text-gray-400">
                                    {{ \Carbon\Carbon::parse($my_service->created_at)->format('d M Y') }}</p>
                            </div>
                        </dl>
                        <dl class="w-1/2 sm:w-48">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">
                                {{ $my_service->service_category }}</dt>
                            <dd class=" text-base font-semibold text-gray-900 dark:text-white">
                                <div class="flex items-center gap-2 sm:justify-start">
                                    <p class="text-sm text-gray-900 dark:text-gray-400">{{ $my_service->service_name }}
                                    </p>
                                </div>
                            </dd>
                        </dl>

                        <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Price X Qty:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                &#8377;{{ number_format($my_service->price_per_unit, 0) }}{{ ' X ' }}{{ $my_service->quantity }}{{ ' = ' }}&#8377;{{ number_format($my_service->total_amount, 0) }}
                            </dd>
                        </dl>

                        <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Status:</dt>
                            @if ($my_service->booking_status == 'Ongoing')
                                <dd
                                    class="me-2 mt-1.5 inline-flex shrink-0 items-center rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-yellow-300">
                                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18.5 4h-13m13 16h-13M8 20v-3.333a2 2 0 0 1 .4-1.2L10 12.6a1 1 0 0 0 0-1.2L8.4 8.533a2 2 0 0 1-.4-1.2V4h8v3.333a2 2 0 0 1-.4 1.2L13.957 11.4a1 1 0 0 0 0 1.2l1.643 2.867a2 2 0 0 1 .4 1.2V20H8Z" />
                                    </svg>
                                    {{ $my_service->booking_status }}
                                </dd>
                            @elseif ($my_service->booking_status == 'Completed')
                                <dd
                                    class="mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">
                                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"></path>
                                    </svg>
                                    {{ $my_service->booking_status }}
                                </dd>
                            @else
                                <dd
                                    class="mt-1.5 inline-flex items-center rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">
                                    <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
                                    </svg>
                                    {{ $my_service->booking_status }}
                                </dd>
                            @endif
                        </dl>

                        <div class="w-full sm:flex sm:w-32 sm:items-center sm:justify-end sm:gap-4">
                            <button id="actionsMenuDropdownModal10{{ $my_service->id }}"
                                data-dropdown-toggle="dropdownOrderModal10{{ $my_service->id }}" type="button"
                                class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto">
                                Actions
                                <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 9-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="dropdownOrderModal10{{ $my_service->id }}"
                                class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                                <ul class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400"
                                    aria-labelledby="actionsMenuDropdown10">
                                    <li>
                                        <a wire:click="change_booking_status('{{ $my_service->id }}')"
                                            data-modal-target="deleteOrderModal{{ $my_service->id }}"
                                            data-modal-toggle="deleteOrderModal{{ $my_service->id }}"
                                            class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg class="me-1.5 h-4 w-4" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z">
                                                </path>
                                            </svg>
                                            Cancel order
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-600">There are currently no bookings.</p>
                @endforelse
                <div class="p-2">
                    {{ $my_booking_services->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
