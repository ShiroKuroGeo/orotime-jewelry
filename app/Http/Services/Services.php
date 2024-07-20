<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Services
{

    public function logout(){
        return view("welcome");
    }
}
