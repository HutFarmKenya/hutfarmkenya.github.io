<?php

namespace App\Http\Controllers;

use App\CompanyModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
          //take me to houses upload
        return view('formuploads.formCompanies');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //take me to upload form
        return view('formuploads.formCompanies');

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

        $this->validate($request, [
    'my_file' => 'required',
    'my_file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

        //storing new upload
        $company = new CompanyModel;
        $company->uploadtype = request('uploadCompany');
        $company->name = request('companyName');
        $company->email = request('companyemail');
        $company->phone = request('companyphone');
        $company->website = request('companyWeb');
        $company->companyServiceName = request('serviceName');
        $company->companyServiceDescription = request('serviceDescription');
        
        //image upload
        if ($request->hasfile('my_file')) {
            # code...
            foreach ($request->file('my_file') as $image) {
                # code...
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/uploadImages',$name);
                $data[] = $name;
            }
        }

        $company->images=json_encode($data);

        $company->save();
        //return
return redirect('/uploadchoice')->with('message', 'Your Company profile has been successfully submitted to HutFarm');
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
}
