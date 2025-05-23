<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGeografisRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Atur sesuai kebutuhan
    }

    public function rules()
    {
        return [
            'alamat' => 'required|string|max:255',
            'koordinat' => 'nullable|string',
        ];
    }
}
