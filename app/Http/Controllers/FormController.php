<?php

namespace App\Http\Controllers;

use App\FormModel;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
          //take me to houses upload
        return view('formuploads.formupload');

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
     * @param  \App\FormModel  $formModel
     * @return \Illuminate\Http\Response
     */
    public function show(FormModel $formModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormModel  $formModel
     * @return \Illuminate\Http\Response
     */
    public function edit(FormModel $formModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormModel  $formModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormModel $formModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormModel  $formModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormModel $formModel)
    {
        //
    }


       public function uploadingForm()
    {
 
        
        //take me to profile form
        return view('formuploads.formupload');

    }

           public function formArchi()
    {
     
        //take me to architects form
        return view('formuploads.formArchitecture');

    }

             public function formCompany()
    {
                
        //take me to company form
        return view('formuploads.formCompanies');

    }

        public function formBlog()
    {
        
        //take me to blogging form
        return view('formuploads.formBloging');
    }


}
