<!-- Login modal -->
@if ($is_open_login)
    <div
        class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-2 rounded-t dark:border-gray-600">
                    <button wire:click='close_login_model' type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-1 md:p-5">
                    <div class="flex flex-col items-center">
                        <img class="w-20 h-20 p-1 mx-auto rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                            src="{{ asset('images/loginserver.png') }}" alt="Bordered avatar">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Verify your number
                        </h3>
                        <p class="text-base wrap-text leading-relaxed text-gray-500 dark:text-gray-400 mb-2">
                            please enter your mobile number to receive a verification code.
                        </p>
                    </div>

                    <form wire:submit='verify_otp' class="space-y-4">
                        <div class="flex  relative z-0 w-full mb-5 group">
                            <input wire:model="mobile_number" type="text" id="mobile_number" pattern="[0-9]{10}"
                                maxlength="10"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " autocomplete="new-phone" inputmode="numeric"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                            <label for="user_phone"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mobile
                                number</label>
                            <a wire:click='otp_generate'
                                class="text-sm ml-2 text-blue-700 hover:underline dark:text-blue-500 cursor-pointer">send
                                OTP
                            </a>
                        </div>
                        @error('mobile_number')
                            <span class="error text-red-300">{{ $message }}</span>
                        @enderror
                        {{ $otp_sent }}
                        @if ($otp_sent)
                            <div class="relative z-0 w-full mb-5 group">
                                <input wire:model='otp_receive' type="password"
                                    class="block py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder="" autocomplete="new-password" inputmode="numeric" />
                                <label for="floating_repeat_password"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-gray-600 peer-focus:dark:text-gray-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">OTP
                                </label>
                                @error('otp_receive')
                                    <span class="error text-red-300">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-center">
                                <button type="submit"
                                    class="text-white bg-gray-300 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    Verify
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
