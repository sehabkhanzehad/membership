<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\Month;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Year;
use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'collection_date' => ['required', 'date'],
            'user_id' => ['required', 'exists:users,id'],
            'receipt_no' => ['required', 'string', 'unique:receipts,receipt_no'],
            'year_id' => ['required', 'exists:years,id'], // todo: change to unique per user per year per month
            'month' => ['required', 'array'],
            'month.*' => ['string', Rule::in(Month::values())], // Todo: add unique validation for month per user per year
            'amount' => ['required', 'integer', 'min:0'],
        ]);

        $exists = Payment::where('user_id', $validated['user_id'])->where('year_id', $validated['year_id'])->whereIn('month', Month::only($validated['month']))->exists();

        if ($exists) return redirect()->back()->with('warning', 'Payment for this user, year, and month already exists.')->withInput();

        $receipt = Receipt::create([
            'receipt_no' => $validated['receipt_no'],
            'user_id' => $validated['user_id'],
            'total_amount' => $validated['amount'],
            'collection_date' => $validated['collection_date'],
        ]);

        foreach ($validated['month'] as $month) {
            Payment::create([
                'user_id' => $validated['user_id'],
                'receipt_id' => $receipt->id,
                'year_id' => $validated['year_id'],
                'month' => $month,
                'amount' => $validated['amount'] / count($validated['month']),
                'collected_by' => 2,
                'paid_at' => $validated['collection_date'],
            ]);
        }

        return redirect()->back()->with('success', 'Payment recorded successfully');
    }


    public function collector()
    {
        return view('dashboard.collect', [
            "members" => User::whereRole(UserRole::Member)->get(),
            "years" => Year::all(),
            "months" => Month::values(),
        ]);
    }
}
