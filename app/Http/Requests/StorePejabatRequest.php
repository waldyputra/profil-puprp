<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePejabatRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'jabatan' => 'required|string|max:255',
            'namapejabat' => 'required|string|max:255',
            'nip' => 'required|string|max:255',
            'tempatlahir' => 'required|string|max:255',
            'tanggallahir' => 'required|date',
            'agama' => 'required|string|max:255',
            'pangkat' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
        ];
    }
}
