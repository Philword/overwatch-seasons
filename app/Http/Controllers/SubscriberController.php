<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, ['email' => 'required|email' ]);

        $subscriber = new Subscriber;
        $subscriber->email = request('email');
        $subscriber->save();

        return back()->with('message', 'You Are Subscribed! Thank you!');
        ;
    }
}
