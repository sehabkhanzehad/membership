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
        return view('dashboard.members.index', [
            'members' => $members
        ]);
    }
}
