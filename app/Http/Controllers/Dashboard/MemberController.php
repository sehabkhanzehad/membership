<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::whereRole(UserRole::Member)->get();
        return view('dashboard.member.index', [
            'members' => $members
        ]);
    }

    public function show(User $member)
    {
        return view('dashboard.member.show', [
            'member' => $member->load("payments.year", "payments.receipt")
        ]);
    }
}
