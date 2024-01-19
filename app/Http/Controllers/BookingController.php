<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //

    function myBookings(Request $request)
    {
        // return $request->all();
        return $request;
    }

    function sayHello($name)
    {
        // $isAuthenticated = true;

        // if ($name == 'tarmeez') {
        //     $isAuthenticated = true;
        // } else {
        //     $isAuthenticated = false;
        // }

        // if ($isAuthenticated) {
        //     return view('hello')->with('name', $name)->with('value', 20);
        // } else {
        //     return response()->json(["error" => "Not Authenicates"], 401);
        // }

        return view('hello')->with('name', $name)->with('value', 20);
    }

    function show()
    {
        $isAuthenticated = false;
        if ($isAuthenticated) {
            return response()->Json(["data" => ["name" => 'ali']]);
        } else {
            // return redirect('/login');
            return back();
        }
    }

    function login()
    {
        return view('login');
    }
}