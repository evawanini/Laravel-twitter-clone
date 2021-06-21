<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::latest()->get();
        return view('dashboard', ['tweets' => $tweets]);
    }

    public function create()
    {
        return view('timeline_tweet');
    }

    public function store()
    {
        $tweetbody = request()->validate([
            'body' => 'required'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $tweetbody['body']
        ]);

        return redirect('/dashboard');
    }

    public function show($id)
    {
        $tweets = Tweet::find($id);
        return view('dashboard', ['tweets' => $tweets]);
    }
}
