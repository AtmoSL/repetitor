<?php

namespace App\Http\Repositories;

use App\Models\Landing\LandingReview;

class LandingReviewRepository extends CoreRepository{

    protected function getModelClass(){
        return LandingReview::class;
    }

    public function getAllForCarousel()
    {
        $result = $this
        ->startCondition()
        ->select('*') //Беру все поля
        ->orderBy('id','DESC') //Сначала новые
        ->with(['subject']) //Берём всю информацию из связанных таблиц
        ->get();

        return $result;
    }



}