<?php
namespace App\Http\Controllers\Dashboard;

use App\Enums\Month;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'collection_at' => ['required', 'date'],
            'user_id' => ['required', 'exists:users,id'],
            'year_id' => ['required', 'exists:years,id'],
            'month' => ['required', 'string', Rule::in(values: Month::values())],
            'amount' => ['required', 'integer', 'min:0'],
            'receipt_no' => ['required', 'string', 'unique:payments,receipt_no'],
        ]);

        // Check for duplicate payment for same user, year, and month
        $exists = Payment::where('user_id', $validated['user_id'])
            ->where('year_id', $validated['year_id'])
            ->where('month', Month::from($validated['month']))
            ->exists();


        if ($exists) {
            $msg = 'Payment for this user, year, and month already exists.';
            if ($request->wantsJson() || $request->isJson()) {
                return response()->json(['warning' => $msg], 409);
            }
            return redirect()->back()->with('warning', $msg)->withInput();
        }

        $validated['collected_by'] = 2;

        $payment = Payment::create($validated);

        if ($request->wantsJson() || $request->isJson()) {
            return response()->json(['message' => 'Payment recorded successfully', 'payment' => $payment], 201);
        }
        return redirect()->back()->with('success', 'Payment recorded successfully');
    }


    public function collector () {
    return view('dashboard.collect', [
        "members" => User::whereRole(UserRole::Member)->get(),
        "years" => Year::all(),
        "months" => Month::values(),
        ]);
    }

}
