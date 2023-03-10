<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LandingReviewRepository;
use App\Models\Landing\FeedBack\LandingFeedBack;
use App\Models\Landing\FeedBack\LandingFeedBackClass;
use App\Models\Landing\FeedBack\LandingFeedBackFormat;
use App\Models\Landing\FeedBack\LandingFeedBackSubject;
use App\Models\Landing\FeedBack\LandingFeedBackTarget;
use App\Models\Landing\LandingReview;
use Illuminate\Http\Request;

class LandingController extends BaseLadningController
{
    
    private $landingReviewRepository;

    public function __construct()
    {
        $this->landingReviewRepository = app(LandingReviewRepository::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedBack = new LandingFeedBack();
        $classList = LandingFeedBackClass::all();
        $subjectList = LandingFeedBackSubject::all();
        $targetList = LandingFeedBackTarget::all();
        $formatList = LandingFeedBackFormat::all();

        $reviews = $this->landingReviewRepository->getAllForCarousel();

        return view('landing.index', compact('feedBack','classList','subjectList','targetList','formatList', 'reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        
        $item = new LandingFeedBack($data);
        $item->save();

        if ($item) {
            return redirect()
                ->route('index')
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => "Ошибка сохранения"])
                ->withInput();
        }
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
