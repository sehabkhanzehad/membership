<!-- Sidebar (mobile overlay) -->
<div id="sidebarOverlay" class="fixed inset-0 z-30 bg-black/20 hidden lg:hidden" aria-hidden="true"></div>
<!-- Sidebar -->
<aside id="sidebar"
    class="fixed z-40 inset-y-0 left-0 w-72 transform -translate-x-full lg:translate-x-0 transition-transform bg-white shadow-sm ring-1 ring-gray-100 flex flex-col">
    <div class="flex h-16 items-center px-4 border-b border-gray-100 flex-shrink-0">
        <a href="#" class="inline-flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-emerald-600" viewBox="0 0 24 24"
                fill="currentColor">
                <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm1 15h-2v-2h2Zm0-4h-2V7h2Z" />
            </svg>
            <span class="text-lg font-bold text-gray-900">YourApp</span>
        </a>
    </div>
    <nav class="px-3 py-4 space-y-1 flex-1">
        <div class="text-xs font-semibold uppercase tracking-wide text-gray-400 px-3">Overview</div>
        <a href="#"
            class="group flex items-center gap-3 rounded-xl px-3 py-2 text-gray-700 hover:bg-gray-100">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-emerald-600" viewBox="0 0 24 24"
                fill="currentColor">
                <path d="M12 3l9.5 7.5-1.2 1.6L12 6 3.7 12.1 2.5 10.5 12 3z" />
                <path d="M4 10.9V21h6v-5h4v5h6v-10.1l-8-6z" />
            </svg>
            Dashboard
        </a>
        <div class="text-xs font-semibold uppercase tracking-wide text-gray-400 px-3 mt-4">Management</div>
        <a href="#users"
            class="group flex items-center gap-3 rounded-xl px-3 py-2 text-gray-700 hover:bg-gray-100">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-emerald-600" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                    d="M16 11c1.7 0 3-1.3 3-3S17.7 5 16 5s-3 1.3-3 3 1.3 3 3 3zM8 11c1.7 0 3-1.3 3-3S9.7 5 8 5 5 6.3 5 8s1.3 3 3 3zm0 2c-2.3 0-7 1.2-7 3.5V19h14v-2.5C15 14.2 10.3 13 8 13zm8 0c-.3 0-.6 0-1 .1 1.2.9 2 2 2 3.4V19h7v-2.5c0-2.3-4.7-3.5-8-3.5z" />
            </svg>
            Users
        </a>
        <a href="#"
            class="group flex items-center gap-3 rounded-xl px-3 py-2 text-gray-700 hover:bg-gray-100">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-emerald-600" viewBox="0 0 24 24"
                fill="currentColor">
                <path d="M3 6h18v2H3V6zm0 5h18v2H3v-2zm0 5h18v2H3v-2z" />
            </svg>
            Reports
        </a>
        <a href="#"
            class="group flex items-center gap-3 rounded-xl px-3 py-2 text-gray-700 hover:bg-gray-100">
            <svg class="h-5 w-5 text-gray-400 group-hover:text-emerald-600" viewBox="0 0 24 24"
                fill="currentColor">
                <path
                    d="M12 22s8-4.5 8-11a8 8 0 1 0-16 0c0 6.5 8 11 8 11zM7 11a5 5 0 0 1 10 0c0 2.7-2.7 5.3-5 6.8-2.3-1.5-5-4.1-5-6.8z" />
                <circle cx="12" cy="11" r="2" />
            </svg>
            Settings
        </a>
    </nav>
    <div class="p-4 border-t border-gray-100 flex-shrink-0">
        <div class="rounded-xl bg-gray-50 p-3">
            <p class="text-sm text-gray-600">Need help?</p>
            <a href="#" class="text-sm font-medium text-emerald-700">Visit Support →</a>
        </div>
    </div>
</aside>
