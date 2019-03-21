<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function showAllSubscriptions()
    {
        $subscribers = Subscription::all();

        return view('admin.subscriptionsIndex', compact('subscribers'));
    }
}
