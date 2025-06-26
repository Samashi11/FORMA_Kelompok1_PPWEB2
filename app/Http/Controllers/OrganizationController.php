<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
	public function indexHome()
	{
		$organizations = Organization::all();

		return view('dashboard', compact('organizations'));
	}
	public function index()
	{
		$organizations = Organization::all();

		return view('organization', compact('organizations'));
	}
	public function show($id)
	{
		$organizations = Organization::findOrFail($id);

		return view('organization-detail', compact('organizations'));
	}

}
