<div>
    {{-- The whole world belongs to you. --}}
    <div class="relative mx-auto mt-14 p-4 w-full max-w-md max-h-full">
        <h3 class="text-lg font-semibold text-center text-gray-700 dark:text-white">
            Kindly provide your Info:
        </h3>
        <form wire:submit='save' class="p-4 md:p-5">
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2">
                    <label for="applicant_name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" wire:model='applicant_name'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type your name">
                    @error('applicant_name')
                        <span class="error text-red-300">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-span-2">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile
                        No</label>
                    <input type="text" wire:model ='phone_number' pattern="[0-9]{10}" maxlength="10"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type phone no" inputmode="numeric"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    @error('phone_number')
                        <span class="error text-red-300">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                        Resume</label>
                    <input wire:model ='resume'
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    @error('resume')
                        <span class="error text-red-300">{{ $message }}</span>
                    @enderror

                </div>


                <div class="col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Few
                        lines
                    </label>
                    <textarea id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write about interest & experience"></textarea>
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="text-white inline-flex items-center bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Apply
                </button>
            </div>
        </form>
    </div>
    {{-- <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Create New Product
                </h3>
            </div>
            <!-- Modal body -->
            
        </div>
    </div> --}}

</div>
