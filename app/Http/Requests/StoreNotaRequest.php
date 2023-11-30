<?php

namespace App\Http\Requests;

use App\Models\Nota;
use App\Models\Onda;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreNotaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $ondaId = $this->input('onda_id');

        return [
            'onda_id' => [
                'required',
                Rule::exists(Onda::class, 'id'),
                Rule::unique(Nota::class)->where(function ($query) use ($ondaId) {
                    return $query->where('onda_id', $ondaId);
                }),
            ],
            'nota_parcial_1' => [
                'numeric',
            ],
            'nota_parcial_2' => [
                'numeric',
            ],
            'nota_parcial_3' => [
                'numeric',
            ],
        ];
    }
}
