<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Register;

class LoginController extends Controller
{
    public function verify(Request $req){
        $user = DB::table('registers')
        ->where('email', $req->email)
        ->where('password', $req->password)
        ->first();	

        if (count((array)$user) > 0) {
            return view('Success');
        }
    }
}
