<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
 
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')]);
            $user = auth()->guard('admin')->user();
            return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
        // }
        // else {
        //     return back()->with('error','Whoops! invalid email and password.');
        // }
    }
 
    public function adminLogout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('adminLogin'));
    }

    public function getRegister(){
        return view('admin.auth.register');
    }
    
    public function postRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make('password');

        $admin->save();
        return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
    }
}
