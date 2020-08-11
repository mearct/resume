<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dashboard\Service;
use App\Model\Dashboard\ServiceTypeIcon;


class ServiceController extends Controller
{

	public function servicefrontend()
	{
		$services = Service::active()->get();
		return view('frontend.services', compact('services'));
	}

	public function index()
	{
		$services = Service::active()->get();
		$servicesActivates = Service::inactive()->get();
		$servicetypes = ServiceTypeIcon::all();

		return view('backend.services.index', compact('services', 'servicesActivates', 'servicetypes'));
	}

	public function store()
	{
		$data = request()->validate([
			'services_name' => 'required|min:3',
			'services_description' => 'required|min:5',
			'services_typeid' => 'required',
		]);
		Service::create($data);

		return redirect()->back();
	}

	public function update(Service $service)
	{
		$data = request()->validate([
			'services_name' => 'required|min:3',
			'services_description' => 'required|min:5',
			'services_typeid' => 'required',
		]);

		$service->update($data);

		return back();
	}

	public function deactivate(Service $id)
	{
		$services = Service::where('id', $id->id)->first();
		$services -> status = 0;
		$services -> save();

		return back();
	}

	public function activate(Service $id)
	{
		$servicesActivates = Service::where('id', $id->id)->first();
		$servicesActivates -> status = 1;
		$servicesActivates -> save();

		return back();
	}
}
