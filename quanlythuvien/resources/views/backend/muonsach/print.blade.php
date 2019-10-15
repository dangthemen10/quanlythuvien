@extends('print.layout.paper')

@section('title')
In Danh Sách Mượn Sách
@endsection

@section('paper-size')
A4
@endsection

@section('paper-class')
A4
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="width:150px;">
                    <img src="{{ asset('img/OlYx2fY.png') }}" style="width:150px;height:150px;" />
                </td>
                <td style="text-align: right;vertical-align: middle;">
                    <span style="font-weight: bold;font-size: 2em;">HẢI ĐĂNG COMPANY</span> </br>
                    <span style="font-weight: bold;font-size: 1em;">Địa Chỉ: Đường 3/2, P. Xuân Khánh, Q.Ninh Kiều, TP. Cần Thơ</span> </br>
                    <span style="font-weight: bold;font-size: 1em;">Email: phanhaidangkgumt@gmail.com</span></br>
                    <span style="font-weight: bold;font-size: 1em;">Hotline: 0947223877</span> 
                    
                </td>
            </tr>
        </table>

        <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="text-align: center;">
                    <span style="font-weight: bold;font-size: 1.5em;">Danh Sách Mượn Sách</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>Mã Mượn</th>
                <th>Thông Tin đọc giả</th>
                <th>Thông Tin thủ thư</th>
                <th>Ngày Mượn</th>
                <th>Ngày dự định trả</th>
                <th>Thông tin tóm tắt sách</th>
            </tr>
            @foreach($listMuonsach as $muonsach)
            <tr>
                <td>{{ $muonsach->mamuon }}</td>
                <td>
                    Họ tên: <b>{{ $muonsach->tendocgia }}</b><br />
                    Chức vụ: {{ $muonsach->chucvu }}<br /> 
                    Giới tính: {{ $muonsach->gioitinh }}<br /> 
                    Năm Sinh: {{ $muonsach->namsinh }}<br /> 
                    Email: {{ $muonsach->email }}<br /> 
                    Điện thoại: {{ $muonsach->sdt }}<br /> 
                    Địa chỉ: {{ $muonsach->diachi }}<br /> 
                </td>
                <td>
                    Mã Thủ Thư: {{ $muonsach->mathuthu }}<br/>
                    Họ tên: <b>{{ $muonsach->tenthuthu }}</b><br />
                </td>
                <td>{{$muonsach->ngaymuon}}</td>
                <td>{{$muonsach->ngaytra}}</td>
                <td>
                    Tên sách: <b>{{ $muonsach->tensach }}</b><br />
                    Tên tác giả: {{ $muonsach->tentacgia }}<br />
                    Tên thể loại: {{ $muonsach->tentheloai }}<br />
                    Tên nhà xuất bản: {{ $muonsach->tennxb }}
                </td>
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection