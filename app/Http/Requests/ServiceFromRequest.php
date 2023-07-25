<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceFromRequest extends FormRequest
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
            'pelanggan_id' => ['required', 'string'],
            'jenis_service' => ['required', 'string'],
            'keluhan' => ['required', 'string'],
            'mulai' => ['required', 'date'],
            'selesai' => ['required', 'date'],
            'status' => ['nullable'],
            'biaya_service' => ['required'],
            'biaya_suku_cadang' => ['required'],
            'total_biaya' => ['required'],
            'detail' => ['required', 'string'],
        ];
    }
}
