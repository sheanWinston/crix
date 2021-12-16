<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $transactions = Auth::user()->transactions()->take(6)->get();

        return view('user.dashboard', compact('transactions'));
    }
}
