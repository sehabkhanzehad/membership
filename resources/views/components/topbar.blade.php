<header
    class="sticky top-0 z-20 bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60 border-b border-gray-100">
    <div class="flex h-16 items-center gap-4 px-4">
        <button id="openSidebarBtn"
            class="lg:hidden inline-flex items-center justify-center rounded-xl border border-gray-200 p-2 text-gray-600 hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 6h18v2H3zm0 5h18v2H3zm0 5h18v2H3z" />
            </svg>
        </button>
        <div class="flex flex-1 items-center justify-between">
            <div class="relative flex-1 max-w-xs">
                <svg class="pointer-events-none absolute left-3 top-2.5 h-5 w-5 text-gray-400" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        d="M10 2a8 8 0 1 0 5.3 14l4.4 4.4 1.4-1.4-4.4-4.4A8 8 0 0 0 10 2zm0 2a6 6 0 1 1 0 12A6 6 0 0 1 10 4z" />
                </svg>
                <input type="search" placeholder="Search..."
                    class="w-full rounded-xl border border-gray-200 bg-white pl-10 pr-3 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-100" />
            </div>
            <div class="flex items-center space-x-4">
                <button
                    class="rounded-xl border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-emerald-500 transition">Collect</button>
                <div class="relative">
                    <button id="userMenuBtn"
                        class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-2.5 py-1.5 hover:bg-gray-50 transition">
                        <img src="https://i.pravatar.cc/40?img=3" alt="avatar" class="h-8 w-8 rounded-full" />
                        <span class="hidden sm:block text-sm font-medium text-gray-700">Alex</span>
                        <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 10.17l3.71-2.94a.75.75 0 1 1 .94 1.16l-4.24 3.36a.75.75 0 0 1-.94 0L5.21 8.39a.75.75 0 0 1 .02-1.18z" />
                        </svg>
                    </button>
                    <div id="userMenu"
                        class="absolute right-0 mt-2 w-48 rounded-xl border border-gray-100 bg-white p-1 shadow-lg hidden">
                        <a href="#"
                            class="block rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">Profile</a>
                        <a href="#"
                            class="block rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">Settings</a>
                        <div class="my-1 border-t border-gray-100"></div>
                        <a href="signin.html"
                            class="block rounded-lg px-3 py-2 text-sm text-red-600 hover:bg-red-50">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
