<?php

namespace App\Http\Controllers;

use App\blogingListingModel;
use Illuminate\Http\Request;

class blogingListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $blog_pieces = blogingListingModel::select('id','name','email','phone','website','images','blogTitle','blogDescription')->where('uploadtype','Blog')->get();
        return view('listings.blogListings',['blog_pieces' => $blog_pieces]);

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
     * @param  \App\blogingListingModel  $blogingListingModel
     * @return \Illuminate\Http\Response
     */
    public function show(blogingListingModel $blogingListingModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogingListingModel  $blogingListingModel
     * @return \Illuminate\Http\Response
     */
    public function edit(blogingListingModel $blogingListingModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogingListingModel  $blogingListingModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogingListingModel $blogingListingModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogingListingModel  $blogingListingModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogingListingModel $blogingListingModel)
    {
        //
    }

      public function blogDetails($id){

            $blog_pieces = blogingListingModel::find($id);
        return view('listings.blogDetails',compact('blog_pieces'));
    }
}
