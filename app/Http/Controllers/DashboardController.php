<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        $events = Event::all();

        return view('dashboard', compact('organizations', 'events'));
    }

    public function indexHome()
    {
        $organizations = Organization::all();
        $events = Event::all();

        return view('landings', compact('organizations', 'events'));
    }
}
