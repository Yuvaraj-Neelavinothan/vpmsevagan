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
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Mobile</th>
                            <th scope="col" class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    @php
                        $page = $applicant->currentPage();
                        $per_page = $applicant->perPage();
                        $sno = ($page - 1) * $per_page + 1;
                    @endphp
                    <tbody>
                        @forelse ($applicant as $applic)
                            <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="w-4 px-4 py-3">
                                    {{ $sno++ }}
                                </td>
                                <td class="px-4 py-2">{{ $applic->applicant_name }}</td>
                                <td class="px-4 py-2">{{ $applic->phone_number }}</td>
                                <td class="px-4 py-2"></td>
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
                    {{ $applicant->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
