<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class forms extends Controller
{
    function insert_data(Request $request ){

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'National_Identity' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => 'required',
            // 'employee' => 'required|in:admin,employee,user',
        ]);
        
        $query = DB::table('test3')->insert([
            'firstname' => $request->input('first_name'),
            'lastname' => $request->input('last_name'),
            'user_id' => $request->input('National_Identity'),
            'email' => $request ->input('email'),
            'password' => $request ->input('password'),
            'phone_number' => $request ->input('phone_number'),
            // 'role' => $request ->input('employee'),
        ]);

        if ($query) {
            return redirect()->back()->with('success', 'Data has been successfully inserted.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong.');
    }
}
function login(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        // echo $email . $password;

        $query = DB::table('test3')->where([

            'email' => $email,
            'password' => $password
            
        ])->get();

        if(count($query) > 0){
            return redirect('/homepage');
        }else{
            echo 'login faield wrong data passed';
        }

        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     // Authentication successful
        //     return redirect('/dashboard');
        // } else {
        //     // Authentication failed
        //     return back()->withErrors(['message' => 'Invalid credentials']);
        // }
    }
}