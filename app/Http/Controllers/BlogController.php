<?php

namespace App\Http\Controllers;

use App\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
          //take me to houses upload
        return view('formuploads.formBloging');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //take me to upload form
        return view('formuploads.formBloging');

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
        $blog = new BlogModel;
        $blog->uploadtype = request('uploadBlog');
        $blog->name = request('bloggername');
        $blog->email = request('blogemail');
        $blog->phone = request('blogphone');
        $blog->website = request('blogweb');
        $blog->blogTitle = request('blogtitle');
        $blog->blogDescription = request('blogpiece');
        
        //image upload
        if ($request->hasfile('my_file')) {
            # code...
            foreach ($request->file('my_file') as $image) {
                # code...
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/blogimages',$name);
                $data[] = $name;
            }
        }

        $blog->images=json_encode($data);

        $blog->save();
        //return
return redirect('/uploadchoice')->with('message', 'Your Blog piece has been successfully submitted to HutFarm'); 
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
