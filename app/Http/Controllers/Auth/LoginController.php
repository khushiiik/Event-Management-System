<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function logout()
    {
        session_abort();
        return redirect('login');
    }
    public function showLoginForm()
    {
        return view('authlr.login');
    }

    public function loginn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role' => 'required|in:admin,vendor',
        ]);

        $email=$request->email;
        $password=$request->password;

        $user=User::where('email',$email)->first();

        if($user){
            if(password_verify($password, $user->password)){
                

                if($user->role ==='admin'){
                    session()->put('admin', $user->id);
                    // return redirect()->route('dash');
                    return redirect('dash');



                }
                elseif($user->role === 'vendor'){
                    session()->put('user', $user->id);
                    // return redirect()->route('dashvendor');
                    return redirect('dashvendor');

                }
           
            
    
        


            }
        }
        return back()->withErrors(['email' => 'Invalid Email or Password'])->withInput();
        // if (Auth::attempt($credentials)) {
        //     if (auth()->user()->email === 'email') {

        //         if(auth()->user()->role === 'admin'){

        //             return redirect()->route('dash');

        //         }
        //         elseif(auth()->user()->role === 'vendor'){
                
        //     }

            
            
            
            // else {
            //     return redirect()->route('dashvendor');
            // }
    //     }
    // '
    //     return back()->withErrors(['email' => 'Invalid credentials']);
    
    
    
        }
    //     // Validate the form data
    //     $credentials = $request->validate([
            
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);

    //     // Attempt to authenticate the user
    //     if (Auth::attempt($credentials)) {
    //         // Authentication successful
    //         return redirect()->route('dash');
    //     } else {
    //         // Authentication failed
    //         return back()->withErrors(['email' => 'Invalid Email or Password'])->withInput();
    
    //     }
    
}