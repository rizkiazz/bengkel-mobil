<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganRequest extends FormRequest
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
            'nama' => ['required', 'string', 'max:255'],
            'tipe' => ['required', 'string', 'max:255'],
            'jenis_mobil' => ['required', 'string', 'max:255'],
            'merek' => ['required', 'string', 'max:255'],
            'no_polisi' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'handphone' => ['required', 'max:12'],
            'status' => ['nullable']
        ];
    }
}
