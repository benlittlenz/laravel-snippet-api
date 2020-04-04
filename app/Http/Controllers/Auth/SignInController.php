<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function __invoke(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
    ]);

        if(!$token = auth()->attempt($request->only('email', 'password'))) {
            dd('fail');
        }

        return response()->json([
            'data' => compact('token')
        ]);
    }
}
