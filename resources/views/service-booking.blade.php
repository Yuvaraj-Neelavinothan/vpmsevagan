<!-- drawer component -->
<div id="booking-service-drawer"
    class="fixed top-16 right-2 rounded-lg z-40 h-screen p-4 overflow-y-auto transition-transform {{ $is_drawer_open ? '' : 'translate-x-full' }} bg-white w-80 dark:bg-gray-800">
    <h5 id="drawer-right-label"
        class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
        Address for Service Provide:</h5>
    <button type="button" wire:click="close_drawer"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form wire:submit="save_booking_service" class="p-0">
        <div class="grid gap-4 mb-4 grid-cols-2">

            <div class="col-span-2">
                <input type="text" wire:model='service_street'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="type Street name">
            </div>
            <div class="col-span-2">
                <input type="text" wire:model='service_area'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="type Area/Village">
            </div>
            <div class="col-span-2">
                <select id="category" wire:model='service_city'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="" selected>Select City (near by)</option>
                    <option value="villupuram-vpm-605602">Villupuram</option>
                    <option value="tindivanam-tvm-604001">Tindivanam</option>
                    <option value="gingee-gng-604202">Gingee</option>
                    <option value="vikravandi-vkd-605652">Vikravandi</option>
                    <option value="vanur-vnr-605109">Vanur</option>
                    <option value="melmalaiyanur-mlr-604204">Melmalaiyanur</option>
                    <option value="kandachipuram-kdm-605701">Kandachipuram</option>
                </select>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <button type="submit"
                class="text-white mx-auto bg-teal-600 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">
                Book Now
            </button>
        </div>
    </form>
</div>
