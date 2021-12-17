<?php

namespace App\Http\Controllers;

use App\Mail\CrixMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Hurray!!!';
        $message = 'We are going live in a bit';
        Mail::to(Auth::user())->send(new CrixMail($title, $message));

        $transactions = Auth::user()->transactions()->take(6)->get();

        return view('user.dashboard', compact('transactions'));
    }
}
