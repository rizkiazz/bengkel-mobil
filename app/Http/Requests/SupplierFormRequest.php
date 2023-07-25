<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierFormRequest extends FormRequest
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
        'kode' => ['required', 'string'],
        'nama' => ['required', 'string'],
        'badan_usaha' => ['required', 'string'],
        'kepemilikan' => ['required', 'string'],
        'no_hp' => ['required', 'int'],
        'alamat' => ['required', 'string'],
        'status' => ['required', 'string'],
        'keterangan' => ['required', 'string']
        ];
    }
}