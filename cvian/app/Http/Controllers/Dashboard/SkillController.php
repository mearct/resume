<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Skill;
use Validator;

class SkillController extends Controller
{

	public function skillfrontend()
	{
		$skills = Skill::active()->get();
		return view('frontend.skills', compact('skills'));
	}

	public function index()
	{
		$skills = Skill::active()->get();
		$skillsActivates = Skill::active()->get();

		return view('backend.skills.index', compact('skills', 'skillsActivates'));
	}

	public function store()
	{
		$this->validate(request(), [
			'name_skill' => 'required|min:3',
			'percentages_skill' => 'required',
			'description_skill' => 'required|min:12',
		]);
		Skill::create([
			'skill_name' => request('name_skill'),
			'skill_percentages' => request('percentages_skill'),
			'skill_description' => request('description_skill'),
		]);

		return back();
	}

	public function update(Skill $id)
	{
		$this->validate(request(), [
			'update_name_skill' => 'required|min:3',
			'update_percentages_skill' => 'required',
			'update_description_skill' => 'required|min:12',
		]);
		$skills = Skill::where('id', $id->id)->first();
		$skills -> skill_name = request('update_name_skill');
		$skills -> skill_percentages = request('update_percentages_skill');
		$skills -> skill_description = request('update_description_skill');
		$skills -> save();

		return back();
	}

	public function deactivate(Skill $id)
	{
		$skills = Skill::where('id', $id->id)->first();
		$skills -> status = 0;
		$skills -> save();

		return back();
	}

	public function activate(Skill $id)
	{
		$skillsActivates = Skill::where('id', $id->id)->first();
		$skillsActivates -> status = 1;
		$skillsActivates -> save();

		return back();
	}
}
