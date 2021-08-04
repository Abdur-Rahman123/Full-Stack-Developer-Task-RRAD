<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
class RegisterController extends Controller
{
    public function getRegister(){
        return view('Register');
    }
   public function storeUser(Request $request){
    $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);
    
    $user = Register::create(request(['name', 'email', 'password']));
    
    //auth()->login($user);
    
    return redirect()->to('/');
    }
}
