@php
    $currentMonth = now()->month;
    $defaultMonth = $currentMonth == 1 ? 12 : $currentMonth - 1;
    $defaultMonthName = \Carbon\Carbon::create()->month($defaultMonth)->format('F');
@endphp
@extends('layouts.app')

@section('title', 'Collect Payment')

@section('content')
    <div class="flex items-center justify-center min-h-[70vh]">
        <div class="w-full max-w-xl bg-white rounded-xl shadow-lg p-8 md:p-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 text-center">Collect Payment</h2>
            @if (session('success'))
                <div class="mb-4 p-3 rounded bg-emerald-100 text-emerald-800 border border-emerald-200 text-center">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="mb-4 p-3 rounded bg-amber-100 text-amber-800 border border-amber-200 text-center">
                    {{ session('warning') }}
                </div>
            @endif

            <form method="POST" action="{{ route('payments.store') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Collection Date</label>
                    <input type="date" name="collection_at"
                        class="w-full rounded-lg border border-gray-300 focus:ring-emerald-400 focus:border-emerald-400 px-3 py-2 transition"
                        value="{{ old('collection_at', now()->toDateString()) }}">
                    @error('collection_at')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">User</label>
                    <select name="user_id" id="user_id"
                        class="w-full rounded-lg border border-gray-300 focus:ring-emerald-400 focus:border-emerald-400 px-3 py-2 transition">
                        <option value="" disabled selected>Select a user</option>
                        @foreach ($members as $member)
                            <option value="{{ $member->id }}" {{ old('user_id') == $member->id ? 'selected' : '' }}>
                                {{ $member->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Year</label>
                        <select name="year_id"
                            class="w-full rounded-lg border border-gray-300 focus:ring-emerald-400 focus:border-emerald-400 px-3 py-2 transition">
                            @foreach ($years as $year)
                                <option value="{{ $year->id }}"
                                    {{ old('year_id', $year->year == now()->year ? $year->id : null) == $year->id ? 'selected' : '' }}>
                                    {{ $year->year }}
                                </option>
                            @endforeach
                        </select>
                        @error('year_id')
                            <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">Month</label>
                        <select name="month"
                            class="w-full rounded-lg border border-gray-300 focus:ring-emerald-400 focus:border-emerald-400 px-3 py-2 transition">
                            @foreach ($months as $month)
                                <option value="{{ $month }}"
                                    {{ old('month', $defaultMonthName) == $month ? 'selected' : '' }}>
                                    {{ $month }}
                                </option>
                            @endforeach
                        </select>
                        @error('month')
                            <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Amount</label>
                    <input type="number" name="amount"
                        class="w-full rounded-lg border border-gray-300 focus:ring-emerald-400 focus:border-emerald-400 px-3 py-2 transition"
                        value="{{ old('amount', 100) }}" placeholder="Enter amount">
                    @error('amount')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Receipt No</label>
                    <input type="text" name="receipt_no"
                        class="w-full rounded-lg border border-gray-300 focus:ring-emerald-400 focus:border-emerald-400 px-3 py-2 transition"
                        value="{{ old('receipt_no') }}" placeholder="Enter receipt number">
                    @error('receipt_no')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full rounded-lg bg-emerald-600 px-6 py-2 text-base font-semibold text-white hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-400 transition">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
