<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhotoRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Atur sesuai kebutuhan
    }

    public function rules()
    {
        return [
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
