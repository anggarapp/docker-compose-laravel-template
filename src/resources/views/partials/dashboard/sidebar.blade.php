<!-- start::Black overlay -->
<div :class="menuOpen ? 'block' : 'hidden'" @click="menuOpen = false" @mousedown.outside="menuOpen = false"
    class="fixed z-20 inset-0 bg-black w-64 opacity-100 transition-opacity lg:hidden duration-300"></div>
<!-- end::Black overlay -->
<aside :class="menuOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 bg-secondary overflow-y-auto lg:translate-x-0 lg:inset-0 custom-scrollbar">
    <!-- start::Logo -->
    <div class="flex items-center justify-left bg-black bg-opacity-30 h-16 p-2">
        <div class="flex p-1">
            <div class="flex items-center justify-center">
                <img src={{ asset('assets/image/pmibjn.png') }} class="h-6 mr-3 sm:h-9" alt="PMI Logo" />
            </div>
            <div class="none">
                <h1 class="text-gray-100 text-lg font-bold uppercase tracking-widest">
                    Dashboard
                </h1>
                <h3 class="text-gray-100 text-xs font-bold uppercase">
                    PMI Bojonegoro
                </h3>
            </div>
        </div>
    </div>
    <!-- end::Logo -->

    <!-- start::Navigation -->
    <nav class="py-5 custom-scrollbar">
        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard') }}"
            class="flex items-center text-gray-400 px-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200"
                :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Dashboard
            </span>
        </a>
        <!-- end::Menu link -->

        <p class="text-xs text-gray-600 mt-5 mb-2 px-6 uppercase">Blogs</p>
        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard.post') }}"
            class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Post
            </span>
        </a>
        <!-- end::Menu link -->
        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard.category') }}"
            class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200"
                :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Category
            </span>
        </a>
        <!-- end::Menu link -->
        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard.unit') }}"
            class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Units
            </span>
        </a>
        <!-- end::Menu link -->
        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard.tag') }}"
            class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Tag
            </span>
        </a>
        <!-- end::Menu link -->
        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard.image') }}"
            class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Images
            </span>
        </a>
        <!-- end::Menu link -->

        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard.profile') }}"
            class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200"
                :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Profile
            </span>
        </a>
        <!-- end::Menu link -->

        <!-- start::Menu link -->
        <a x-data="{ linkHover: false }" @mouseover="linkHover = true" @mouseleave="linkHover = false"
            href="{{ route('dashboard.user') }}"
            class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
            </svg>
            <span class="ml-3 transition duration-200" :class="linkHover ? 'text-gray-100' : ''">
                Users
            </span>
        </a>
        <!-- end::Menu link -->

        <!-- start::Menu link -->
        {{-- <div x-data="{ linkHover: false, linkActive: false }">
            <div @mouseover="linkHover = true" @mouseleave="linkHover = false" @click="linkActive = !linkActive"
                class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>
                    <span class="ml-3">Post</span>
                </div>
                <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
            </div>
            <!-- start::Submenu -->
            <ul x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400">
                <!-- start::Submenu link -->
                <li
                    class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                    <a href="./pages/email/inbox.html" class="flex items-center">
                        <span class="mr-2 text-sm">&bull;</span>
                        <span class="overflow-ellipsis">Inbox</span>
                    </a>
                </li>
                <!-- end::Submenu link -->

                <!-- start::Submenu link -->
                <li
                    class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                    <a href="./pages/email/viewMessage.html" class="flex items-center">
                        <span class="mr-2 text-sm">&bull;</span>
                        <span class="overflow-ellipsis">View Message</span>
                    </a>
                </li>
                <!-- end::Submenu link -->

                <!-- start::Submenu link -->
                <li
                    class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                    <a href="./pages/email/newMessage.html" class="flex items-center">
                        <span class="mr-2 text-sm">&bull;</span>
                        <span class="overflow-ellipsis">Compose</span>
                    </a>
                </li>
                <!-- end::Submenu link -->
            </ul>
            <!-- end::Submenu -->
        </div> --}}
        <!-- end::Menu link -->
    </nav>
    <!-- end::Navigation -->
</aside>