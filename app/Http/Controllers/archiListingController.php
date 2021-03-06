<?php

namespace App\Http\Controllers;

use App\archiListingModel;
use Illuminate\Http\Request;

class archiListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $archi_pieces = archiListingModel::select('id','name','email','phone','website','images','architectureName','architectureDesc')->where('uploadtype','Architecture')->get();
        return view('listings.archiListing',['archi_pieces' => $archi_pieces]);
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
     * @param  \App\archiListingModel  $archiListingModel
     * @return \Illuminate\Http\Response
     */
    public function show(archiListingModel $archiListingModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\archiListingModel  $archiListingModel
     * @return \Illuminate\Http\Response
     */
    public function edit(archiListingModel $archiListingModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\archiListingModel  $archiListingModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, archiListingModel $archiListingModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\archiListingModel  $archiListingModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(archiListingModel $archiListingModel)
    {
        //
    }

       public function archiDetails($id){
          $archi_pieces = archiListingModel::find($id);
        return view('listings.archiDetails',compact('archi_pieces'));
    }
}
     
