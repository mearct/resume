<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\Dashboard\PortfolioType;
use Illuminate\Http\Request;

class PortfolioTypeController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */


  public function index()
  {
    $portfoliotypes = PortfolioType::active()->get();
    $portfoliotypesActivates = PortfolioType::inactive()->get();

    return view('backend.portfolios_types.index', compact('portfoliotypes', 'portfoliotypesActivates'));
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

    $data = request()->validate([
      'name_types'  => 'required',
    ]);

    PortfolioType::create($data);

    return redirect()->back();
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Model\Dashboard\PortfolioType  $portfolioType
  * @return \Illuminate\Http\Response
  */
  public function show(PortfolioType $portfolioType)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Model\Dashboard\PortfolioType  $portfolioType
  * @return \Illuminate\Http\Response
  */
  public function edit(PortfolioType $portfolioType)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Model\Dashboard\PortfolioType  $portfolioType
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, PortfolioType $portfoliotype)
  {
    $data = request()->validate([
      'name_types'  => 'required',
    ]);

    $portfoliotype->update($data);
    return back();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Model\Dashboard\PortfolioType  $portfolioType
  * @return \Illuminate\Http\Response
  */
  public function destroy(PortfolioType $portfoliotype)
  {
    //
  }

  public function deactivate(PortfolioType $id)
  {
    // PortfolioType::where('status', 1)
    // ->update(['status' => 0]) ;
    $portfoliotypesActivates = PortfolioType::where('id', $id->id)->first();
    $portfoliotypesActivates -> status = 0;
    $portfoliotypesActivates -> save();


    return back();
  }

  public function activate(PortfolioType  $id)
  {
    $portfoliotypesActivates = PortfolioType::where('id', $id->id)->first();
    $portfoliotypesActivates -> status = 1;
    $portfoliotypesActivates -> save();




    return back();
  }
}
