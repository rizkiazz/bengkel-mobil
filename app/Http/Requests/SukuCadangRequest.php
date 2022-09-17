<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SukuCadangRequest extends FormRequest
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
            'nama' => ['required', 'string'],
            'jenis_suku_cadang' => ['required', 'string'],
            'merek' => ['required', 'string'],
            'satuan' => ['required', 'int'],
            'stock' => ['required', 'int'],
            'deskripsi' => ['required', 'string'],
            'harga' => ['required', 'min:1']
        ];
    }
}
