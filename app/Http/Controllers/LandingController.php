<?php

namespace App\Http\Controllers;

use App\LandingModel;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //returning welcome page
        return view('welcome');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LandingModel  $landingModel
     * @return \Illuminate\Http\Response
     */
    public function show(LandingModel $landingModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LandingModel  $landingModel
     * @return \Illuminate\Http\Response
     */
    public function edit(LandingModel $landingModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LandingModel  $landingModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingModel $landingModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LandingModel  $landingModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandingModel $landingModel)
    {
        //
    }
}
