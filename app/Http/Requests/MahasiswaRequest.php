<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'Nama' => 'required',
            'NIM' => 'required',
            'Kelas' => 'required',
            'Alamat' => 'required',
            'Semester' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'Nama.required' => 'Nama tidak boleh kosong!',
            'NIM.required' => 'NIM tidak boleh kosong!',
            'Kelas.required' => 'Kelas tidak boleh kosong!',
            'Alamat.required' => 'Alamat tidak boleh kosong!',
            'Semester.required' => 'Semester tidak boleh kosong!',
        ];
    }
}
