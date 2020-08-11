<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\Dashboard\ServiceTypeIcon;
use App\Model\Dashboard\Service;
use Illuminate\Http\Request;

class ServiceTypeIconController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $servicetypes = ServiceTypeIcon::active()->get();
    $servicetypesActivates = ServiceTypeIcon::inactive()->get();

    return view('backend.services_types.index', compact('servicetypes', 'servicetypesActivates'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate(request(), [
      'name_servicetype' => 'required',
      'iconimage_servicetype' => 'sometimes|file|image|max:5000',
    ]);
    if (request()->hasFile('iconimage_servicetype')) {
      $file = request()->file('iconimage_servicetype');
      $filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
      $file->move('uploads/',$filename);
    }else{
      $filename = '';
    }
    ServiceTypeIcon::create([
      'servicetypename' => request('name_servicetype'),
      'servicetypeiconimage' =>$filename,
    ]);

    return back();

  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Model\Dashboard\ServiceTypeIcon  $serviceTypeIcon
  * @return \Illuminate\Http\Response
  */
  public function show(ServiceTypeIcon $serviceTypeIcon)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Model\Dashboard\ServiceTypeIcon  $serviceTypeIcon
  * @return \Illuminate\Http\Response
  */
  public function edit(ServiceTypeIcon $serviceTypeIcon)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Model\Dashboard\ServiceTypeIcon  $serviceTypeIcon
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, ServiceTypeIcon $serviceTypeIcon)
  {
    $this->validate(request(), [
      'update_iconimage_servicetype' => 'sometimes|file|image|max:5000',
      'update_name_servicetype' => 'required',
    ]);
    $servicetypes = ServiceTypeIcon::where('id',$id->id)->first();
    if (request()->hasFile('update_iconimage_servicetype')) {
      $file = request()->file('update_iconimage_servicetype');
      $filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
      $file->move('uploads/',$filename);
    }else{
      $filename = $servicetypes->servicetypeiconimage ;
    }
    $servicetypes -> servicetypeiconimage = $filename;
    $servicetypes -> servicetypename = request('update_name_servicetype');
    $servicetypes->save();

    return back();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Model\Dashboard\ServiceTypeIcon  $serviceTypeIcon
  * @return \Illuminate\Http\Response
  */
  public function destroy(ServiceTypeIcon $serviceTypeIcon)
  {
    //
  }

  public function deactivate(ServiceTypeIcon $id)
  {
    $servicetypes = ServiceTypeIcon::where('id', $id->id)->first();
    $servicetypes -> status = 0;
    $servicetypes -> save();

    return back();
  }

  public function activate(ServiceTypeIcon $id)
  {
    $servicetypes = ServiceTypeIcon::where('id', $id->id)->first();
    $servicetypes -> status = 1;
    $servicetypes -> save();

    return back();
  }
}
