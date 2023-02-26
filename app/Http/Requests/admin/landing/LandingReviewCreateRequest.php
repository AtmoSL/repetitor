<?php

namespace App\Http\Requests\Admin\Landing;

use Illuminate\Foundation\Http\FormRequest;

class LandingReviewCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|min:2|max:50',
            'class'         => 'required|integer|min:1|max:11',
            'text'          => 'required|max:500',
            'subject_id'    => 'required|integer|exists:landing_feed_back_subjects,id',
            'photo_path'    => '',
            'is_published'  => 'required|min:0|max:1',
        ];
    }
}
