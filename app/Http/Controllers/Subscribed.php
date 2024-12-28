<?php

namespace App\Http\Controllers;

use App\Events\NewTrade;
use Illuminate\Http\Request;
// use Event;
use App\Events\SendMail;
use Illuminate\Support\Facades\Event;

// use Illuminate\Support\Facades\Event;
class Subscribed extends Controller
{
    public function index()
    {
        // Event::dispatch(new SendMail(1));
        // dd(request("message"));
        Event::dispatch(new NewTrade(request("message")));
        return response()->json("Fired");
    }

    public function fire()
    {
        Event::dispatch(new NewTrade(1));
        return response()->json("Fired");
    }


    public function app(){
        return view("app");
    }
}
