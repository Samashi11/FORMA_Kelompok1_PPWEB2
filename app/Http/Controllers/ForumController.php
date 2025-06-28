<?php

namespace App\Http\Controllers;
use App\Models\Forum;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $Forums = Forum::all();

        return view('forum', compact('Forums'));
    }
}
