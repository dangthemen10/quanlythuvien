@extends('print.layout.paper')

@section('title')
In danh sách đọc giả mượn sách
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
                    <span style="font-weight: bold;font-size: 1.5em;">Danh Sách Đọc giả Mượn Sách</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>Mã Đọc Giả</th>
                <th>Tên Đọc Giả</th>
                <th>Chức Vụ</th>
                <th>Giới Tính</th>
                <th>Năm Sinh</th>
                <th>Địa Chỉ</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Tổng số sách đã mượn</th>
            </tr>
            @foreach($listMuonsach as $muonsach)
            <tr>
            <td>{{ $muonsach->madocgia }}</td>
            <td>{{ $muonsach->tendocgia }}</td>
            <td> {{ $muonsach->chucvu }}</td>
            <td>{{ $muonsach->gioitinh }}</td>
            <td>{{ $muonsach->namsinh }}</td>
            <td>{{ $muonsach->diachi }}</td>
            <td>{{ $muonsach->sdt }}</td>
            <td>{{ $muonsach->email }}</td>
            <td>{{ $muonsach->TongSoSach }}</td>
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection