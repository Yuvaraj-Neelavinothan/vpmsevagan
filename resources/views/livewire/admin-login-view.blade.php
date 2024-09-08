<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="flex justify-start items-center mb-2">
                <a href="" class="flex items-center justify-between mr-3">
                    <img src="{{ asset('images/sevagan_logo.png') }}"
                        class="border-2 border-green-800 mr-1 h-10 rounded-full" alt="sevagan Logo" />
                    <h1 class="text-3xl font-extrabold text-gray-500 dark:text-white">Sevagan<small
                            class="ms-2 font-semibold text-gray-500 dark:text-gray-400"></small>
                    </h1>
                </a>
            </div>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    @if (session()->has('authfailed'))
                        <span class="error text-red-300">{{ session('authfailed') }}</span>
                    @endif
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Super Admin Login
                    </h1>
                    <form wire:submit='authenticate' class="space-y-4 md:space-y-6">
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admin Name</label>
                            <input type="text" wire:model='admin_name'
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="type Admin name">
                            @error('admin_name')
                                <span class="error text-red-300">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" wire:model='password' placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @error('password')
                                <span class="error text-red-300">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
