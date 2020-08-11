<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Experience;

class ExperienceController extends Controller
{

	public function experiencefrontend()
	{
		$experiences = Experience::active()->get();
		return view('frontend.experiences', compact('experiences'));
	}

	public function index()
	{
		$experiences = Experience::active()->get();
		$experiencesActivates = Experience::inactive()->get();

		return view('backend.experiences.index', compact('experiences', 'experiencesActivates'));
	}

	public function store()
	{
		$this->validate(request(), [
			'date_start_experiences' => 'required|date',
			'date_end_experiences' => 'required|date',
			'designation_experiences' => 'required|min:3',
			'company_experiences' => 'required|min:3',
			'description_experiences' => 'required|min:12',
		]);
		Experience::create([
			'experiences_date_start' => request('date_start_experiences'),
			'experiences_date_end' => request('date_end_experiences'),
			'experiences_designation' => request('designation_experiences'),
			'experiences_company' => request('company_experiences'),
			'experiences_description' => request('description_experiences'),
		]);

		return back();
	}

	public function update(Experience $id)
	{
		$this->validate(request(), [
			'update_date_start_experiences' => 'required|date',
			'update_date_end_experiences' => 'required|date',
			'update_designation_experiences' => 'required|min:3',
			'update_company_experiences' => 'required|min:3',
			'update_description_experiences' => 'required|min:12',
		]);
		$experiences = Experience::where('id', $id->id)->first();
		$experiences -> experiences_date_start = request('update_date_start_experiences');
		$experiences -> experiences_date_end = request('update_date_end_experiences');
		$experiences -> experiences_designation = request('update_designation_experiences');
		$experiences -> experiences_company = request('update_company_experiences');
		$experiences -> experiences_description = request('update_description_experiences');
		$experiences -> save();

		return back();
	}

	public function deactivate(Experience $id)
	{
		$experiences = Experience::where('id', $id->id)->first();
		$experiences -> status = 0;
		$experiences -> save();

		return back();
	}

	public function activate(Experience $id)
	{
		$experiencesActivates = Experience::where('id', $id->id)->first();
		$experiencesActivates -> status = 1;
		$experiencesActivates -> save();

		return back();
	}
}
