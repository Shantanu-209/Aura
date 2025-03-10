<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login");


    
}

public function authenticate(Request $request){

    $validator=Validator::make(request()->all(),[
        'email'=>'required|email',
        'password'=>'required'
    ]);

    if($validator->passes()){
        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){

        }else{
            return redirect()
            ->route('account.login')
            ->with( 'either email of password is incrooect' );
            // ->withInput();
        }
        
    }else{
        return redirect()->
        route('account.login')
        ->withErrors($validator)
        ->withInput();
    }
}

}