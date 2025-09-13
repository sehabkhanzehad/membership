<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\Month;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {

        $totalMembers = User::whereRole(UserRole::Member)->count();
        return view('dashboard.index', [
            'totalUsers' => $totalMembers
        ]);
    }
}
