@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Stats -->
    <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-100">
            <p class="text-sm text-gray-500">Total Users</p>
            <p class="mt-2 text-2xl font-semibold text-gray-900">4,208</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-100">
            <p class="text-sm text-gray-500">Active Today</p>
            <p class="mt-2 text-2xl font-semibold text-gray-900">536</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-100">
            <p class="text-sm text-gray-500">New Signups</p>
            <p class="mt-2 text-2xl font-semibold text-gray-900">78</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-100">
            <p class="text-sm text-gray-500">Churn</p>
            <p class="mt-2 text-2xl font-semibold text-gray-900">1.2%</p>
        </div>
    </section>

    <!-- Users table -->
    {{-- <section id="users" class="mt-8">
        <div class="mb-3 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-lg font-semibold text-gray-900">Users</h2>
            <div class="flex items-center gap-2">
                <input type="search" placeholder="Filter users..."
                    class="w-full sm:w-64 rounded-xl border border-gray-200 bg-white px-3 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-100" />
                <button
                    class="inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-3 py-2 text-sm font-semibold text-white hover:bg-emerald-700">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" />
                    </svg>
                    Add User
                </button>
            </div>
        </div>

        <div class="overflow-x-auto rounded-2xl bg-white shadow-sm ring-1 ring-gray-100">
            <table class="min-w-full divide-y divide-gray-100">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">User</th>
                        <th class="whitespace-nowrap px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Email</th>
                        <th class="whitespace-nowrap px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Role</th>
                        <th class="whitespace-nowrap px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Status</th>
                        <th class="whitespace-nowrap px-4 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    <!-- Row -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-3">
                                <img class="h-9 w-9 rounded-full" src="https://i.pravatar.cc/36?img=12" alt="">
                                <div>
                                    <div class="font-medium text-gray-900">Alex Johnson</div>
                                    <div class="text-xs text-gray-500">Joined Mar 12, 2025</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-gray-700">alex@example.com</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-medium text-emerald-700">Admin</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">Active</span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <div class="inline-flex items-center gap-2">
                                <button class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-sm hover:bg-gray-50">Edit</button>
                                <button class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-sm hover:bg-gray-50">Disable</button>
                                <a href="/collect" class="rounded-xl border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-emerald-500 transition">Collect</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-3">
                                <img class="h-9 w-9 rounded-full" src="https://i.pravatar.cc/36?img=7" alt="">
                                <div>
                                    <div class="font-medium text-gray-900">Sara Lee</div>
                                    <div class="text-xs text-gray-500">Joined Apr 02, 2025</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-gray-700">sara@example.com</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-0.5 text-xs font-medium text-blue-700">Manager</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">Active</span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <div class="inline-flex items-center gap-2">
                                <button class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-sm hover:bg-gray-50">Edit</button>
                                <button class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-sm hover:bg-gray-50">Disable</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-3">
                                <img class="h-9 w-9 rounded-full" src="https://i.pravatar.cc/36?img=2" alt="">
                                <div>
                                    <div class="font-medium text-gray-900">Mark Chen</div>
                                    <div class="text-xs text-gray-500">Joined May 22, 2025</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-gray-700">mark@example.com</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center rounded-full bg-purple-50 px-2 py-0.5 text-xs font-medium text-purple-700">Editor</span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center rounded-full bg-yellow-100 px-2 py-0.5 text-xs font-medium text-yellow-800">Pending</span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <div class="inline-flex items-center gap-2">
                                <button class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-sm hover:bg-gray-50">Approve</button>
                                <button class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-sm hover:bg-gray-50">Remove</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile: optional list view (shows under table on small screens) -->
        <div class="mt-4 grid gap-3 sm:hidden">
            <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100">
                <div class="flex items-center gap-3">
                    <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/40?img=12" alt="">
                    <div class="flex-1">
                        <div class="font-medium text-gray-900">Alex Johnson</div>
                        <div class="text-xs text-gray-500">alex@example.com • Admin</div>
                    </div>
                    <button class="rounded-lg border border-gray-200 px-2 py-1 text-xs">Edit</button>
                </div>
            </div>
            <div class="rounded-2xl bg-white p-4 shadow-sm ring-1 ring-gray-100">
                <div class="flex items-center gap-3">
                    <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/40?img=7" alt="">
                    <div class="flex-1">
                        <div class="font-medium text-gray-900">Sara Lee</div>
                        <div class="text-xs text-gray-500">sara@example.com • Manager</div>
                    </div>
                    <button class="rounded-lg border border-gray-200 px-2 py-1 text-xs">Edit</button>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
