<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $lat = request()->get('lat');
        event(
            new \App\Events\PusherEvent('notification', $lat)
        );
    }
    public function show(){
        return view('text');
    }
}
