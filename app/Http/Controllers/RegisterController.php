<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
class RegisterController extends Controller
{
    public function getRegister(){
        return view('Register');
    }
   public function storeUser(Request $req){
    $user = new Register();
    $user->name     = $req->iname;
    $user->email   = $req->iemail;
    $user->password   = $req->ipassword;

    if($user->save()){
        return redirect('/');
    }else{
        return back();
    }
    }
}
