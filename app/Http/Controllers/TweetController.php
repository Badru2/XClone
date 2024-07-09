<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'nullable|mimes:jpeg,png,jpg,webp,gif,svg',
            'content' => 'nullable|max:400',
        ]);

        $file = $request->file('file');

        if ($file) {
            $file->storeAs('public/tweets', $file->hashName());
            $filePath = $file->hashName();
        } else {
            $filePath = null;
        }

        Tweet::create([
            'user_id' => Auth::id(),
            'file' => $filePath,
            'content' => request('content'),
        ]);

        return redirect()->back();
    }
}
