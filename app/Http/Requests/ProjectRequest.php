<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "project_type_id" => "required|exists:project_types,id",
            "title" => "required",
            "description" => "required",
            "short_description" => "sometimes",
            "image" => "required",
            "status" => "required",
        ];
    }
}
