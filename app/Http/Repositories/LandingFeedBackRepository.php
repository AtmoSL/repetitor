<?php

namespace App\Http\Repositories;

use App\Models\Landing\FeedBack\LandingFeedBack;



class LandingFeedBackRepository extends CoreRepository{

    protected function getModelClass(){
        return LandingFeedBack::class;
    }

    public function getAllWithPaginate($items)
    {
        $result = $this
        ->startCondition()
        ->select('*') //Беру все поля
        ->orderBy('id','DESC') //Сначала новые
        ->with(['class',
                'format', 
                'status',
                'subject', 
                'target']) //Берём всю информацию из связанных таблиц
        ->paginate($items);

        return $result;
    }



}