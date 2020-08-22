<?php

namespace App\Http\Controllers;

use App\ListingChoiceModel;
use Illuminate\Http\Request;

class ListingChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return view('uploadchoice.listingChoice');
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
     * @param  \App\ListingChoiceModel  $listingChoiceModel
     * @return \Illuminate\Http\Response
     */
    public function show(ListingChoiceModel $listingChoiceModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListingChoiceModel  $listingChoiceModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ListingChoiceModel $listingChoiceModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListingChoiceModel  $listingChoiceModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListingChoiceModel $listingChoiceModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListingChoiceModel  $listingChoiceModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingChoiceModel $listingChoiceModel)
    {
        //
    }
}
