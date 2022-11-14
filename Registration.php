<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
class Registration extends Controller
{
    public function registration()
    {
      return view ("auth.registration");
    }
    public function login()
    {
      return view ("auth.login");
    }
    public function dashboard()
    {
      if(Auth::check()){
              return view('dashboard');
          }
}
     public function registeruser(Request $request)//validate and set criteria for fields
     {
       $request->validate([
         'name'=> 'required',
         'password'=>'required|min:6|max:12',
         'email'=> 'required|email|unique:users'
       ]);
       $user = new User();
       $user->name=$request->name;
       $user->password=Hash::make($request->password);//secure password
       $user->email=$request->email;
       $res=$user->save();
       if($res)//get response show action
       {
         return 'dashboard';
       } else
       {
         return back()->with('failed','There is something wrong');
       }
     }
public function loginuser(Request $request)
{
  $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        $user = User::where('email','=',$request->email)->first();
        if ($user) {
            return redirect("dashboard")->withSuccess('You have logged-in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function signOut() {
           Session::flush();
           Auth::logout();

           return Redirect('login');
       }
}
