<?php

namespace App\Http\Controllers;
use App\ArchitectureModel;
use Illuminate\Http\Request;

class ArchitectureController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
          //take me to houses upload
        return view('formuploads.formArchitecture');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //take me to upload form
        return view('formuploads.formArchitecture');

    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
    'my_file' => 'required',
    'my_file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

        //storing new upload
        $architecture = new ArchitectureModel;
        $architecture->uploadtype = request('uploadArchi');
        $architecture->name = request('archiname');
        $architecture->email = request('emailarchi');
        $architecture->phone = request('phonearchi');
        $architecture->website = request('archiweb');
        $architecture->architectureName = request('piecename');
        $architecture->architectureDesc = request('descriptionArchi');
        
        //image upload
        if ($request->hasfile('my_file')) {
            # code...
            foreach ($request->file('my_file') as $image) {
                # code...
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/architectureimages',$name);
                $data[] = $name;
            }
        }

        $architecture->images=json_encode($data);

        $architecture->save();
        //return
return redirect('/uploadchoice')->with('message', 'Your architecture post has been successfully submitted to HutFarm'); 
    }

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
