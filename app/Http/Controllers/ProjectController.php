<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Static functions for the routes for now
    public function brocando()
    {
        return view('web.portfolio.brocando');
    }
    public function giftcash()
    {
        return view('web.portfolio.giftcash');
    }
    public function mingo()
    {
        return view('web.portfolio.mingo');
    }
}
