<?php

namespace App\Http\Controllers\Admin\Landing;

use App\Http\Controllers\Controller;
use App\Http\Repositories\LandingFeedBackSubjectRepository;
use App\Http\Repositories\LandingReviewRepository;
use App\Http\Requests\Admin\Landing\LandingReviewCreateRequest;
use App\Http\Requests\Admin\Landing\LandingReviewUpdateRequest;
use App\Models\Landing\LandingReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $review = new LandingReview();
        $subjects = $this->landingFeedbackSubjectRepository->getAllForSelect();

        return view('admin.landing.reviews.create', compact('review', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LandingReviewCreateRequest $request)
    {
        $data = $request->all();

        $file = Storage::putFile('public/img/reviews', $request->photo);

        $data['photo_path'] = $request->photo->hashName();

        $review = new LandingReview($data);

        $review->save();

        if ($review) {
            return redirect()
                ->route('admin.landing.reviews.edit', $review->id)
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
    public function update(LandingReviewUpdateRequest $request, $id)
    {
        $review = LandingReview::find($id);
        if (empty($review)) {
            return back()
                ->withErrors(['msg' => "Запись id=[{$id}] не найдена"])
                ->withInput();
        }

        $data = $request->all();

        if ($request->photo) {
            $file = Storage::putFile('public/img/reviews', $request->photo);

            if ($file) {
                Storage::delete('public/img/reviews/' . $review->photo_path);
            } else {
                return back()
                    ->withErrors(['msg' => "Ошибка сохранения файла"])
                    ->withInput();
            }

            $data['photo_path'] = $request->photo->hashName();
        }

        $result = $review->update($data);

        if ($result) {
            return redirect()
                ->route('admin.landing.reviews.edit', $review->id)
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => "Ошибка сохранения"])
                ->withInput();
        }
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
