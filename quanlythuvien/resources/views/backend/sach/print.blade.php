@extends('print.layout.paper')

@section('title')
In danh sách Sách
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
                    <span style="font-weight: bold;font-size: 1.5em;">Danh Sách Sách</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Tên Tác Giả</th>
                <th>Thể Loại</th>
                <th>Nhà Xuất Bản</th>
                <th>Số Lượng Sách</th>
                <th>Trạng Thái Sách</th>
            </tr>
            @foreach($listSach as $sach)
            <tr>
                <td>{{$sach->masach}}</td>
                <td>{{$sach->tensach}}</td>
                <td>{{$sach->tentacgia}}</td>
                <td>{{$sach->theloai->tentheloai}}</td>
                <td>{{$sach->nxb->tennxb}}</td>
                <td>{{$sach->soluong}} Cuốn</td>
                @if($sach->trangthaisach == 1)
                    <td>Còn Sách</td>
                @else
                    <td>Sách đã hết</td>
                @endif
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection