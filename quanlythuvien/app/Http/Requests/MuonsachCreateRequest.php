<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuonsachCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'mamuon'                => 'required|min:3|max:50|unique:qltv_muonsach', //tên table qtlv_muonsach
            'ngaymuon'              => 'required',
            'hantra'                => 'required',
            'soluong'               => 'required',
            'ngaytra'               => 'required',
            'tinhtrang'             => 'required',
            'thuthu_id'             => 'required',
            'docgia_id'             => 'required',
            'sach_id'               => 'required',
        ];
    }
    public function messages() {
        return [
            'mamuon.required'      => 'Vui lòng nhập mã mượn',
            'mamuon.min'           => 'Vui lòng nhập mã mượn ít nhất 3 ký tự',
            'mamuon.max'           => 'Vui lòng nhập mã mượn tối đa 50 ký tự',
            'mamuon.unique'        => 'Mã mượn này đã tồn tại. Vui lòng nhập mã khác',

            'ngaymuon.required'    => 'Vui lòng nhập ngày mượn',
            'hantra.required'      => 'Vui lòng nhập hạn trả sách',
            'soluong.required'     => 'Vui lòng nhập số lượng sách mượn',
            'ngaytra.required'     => 'Vui lòng nhập ngày trả sách',
            'tinhtrang.required'   => 'Vui lòng nhập tình trạng sách',
            'thuthu_id.required'   => 'Vui lòng chọn thủ thư cho mượn sách',
            'docgia_id.required'   => 'Vui lòng chọn đọc giả mượn sách',
            'sach_id.required'     => 'Vui lòng chọn sách mượn'
        ];
    }
}
