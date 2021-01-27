<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaduanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'kode_pengaduan' => 'unique|required',
                'nomor_induk' => 'required',
                'nama' => 'required',
                'email' => 'required',
                'no_telp' => 'required',
                'alamat'=>'required',
                'jenis_pengaduan' =>'required',
                'tanggal_laporan' => 'required',
                'laporan' => 'required',
                'status' => 'required',
        ];
    }
}
