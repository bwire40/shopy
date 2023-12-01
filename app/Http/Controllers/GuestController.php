<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    //
    public function index()
    {

        // check for the user_type then send them to appropriate pages


        // 1. check if user id exists
        if (Auth::id()) {

            // 2. check for the user_type
            $user_type = Auth()->user()->user_type;

            // 3. send the user according to their type

            if ($user_type == "admin") {
                return view("admin.index");
            } else if ($user_type == "user") {
                return view("pages.home");
            } else {
                redirect()->back();
            }
        }
    }
    public function about(Request $request)
    {
        return view("pages.about");
    }
    public function contact(Request $request)
    {
        return view("pages.contact");
    }
}