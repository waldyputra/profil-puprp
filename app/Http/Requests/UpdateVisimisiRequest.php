<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVisimisiRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Atur sesuai kebutuhan
    }

    public function rules()
    {
        return [
            'visi' => 'required',
            'misi' => 'required',
        ];
    }
}
