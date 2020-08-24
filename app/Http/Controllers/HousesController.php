<?php

namespace App\Http\Controllers;


use App\HousesModel;
use Illuminate\Http\Request;

class HousesController extends Controller
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
        //take me to upload form
        return view('formuploads.formupload');

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
        $house = new HousesModel;
        $house->uploadtype = request('uploadHouse');
        $house->name = request('fullname');
        $house->email = request('email');
        $house->phone = request('phone');
        $house->website = request('web');
        $house->houseType = request('propType');
        $house->houseLocation = request('location');
        $house->housePriceLimit = request('pricelimit');
        $house->houseStatus = request('propstatus');
        $house->houseBeds = request('numberofbeds');
        $house->houseBaths = request('numberofbaths');
        $house->houseSize = request('sizeofhouse');
        $house->houseDescription = request('description');
        
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

        $house->images=json_encode($data);

        $house->save();
        //return
return redirect('/uploadchoice')->with('message', 'Your House profile has been successfully submitted to HutFarm');
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
