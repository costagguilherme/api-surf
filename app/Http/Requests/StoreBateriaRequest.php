<?php

namespace App\Http\Requests;

use App\Models\Surfista;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBateriaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'surfista_1_id' => [
                'required',
                Rule::exists(Surfista::class, 'id'),
            ],
            'surfista_2_id' => [
                'required',
                Rule::exists(Surfista::class, 'id'),
            ],
        ];
    }
}
