<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WalletController extends Controller
{
    public function fund(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|integer|min:100',
            'password' => 'required'
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return back()->with(['error' => 'Incorrect account password']);
        }

        Auth::user()->transactions()->create([
            'amount' => $request->amount,
            'transaction_type_id' => 1,
            'is_credit' => true,
        ]);

        return back()->with(['success' => "Transaction initiated successfully"]);
    }
}
