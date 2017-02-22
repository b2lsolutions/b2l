<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobposts;
use View;

class JobpostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobposts = jobposts::all();

        return View::make('Jobposts.index',['$jobposts' => 'jobposts']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobposts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
             $this->validate($request, array(
                'job_title' => 'required|max:255',
                'job_type' => 'required',
                'designation' => 'required|max:255',
                'qualification' => 'required',
                'job_location' => 'required',
                'experience' => 'required',
                'skills' => 'required',
                'job_description' => 'required|max:1024',
                'job_condition' => 'required|max:1024',
                'salary' => 'required',
                'last_date_for_application' => 'required',
                'number_of_vacanies' => 'required', 

                ));
        //store the date
          /*$jobposts = new jobposts;

          $jobposts->job_title = $request->job_title;
          $jobposts->job_type = $request->job_type;
          $jobposts->designation = $request->designation;
          $jobposts->qualification = $request->qualification;
          $jobposts->job_location = $request->job_location;
          $jobposts->experience = $request->experience;
          $jobposts->skills = $request->skills;
          $jobposts->job_description = $request->job_description;
          $jobposts->job_condition = $request->job_condition;
          $jobposts->salary = $request->salary;
          $jobposts->last_date_for_application = $request->last_date_for_application;
          $jobposts->number_of_vacanies = $request->number_of_vacanies;
        //redirect to another page
          return redirect()->route('post.show',$jobposts->id); */

          $jobposts = new Jobposts;
          Jobposts::create($request->all());


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobposts = jobposts::find($id);

        return View ('jobposts.show') -> with('jobposts', $hello);
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
