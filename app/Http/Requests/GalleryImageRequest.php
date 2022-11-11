<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryImageRequest extends FormRequest
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
            "file" => "sometimes|mimes:png,jpg,jpeg",
            "status" => "required",
            "link" => "sometimes",
            "type" => "sometimes",
            "gallery_folder_id" => "required"
        ];
    }
}
