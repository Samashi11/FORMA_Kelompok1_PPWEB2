<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
	public function indexHome()
	{
		$events = Event::all();

		return view('dashboard', compact('events'));
	}
	public function index()
	{
		$events = Event::all();

		return view('event', compact('events'));
	}
	public function show($id)
	{
		$event = Event::findOrFail($id);

		return view('event-detail', compact('event'));
	}
}
