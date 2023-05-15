<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PulauIndonesiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'nama_pulau' => 'required',
            'letak_geografis' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nama_pulau.required' => 'Nama pulau tidak boleh kosong!',
            'letak_geografis.required' => 'Letak geografis tidak boleh kosong!',
        ];
    }
}
