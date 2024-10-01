<div>
    {{-- search,export,record per page and add service --}}
    <div class="flex flex-col space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
        {{-- search --}}
        <div class="flex items-center flex-1 space-x-4">
            <div class="flex justify-between items-center">
                <div class="p-2 dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <input type="text" wire:model.live="search"
                            class="block pt-2 text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
            {{-- filter --}}
            <div class="mt-6 gap-4 space-y-4 sm:flex sm:items-center sm:space-y-0 lg:mt-0 lg:justify-end">
                <div>
                    <label for="order-type"
                        class="sr-only mb-2 block text-sm font-medium text-gray-900 dark:text-white">Select order
                        type</label>
                    <select id="order-type"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 sm:w-[144px]">
                        <option selected>All orders</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="completed">Completed</option>
                        <option value="denied">Denied</option>
                    </select>
                </div>

                <span class="inline-block text-gray-500 dark:text-gray-400"> from </span>

                <div>
                    <label for="date"
                        class="sr-only mb-2 block text-sm font-medium text-gray-900 dark:text-white">Select
                        date</label>
                    <select id="date"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500 sm:w-[144px]">
                        <option selected>this week</option>
                        <option value="this month">this month</option>
                        <option value="last 3 months">the last 3 months</option>
                        <option value="lats 6 months">the last 6 months</option>
                        <option value="this year">this year</option>
                    </select>
                </div>
            </div>
            {{-- export --}}
            <button type="button"
                class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                </svg>
                Export
            </button>
            {{-- No of records per page --}}
            <div>
                <select wire:model.live="per_page"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm hover:bg-gray-100 rounded-lg focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 focus:border-gray-500 block p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                </select>
            </div>
        </div>
    </div>

    {{-- House keeping master Table --}}
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-screen-2xl">
            <div class="relative overflow-x-auto shadow-md dark:bg-gray-800 sm:rounded-lg">
                <table class="min-w-[1300px] text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="bg-gray-200">
                            <th scope="col" class="p-4">S.no</th>
                            <th scope="col" class="px-4 py-3">booking date</th>
                            <th scope="col" class="px-4 py-3">order id</th>
                            <th scope="col" class="px-4 py-3">category</th>
                            <th scope="col" class="px-4 py-3">code</th>
                            <th scope="col" class="px-4 py-3">service name</th>
                            <th scope="col" class="px-4 py-3">customer phone</th>
                            <th scope="col" class="px-4 py-3">address</th>
                            <th scope="col" class="px-4 py-3">price/unit</th>
                            <th scope="col" class="px-4 py-3">quantity</th>
                            <th scope="col" class="px-4 py-3">total(&#8377;)</th>
                            <th scope="col" class="px-4 py-3">service status</th>
                            <th scope="col" class="px-4 py-3">payment status</th>
                            <th scope="col" class="px-4 py-3">action</th>
                        </tr>
                    </thead>
                    @php
                        $page = $booking_services->currentPage();
                        $per_page = $booking_services->perPage();
                        $sno = ($page - 1) * $per_page + 1;
                    @endphp
                    <tbody>
                        @forelse ($booking_services as $b_service)
                            <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="w-4 px-4 py-3">
                                    {{ $sno++ }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ \Carbon\Carbon::parse($b_service->created_at)->format('d M Y') }}
                                </td>
                                <td class="px-4 py-2">{{ $b_service->order_id }}</td>
                                <td class="px-4 py-2">{{ $b_service->service_category }}</td>
                                <td class="px-4 py-2">{{ $b_service->service_code }}</td>
                                <th scope="row"
                                    class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b_service->service_name }}
                                </th>
                                <td class="px-4 py-2">{{ $b_service->customer->phone }}</td>
                                <td class="px-4 py-2">{{ $b_service->service_address }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b_service->price_per_unit }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b_service->quantity }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $b_service->total_amount }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if ($b_service->booking_status == 'Cancelled')
                                        {{ $b_service->booking_status }}
                                    @else
                                        <select id="small"
                                            wire:change="change_booking_status('{{ $b_service->id }}', $event.target.value)"
                                            class="block p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="Completed"
                                                {{ $b_service->booking_status == 'Completed' ? 'selected' : '' }}>
                                                Completed
                                            </option>
                                            <option value="Ongoing"
                                                {{ $b_service->booking_status == 'Ongoing' ? 'selected' : '' }}>Ongoing
                                            </option>
                                        </select>
                                    @endif
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <select id="small"
                                        wire:change="change_payment_status('{{ $b_service->id }}', $event.target.value)"
                                        class="block p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="Paid"
                                            {{ $b_service->payment_status == 'Paid' ? 'selected' : '' }}>Paid
                                        </option>
                                        <option value="Unpaid"
                                            {{ $b_service->payment_status == 'Unpaid' ? 'selected' : '' }}>Unpaid
                                        </option>
                                    </select>
                                </td>

                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div x-data="{ open: false }" class="relative">
                                        <button @click="open = !open"
                                            class="inline-flex bg-white items-center p-2 text-sm font-medium text-center text-gray-900 rounded-full hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                            type="button">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                                    d="M12 6h.01M12 12h.01M12 18h.01" />
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div x-show="open" @click.away="open = false" x-transition
                                            class="absolute flex top-0 right-full mr-2 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <a wire:click="edit({{ $b_service->id }})"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                    class="w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <a wire:click="delete({{ $b_service->id }})"
                                                wire:confirm="Are you sure you want to delete this Service Label?"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                    class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr
                                class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-3 py-2" colspan="12">No results match your search</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="p-2">
                    {{ $booking_services->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
