<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $tweets = Tweet::latest()->get();

        return view('dashboard', compact('tweets'));
    }
}
