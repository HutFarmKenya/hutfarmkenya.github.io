<?php

namespace App\Http\Controllers;

use App\companyListingModel;
use Illuminate\Http\Request;

class companyListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                return view('listings.companiesListing');

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
     * @param  \App\companyListingModel  $companyListingModel
     * @return \Illuminate\Http\Response
     */
    public function show(companyListingModel $companyListingModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\companyListingModel  $companyListingModel
     * @return \Illuminate\Http\Response
     */
    public function edit(companyListingModel $companyListingModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companyListingModel  $companyListingModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, companyListingModel $companyListingModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\companyListingModel  $companyListingModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(companyListingModel $companyListingModel)
    {
        //
    }

       public function companyDetails(){
        return view('listings.companyDetails');
    }
}
