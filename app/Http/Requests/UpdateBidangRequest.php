<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBidangRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Atur sesuai kebutuhan
    }

    public function rules()
    {
        return [
            'namabidang' => 'required|string|max:255',
            'tentang' => 'nullable|string',
        ];
    }
}
