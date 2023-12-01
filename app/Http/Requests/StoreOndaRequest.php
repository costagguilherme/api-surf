<?php

namespace App\Http\Requests;

use App\Models\Bateria;
use App\Models\Surfista;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOndaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'bateria_id' => [
                'required',
                Rule::exists(Bateria::class, 'id'),
            ],
            'surfista_id' => [
                'required',
                Rule::exists(Surfista::class, 'id'),
            ],
        ];
    }
}
