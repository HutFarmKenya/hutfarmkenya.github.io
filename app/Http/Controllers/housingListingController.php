<?php

namespace App\Http\Controllers;

use App\housingListingModel;
use Illuminate\Http\Request;

class housingListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                return view('listings.housingListing');

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
     * @param  \App\housingListingModel  $housingListingModel
     * @return \Illuminate\Http\Response
     */
    public function show(housingListingModel $housingListingModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\housingListingModel  $housingListingModel
     * @return \Illuminate\Http\Response
     */
    public function edit(housingListingModel $housingListingModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\housingListingModel  $housingListingModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, housingListingModel $housingListingModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\housingListingModel  $housingListingModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(housingListingModel $housingListingModel)
    {
        //
    }

    public function housingDetails(){
        return view('listings.houseDetails');
    }
}
