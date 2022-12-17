<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserReviewRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'userId'        => ['required'],
            'orderLineId'   => ['required'],
            'ratingValue'   => ['required'],
            'comment'       => ['required'],
            'isHelpful'     => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'user_id'       => $this->userId,
            'order_line_id' => $this->orderLineId,
            'rating_value'  => $this->ratingValue,
            'is_helpful'    => $this->isHelpful,
        ]);
    }
}
