<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function __contruct() {
        $this->middleware(['auth:api']);
    }
    public function __invoke() {
        auth()->logout();
    }
}
