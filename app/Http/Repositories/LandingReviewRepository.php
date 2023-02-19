<?php

namespace App\Http\Repositories;

use App\Models\Landing\LandingReview;

class LandingReviewRepository extends CoreRepository{

    protected function getModelClass(){
        return LandingReview::class;
    }

    public function getAllForCarousel()
    {

        //ToDo Сделать нормальную выборку полей

        $result = $this
        ->startCondition()
        ->select('*') //Беру все поля
        ->where('is_published', '=', '1') //Только опубликованные
        ->orderBy('id','DESC') //Сначала новые
        ->with(['subject']) //Берём всю информацию из связанных таблиц
        ->limit(5) //Максимум 5 отзывов
        ->get();

        return $result;
    }

    public function getAllWithPaginate($items)
    {
        $result = $this
        ->startCondition()
        ->select('*') //Беру все поля
        ->orderBy('id','DESC') //Сначала новые
        ->with(['subject']) //Берём всю информацию из связанных таблиц
        ->paginate($items);

        return $result;
    }



}