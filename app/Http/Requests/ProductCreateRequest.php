<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'prod_name' => 'required',
            'prod_price' => 'required',
            'prod_type' => 'required',
            'status' => 'required',
            'prod_desc' => 'required',
            'categories_id' => 'required|exists:categories,id',
            'prod_img' => 'required|required_image_count',
            /*'prod_img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',*/
            'cover_img' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'required_image_count' => 'You have not uploaded required images for this product.'
        ];
    }


}
