<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectsRequest;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('home');
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
    public function store(ProjectsRequest $request)
    {
    	// file upload
    	if ($request->hasFile('image_path') && $request->hasFile('sound_path')) {
    		$imgfile = $request->file('image_path');
    		$imgname = str_random().filter_var($imgfile->getClientOriginalName(), FILTER_SANITIZE_URL);
    		$imgfile->move(\App\Project::attachments_path('storage/uploads/album_img'), $imgname);

    		$soundfile = $request->file('sound_path');
    		$soundname = str_random().filter_var($soundfile->getClientOriginalName(), FILTER_SANITIZE_URL);
    		$soundfile->move(\App\Project::attachments_path('storage/uploads/album_sound'), $soundname);

    		// Database upload
    		$project = auth()->user()->projects()->create($request->all());

    		if ($project) {
    			return redirect(route('home'))->with('flash_message', '프로젝트가 등록되었습니다.');
    		}
    	}

    	return back()->with('flash_message', '프로젝트가 등록되지 않습니다.')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
