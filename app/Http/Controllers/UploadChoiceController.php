<?php

namespace App\Http\Controllers;

use App\UploadChoice;
use Illuminate\Http\Request;

class UploadChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //launch home view : this name references the blade file
       //returning all data 
        $users = UploadChoice::all();
        //take me to profiles listing
        return view('uploadchoice.uploadchoice',['users' => $users]);
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
     * @param  \App\UploadChoice  $uploadChoice
     * @return \Illuminate\Http\Response
     */
    public function show(UploadChoice $uploadChoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UploadChoice  $uploadChoice
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadChoice $uploadChoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UploadChoice  $uploadChoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadChoice $uploadChoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UploadChoice  $uploadChoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadChoice $uploadChoice)
    {
        //
    }
}
