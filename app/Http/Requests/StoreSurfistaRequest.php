<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSurfistaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => [
                'required',
                'string'
            ],
            'pais' => [
                'required',
                'string'
            ]
        ];
    }
}
