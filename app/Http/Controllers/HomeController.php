<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }
    // products
    public function product() {
        return view('product');
    }
    //contact
    public function contact() {
        return view('contact');
    }

    public function submitContact(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        return back()->with('success', 'وصلتنا رسالتك بنجاح. سيتواصل معك فريق رواسي قريباً.');
    }
}
