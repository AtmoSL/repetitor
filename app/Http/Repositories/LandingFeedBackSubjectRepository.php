<?php

namespace App\Http\Repositories;

use App\Models\Landing\FeedBack\LandingFeedBackSubject;
use App\Models\Landing\LandingReview;

class LandingFeedBackSubjectRepository extends CoreRepository{

    protected function getModelClass(){
        return LandingFeedBackSubject::class;
    }

    public function getAllForSelect()
    {

        //ToDo Сделать нормальную выборку полей

        $result = $this
        ->startCondition()
        ->select('*') //Беру все поля
        ->get();

        return $result;
    }



}