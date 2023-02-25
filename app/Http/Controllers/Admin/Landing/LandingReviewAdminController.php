<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LandingFeedBackSubjectRepository;
use App\Http\Repositories\LandingReviewRepository;
use App\Models\Landing\LandingReview;
use Illuminate\Http\Request;

class LandingReviewAdminController extends Controller
{
    
    private $landingReviewRepository;
    private $landingFeedbackSubjectRepository;

    public function __construct()
    {
        $this->landingReviewRepository = app(LandingReviewRepository::class);
        $this->landingFeedbackSubjectRepository = app(LandingFeedBackSubjectRepository::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = $this->landingReviewRepository->getAllWithPaginate(5);
        return view('admin.landing.reviews.index', compact('reviews'));
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
        $review = LandingReview::find($id);
        $subjects = $this->landingFeedbackSubjectRepository->getAllForSelect();

        return view('admin.landing.reviews.edit', compact('review', 'subjects'));
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
