<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\Dashboard\Portfolio;
use App\Model\Dashboard\PortfolioType;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function portfoliofrontend()
  {
    $portfolios = Portfolio::active()->get();
    return view('frontend.portfolios', compact('portfolios'));
  }

  public function index()
  {
    $portfolios = Portfolio::active()->get();
    $portfoliosActivates = Portfolio::inactive()->get();
    $portfoliotypes = PortfolioType::all();

    return view('backend.portfolios.index', compact('portfolios', 'portfoliosActivates', 'portfoliotypes'));
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
      'portfolio_image' => 'sometimes|file|image|max:5000',
      'portfolio_name' => 'required',
      'portfolio_types' => 'required',
    ]);
    if (request()->hasFile('portfolio_image')) {
      $file = request()->file('portfolio_image');
      $filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
      $file->move('uploads/',$filename);
    }else{
      $filename = '';
    }
    Portfolio::create([
      'image_portfolio' => $filename,
      'name_portfolio' => request('portfolio_name'),
      'types_portfolio' => request('portfolio_types'),
    ]);

    return back();
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Model\Dashboard\Portfolio  $portfolio
  * @return \Illuminate\Http\Response
  */
  public function show(Portfolio $portfolio)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Model\Dashboard\Portfolio  $portfolio
  * @return \Illuminate\Http\Response
  */
  public function edit(Portfolio $portfolio)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Model\Dashboard\Portfolio  $portfolio
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Portfolio $id)
  {
    $this->validate(request(), [
      'update_portfolio_image' => 'sometimes|file|image|max:5000',
      'update_portfolio_name' => 'required',
      'update_portfolio_types' => 'required',
    ]);
    $portfolios = Portfolio::where('id', $id->id)->first();
    if (request()->hasFile('update_portfolio_image')) {
      $file = request()->file('update_portfolio_image');
      $filename = md5($file->getClientOriginalName().time()) . "." . $file->getClientOriginalExtension();
      $file->move('uploads/',$filename);
    }else{
      $filename = $portfolios->image_portfolio ;
    }

    $portfolios -> image_portfolio =  $filename;
    $portfolios -> name_portfolio = request('update_portfolio_name');
    $portfolios -> types_portfolio = request('update_portfolio_types');
    $portfolios -> save();

    return back();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Model\Dashboard\Portfolio  $portfolio
  * @return \Illuminate\Http\Response
  */
  public function destroy(Portfolio $portfolio)
  {
    //
  }

  public function deactivate(Portfolio $id)
  {
    $portfolios = Portfolio::where('id', $id->id)->first();
    $portfolios -> status = 0;
    $portfolios -> save();

    return back();
  }

  public function activate(Portfolio $id)
  {
    $portfoliosActivates = Portfolio::where('id', $id->id)->first();
    $portfoliosActivates -> status = 1;
    $portfoliosActivates -> save();

    return back();
  }


}
