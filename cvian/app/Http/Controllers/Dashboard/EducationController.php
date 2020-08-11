<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Education;

class EducationController extends Controller
{

	public function educationfrontend()
	{
		$educations = Education::active()->get();
		return view('frontend.educations', compact('educations'));
	}

	public function index()
	{
		$educations = Education::active()->get();
		$educationsActivates = Education::inactive()->get();

		return view('backend.educations.index', compact('educations', 'educationsActivates'));
	}

	public function store()
	{

		$this->validate(request(), [
			'educations_date' => 'required|date',
			'educations_course' => 'required',
			'educations_school' => 'required',
			'educations_description' => 'required|min:12',
			'educations_image' => 'sometimes|file|image',
		]);
		if (request()->hasFile('educations_image')) {
			$file = request()->file('educations_image');
			$filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
			$file->move('uploads/',$filename);
		}else{
			$filename = '';
		}
		Education::create([
			'date_education' => request('educations_date'),
			'course_education' => request('educations_course'),
			'school_education' => request('educations_school'),
			'description_education' => request('educations_description'),
			'image_education' =>$filename,
		]);
return back();
	}

	public function update(Education $id)
	{
		$this->validate(request(), [
			'update_educations_date' => 'required|date',
			'update_educations_course' => 'required',
			'update_educations_school' => 'required',
			'update_educations_description' => 'required|min:12',
			'update_educations_image' => 'sometimes|file|image',
		]);
		$educations = Education::where('id', $id->id)->first();
		if (request()->hasFile('update_educations_image')) {
			$file = request()->file('update_educations_image');
			$filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
			$file->move('uploads/',$filename);
		}else{
			$filename = $educations->image_education ;
		}
		$educations -> date_education = request('update_educations_date');
		$educations -> course_education = request('update_educations_course');
		$educations -> school_education = request('update_educations_school');
		$educations -> description_education = request('update_educations_description');
		$educations -> image_education = $filename;
		$educations -> save();

		return back();
	}

	public function deactivate(Education $id)
	{
		$educations = Education::where('id', $id->id)->first();
		$educations -> status = 0;
		$educations -> save();

		return back();
	}

	public function activate(Education $id)
	{
		$educationsActivates = Education::where('id', $id->id)->first();
		$educationsActivates -> status = 1;
		$educationsActivates -> save();

		return back();
	}
}
