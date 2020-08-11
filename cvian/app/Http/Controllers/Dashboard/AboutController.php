<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\About;
use Validator;
class AboutController extends Controller
{

	public function aboutfrontend()
	{
		$abouts = About::active()->get();
		return view('frontend.abouts', compact('abouts'));
	}

	public function index()
	{
		$abouts = About::active()->get();
		$aboutsActivates = About::inactive()->get();

		return view('backend.abouts.index', compact('abouts', 'aboutsActivates'));
	}

	public function store()
	{
		$this->validate(request(), [
			'first_name' => 'required|min:3',
			'middle_name' => 'required|min:3',
			'last_name' => 'required|min:3',
			'position' => 'required|min:3:',
			'num_phone' => 'required|min:10',
			'email' => 'required|email',
			'file_img' => 'sometimes|file|image',
		]);
		if (request()->hasFile('file_img')) {
			$file = request()->file('file_img');
			$filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
			$file->move('uploads/',$filename);
		}else{
			$filename = '';
		}
		About::create([
			'name_first' => request('first_name'),
			'name_middle' => request('middle_name'),
			'name_last' => request('last_name'),
			'designation' => request('position'),
			'phone_num' => request('num_phone'),
			'email' => request('email'),
			'image' =>$filename,
		]);

		return back();
	}

	public function update(About $id)
	{
		$this->validate(request(), [
			'update_first_name' => 'required|min:3',
			'update_middle_name' => 'required|min:3',
			'update_last_name' => 'required|min:3',
			'update_position' => 'required|min:3:',
			'update_num_phone' => 'required|min:10',
			'update_email' => 'required|email',
			'update_file_img' => 'sometimes|file|image',
		]);
		$abouts = About::where('id',$id->id)->first();
		if (request()->hasFile('update_file_img')) {
			$file = request()->file('update_file_img');
			$filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
			$file->move('uploads/',$filename);
		}else{
			$filename = $abouts->image ;
		}
		$abouts -> name_first = request('update_first_name');
		$abouts -> name_middle = request('update_middle_name');
		$abouts -> name_last = request('update_last_name');
		$abouts -> designation = request('update_position');
		$abouts -> phone_num = request('update_num_phone');
		$abouts -> email = request('update_email');
		$abouts -> image = $filename;
		$abouts->save();

		return back();
	}

	public function deactivate(About $id)
	{
		$abouts = About::where('id', $id->id)->first();
		$abouts -> status = 0;
		$abouts -> save();

		return back();
	}

	public function activate(About $id)
	{
		$abouts = About::where('id', $id->id)->first();
		$abouts -> status = 1;
		$abouts -> save();

		return back();
	}

}
