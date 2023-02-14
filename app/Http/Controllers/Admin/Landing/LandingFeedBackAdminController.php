<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Models\Landing\FeedBack\LandingFeedBack;
use App\Models\Landing\FeedBack\LandingFeedBackClass;
use App\Models\Landing\FeedBack\LandingFeedBackFormat;
use App\Models\Landing\FeedBack\LandingFeedBackStatus;
use App\Models\Landing\FeedBack\LandingFeedBackSubject;
use App\Models\Landing\FeedBack\LandingFeedBackTarget;
use Illuminate\Http\Request;

class LandingFeedBackAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedBacks = LandingFeedBack::paginate(5);
        $classes = LandingFeedBackClass::all();
        $subjects = LandingFeedBackSubject::all();
        $targets = LandingFeedBackTarget::all();
        $formats = LandingFeedBackFormat::all();
        $statuses = LandingFeedBackStatus::all();

        return view('admin.landing.feedback.index', compact('feedBacks','classes','subjects','targets','formats', 'statuses'));

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
