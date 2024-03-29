<div>
    <div class="w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-8 mx-auto px-16 py-8 rounded-lg">

        <h2 class="text-center text-2xl font-bold tracking-wide text-gray-800">Sign In</h2>
        <p class="text-center text-sm text-gray-600 mt-2">Don't have an account yet? <a href="#"
                class="text-primary hover:text-primary-dark hover:underline" title="Sign Up">Sign up here</a></p>

        <form class="my-8 text-sm" wire:submit.prevent="signIn">
            <div class="flex flex-col my-4">
                <label for="username" class="text-gray-700">Username</label>
                <input type="text" name="username" id="username"
                    class="mt-2 py-2 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                    placeholder="Enter your username" wire:model="userName">
            </div>

            <div class="flex flex-col my-4">
                <label for="password" class="text-gray-700">Password</label>
                <div x-data="{ show: false }" class="relative flex items-center mt-2">
                    <input :type=" show ? 'text': 'password' " name="password" id="password"
                        class="flex-1 py-2 pr-10 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                        placeholder="Enter your password" type="password" wire:model="password">
                    <button @click="show = !show" type="button"
                        class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">
                        <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                            </path>
                        </svg>

                        <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="remember_me" id="remember_me" class="mr-2 focus:ring-0 rounded">
                <label for="remember_me" class="text-gray-700">Remember me</label>
            </div>

            <div class="my-4 flex items-center justify-end space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900 hover:underline">Forgot your password?</a>
                <button
                    class="bg-primary hover:bg-primary-dark rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Sign
                    In</button>
            </div>
        </form>
    </div>
</div>