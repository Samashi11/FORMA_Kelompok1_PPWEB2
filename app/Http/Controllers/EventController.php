<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Organization;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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

	public function create()
	{
		$organizations = Organization::all(); // Ambil semua organisasi untuk dropdown

		return view('create-event', compact('organizations'));
	}


	public function store(Request $request)
	{
		$validated = $request->validate([
			'title' => 'required|string|max:255',
			'description' => 'required|string',
			'pembicara' => 'required|string|max:255', // Validasi untuk pembicara
			'location' => 'required|string|max:255',
			'organization' => 'nullable|string|max:255',
			'event_date' => 'required|date',
			'poster' => 'nullable|file|mimes:png,jpg,gif|max:10240',
		]);

		// Rename key sesuai kolom tabel (misal: event_title)
		$data = [
			'title' => $validated['title'],
			'description' => $validated['description'],
			'location' => $validated['location'],
			'pembicara' => $validated['pembicara'], // Tambahkan pembicara ke data
			'organization_id' => $validated['organization'] ?? null,
			'event_date' => $validated['event_date'],
			'created_by' => Auth::id(), // Ambil ID user yang membuat event
		];

		// Handle file jika ada
		if ($request->hasFile('poster')) {
			$filePath = $request->file('poster')->store('public/event_posters');
			$data['file_path'] = $filePath; // Pastikan kolom ini ada di tabel events
		}

		// Simpan data
		$event = Event::create($data);

		return redirect()->route('event', $event);
	}

}
