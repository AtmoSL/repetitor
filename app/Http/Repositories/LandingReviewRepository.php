<?php

namespace App\Http\Repositories;

use App\Models\Landing\LandingReview;

class LandingReviewRepository extends CoreRepository{

    protected function getModelClass(){
        return LandingReview::class;
    }

    public function getAllForCarousel()
    {

        //ToDo Сделать нормальную выборку полей и ограничение, чтобы вытаскивались только публикующиеся поля    .

        $result = $this
        ->startCondition()
        ->select('*') //Беру все поля
        ->orderBy('id','DESC') //Сначала новые
        ->with(['subject']) //Берём всю информацию из связанных таблиц
        ->get();

        return $result;
    }

    public function getAllWithPaginate($items)
    {

        //ToDo Сделать нормальную выборку полей и ограничение, чтобы вытаскивались только публикующиеся поля и вынести это в отдельный метод.

        $result = $this
        ->startCondition()
        ->select('*') //Беру все поля
        ->orderBy('id','DESC') //Сначала новые
        ->with(['subject']) //Берём всю информацию из связанных таблиц
        ->paginate($items);

        return $result;
    }



}