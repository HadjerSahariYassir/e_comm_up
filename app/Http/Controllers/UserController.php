<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    function login(Request $req)
       {
          
            $user=  User::where(['email'=>$req->email])->first();
            
               
            if(!$user || !Hash::check($req->password,$user->password))
            {
                //return User::where(['email'=>$req->email])->first();
                return "Username or Password is not matched";
            } else {
                $req->session()->put('user',$user);
                
                return redirect("/");
            }

        }

        function show(Request $req){
                if ($req->session()->has('user')){
                    return $req->session->get('user');
                }else{
                    return "SE CONNECTER";
                }
        }

        function register(Request $req){

            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect("/");
        }

}
