<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'subscriberName' => 'required|min:3|max:100',
            'subscriberEmail' => 'required|email|unique:subscriptions,subscriber_email',
        ]);

        $newSubscriber = new Subscription();
        $newSubscriber->subscriber_name = $request->subscriberName;
        $newSubscriber->subscriber_email = $request->subscriberEmail;
        $newSubscriber->save();

        return redirect()->back()->with('msg', 'successSubscribe')->withInput(Input::all());
    }
}
