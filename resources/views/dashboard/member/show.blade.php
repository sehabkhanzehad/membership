@extends('layouts.app')

@section('title', 'Member Details')

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h2 class="text-xl font-bold mb-2">Member Details</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div><span class="font-semibold">Name:</span> {{ $member->name }}</div>
                <div><span class="font-semibold">Email:</span> {{ $member->email ?? "-" }}</div>
                <div><span class="font-semibold">Phone:</span> {{ $member->phone ?? '-' }}</div>
                {{-- <div><span class="font-semibold">Joined:</span> {{ $member->created_at->format('d M Y') }}</div> --}}
                <!-- Add more fields as needed -->
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="text-lg font-bold mb-4">Collections</h3>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">#</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Year</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Month</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Amount</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Receipt No</th>
                        {{-- <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Collected By</th> --}}
                        <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Collection Date</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Entry Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($member->payments as $payment)
                        <tr>
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2">{{ $payment->year->year }}</td>
                            <td class="px-4 py-2">{{ $payment->month }}</td>
                            <td class="px-4 py-2">{{ $payment->amount }}</td>
                            <td class="px-4 py-2">{{ $payment->receipt_no }}</td>
                            {{-- <td class="px-4 py-2">{{ $payment->collected_by }}</td> --}}
                            <td class="px-4 py-2">{{ $payment->collection_at }}</td>
                            <td class="px-4 py-2">{{ $payment->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 text-center text-gray-400">No collections found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
