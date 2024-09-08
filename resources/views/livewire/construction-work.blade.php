<div>
    <!-- Main modal -->
    @if ($cmodal == true)
        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-4xl max-h-full mx-auto bg-gray-300 rounded-lg">
                <!-- Modal content -->
                <div class="p-4 bg-gray-300 rounded-lg">
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                {{ $id_material ? 'Update ' : 'Add new ' }}Material
                            </h3>
                            <button type="button" wire:click="close_modal"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">

                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form wire:submit="save">
                            <div class="grid gap-4 mb-4 sm:grid-cols-3">
                                <div>
                                    <label for="code"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Material
                                        Code</label>
                                    <input type="text" wire:model="material_code"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type material code">
                                    @error('material_code')
                                        <span class="error text-red-300">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Material
                                        Name</label>
                                    <input type="text" wire:model="material_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type material name">
                                    @error('material_name')
                                        <span class="error text-red-300">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="m_price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Price per Unit</label>
                                    <input type="number" wire:model.live="price_per_unit" min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="299">
                                    @error('price_per_unit')
                                        <span class="error text-red-300">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="off_per"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Offer
                                        %</label>
                                    <input type="number" wire:model.live="offer_percentage" min="0"
                                        max="100"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="10%">
                                </div>
                                <div>
                                    <label for="off_price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Offer
                                        Price</label>
                                    <input type="number" wire:model="offer_price" min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="299" disabled>
                                </div>
                                <div>
                                    <label for="o_price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Original
                                        Price</label>
                                    <input type="number" wire:model="original_price" min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="299" disabled>
                                </div>
                                <div>
                                    <label for="min_transport_charge"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Minimum Transport Charge</label>
                                    <input type="number" wire:model.live="min_transport_charge" min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="299">
                                    @error('min_transport_charge')
                                        <span class="error text-red-300">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="minimum_order_quantity"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Minimum Order Quantity</label>
                                    <input type="number" wire:model.live="minimum_order_quantity" min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="299">
                                </div>
                                <div>
                                    <label for="show_order"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Show
                                        Order</label>
                                    <input type="number" wire:model="show_order" min="0"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="1">
                                </div>
                                <div>
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Material
                                        Description</label>
                                    <textarea wire:model="material_description" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Write material description here"></textarea>
                                </div>
                                <div class="flex justify-center items-center">
                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                        {{ $id_material ? 'Update ' : 'Add new ' }}Material
                                    </button>
                                </div>
                                <div>
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        @if ($material_image)
                                            @if (is_string($material_image))
                                                <img class="rounded-lg"
                                                    src="{{ asset('upload_img/' . $material_image) }}">
                                            @else
                                                <img class="rounded-lg" src="{{ $material_image->temporaryUrl() }}">
                                            @endif
                                        @else
                                            <div wire:loading wire:target="material_image">
                                                <div class="text-center p-8">
                                                    <div role="status">
                                                        <svg aria-hidden="true"
                                                            class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                                            viewBox="0 0 100 101" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                                fill="currentFill" />
                                                        </svg>
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div wire:loading.remove wire:target="material_image"
                                                class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 20 16">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Click to upload</span> or drag and drop
                                                </p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">JPEG, PNG, JPG or
                                                    GIF(MAX: 1Mb)</p>
                                            </div>
                                        @endif
                                        <input wire:model="material_image" id="dropzone-file" type="file"
                                            class="hidden" />
                                    </label>
                                    @error('material_image')
                                        <span class="error text-red-300">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Success/Delete toast message --}}
    @include('status-msg')
    {{-- search,export,record per page and add material --}}
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
            <!-- Modal toggle -->
            <button wire:click="open_modal" type="button"
                class="mb-2 text-gray-500 bg-gray-200 hover:bg-gray-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14m-7 7V5" />
                </svg>

                <span class="sr-only">Icon description</span>
            </button>
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
                            <th scope="col" class="px-4 py-3">code</th>
                            <th scope="col" class="px-4 py-3">material name</th>
                            <th scope="col" class="px-4 py-3">description</th>
                            <th scope="col" class="px-4 py-3">price per unit</th>
                            <th scope="col" class="px-4 py-3">offer(%)</th>
                            <th scope="col" class="px-4 py-3">offer(&#8377;)</th>
                            <th scope="col" class="px-4 py-3">original(&#x20B9;)</th>
                            <th scope="col" class="px-4 py-3">Min transport charge</th>
                            <th scope="col" class="px-4 py-3">min order quantity</th>
                            <th scope="col" class="px-4 py-3">Rating</th>
                            <th scope="col" class="px-4 py-3">status</th>
                            <th scope="col" class="px-4 py-3">action</th>
                        </tr>
                    </thead>
                    @php
                        $page = $materials->currentPage();
                        $per_page = $materials->perPage();
                        $sno = ($page - 1) * $per_page + 1;
                    @endphp
                    <tbody>
                        @forelse ($materials as $material)
                            <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="w-4 px-4 py-3">
                                    {{ $sno++ }}
                                </td>
                                <td class="px-4 py-2">{{ $material->material_code }}</td>
                                <th scope="row"
                                    class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ asset('upload_img/' . $material->material_image) }}" alt=""
                                        class="w-auto h-7 mr-3 rounded-lg">
                                    {{ $material->material_name }}
                                </th>
                                <td class="px-4 py-2">{{ $material->material_description }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $material->price_per_unit }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $material->offer_percentage }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $material->offer_price }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $material->original_price }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $material->min_transport_charge }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $material->minimum_order_quantity }}
                                </td>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span
                                            class="ml-1 text-gray-500 dark:text-gray-400">{{ $material->rating }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-2"><label class="items-center mb-5 cursor-pointer">
                                        <input wire:click="toggle_status({{ $material->id }})" type="checkbox"
                                            class="sr-only peer"
                                            {{ $material->material_status == 1 ? 'checked' : '' }}>
                                        <div
                                            class="relative w-9 h-5 bg-red-400 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 rounded-full peer dark:bg-teal-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-teal-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-teal-600 peer-checked:bg-teal-600">
                                        </div>
                                    </label></td>
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
                                            <a wire:click="edit({{ $material->id }})"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                                    class="w-6 h-6 text-blue-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <a wire:click="delete({{ $material->id }})"
                                                wire:confirm="Are you sure you want to delete this material Label?"
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
                                <td class="px-3 py-2" colspan="13">No results match your search</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="p-2">
                    {{ $materials->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
