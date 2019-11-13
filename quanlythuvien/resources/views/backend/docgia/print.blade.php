@extends('print.layout.paper')

@section('title')
In danh sách Đọc giả
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
                <td style="text-align: left;vertical-align: middle;">
                    <span style="font-weight: bold;font-size: 1.2em;">TRƯỜNG ĐẠI HỌC CẦN THƠ</span> </br>
                    <span style="font-size: 0.9em;"><b>Địa Chỉ</b>: Khu II, Đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ</span> </br>
                    <span style="font-size: 0.9em;"><b>Hotline</b>:  (84-292) 3832663; <b>Fax</b>:  (84-292) 3838474</span> </br>
                    <span style="font-size: 0.9em;"><b>Email</b>:   dhct@ctu.edu.vn</span> </br>
                    <span style="font-size: 0.9em;">-----------------------------</span> </br>
                </td>
                <td style="text-align: right;vertical-align: middle;">
                    <span style="font-weight: bold;font-size: 1em;">Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam</span> </br>
                    <span style="font-size: 1em;padding-right: 30px;">Độc lập - Tự do - Hạnh phúc</span> </br></br>
                    <span style=" font-size: 1em;">.........,Ngày......Tháng......Năm......</span> </br>
                    <span style=" padding-right: 70px;">-------------------</span> </br>
                </td>
            </tr>
        </table>

        <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td style="text-align: center;">
                    <span style="font-weight: bold;font-size: 1.2em;">DANH SÁCH THÔNG TIN ĐỌC GIẢ</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>Mã Đọc giả</th>
                <th>Tên Đọc giả</th>
                <th>Chức Vụ</th>
                <th>Giới Tính</th>
                <th>Năm Sinh</th>
                <th>Địa Chỉ</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Quê Quán</th>
                <th>Khoa</th>
                <th>Ngành</th>
            </tr>
            @foreach($listDocgia as $docgia)
            <tr>
                <td>{{$docgia->madocgia}}</td>
                <td>{{$docgia->tendocgia}}</td>
                <td>{{$docgia->chucvu}}</td>
                <td>{{$docgia->gioitinh}}</td>
                <td>{{$docgia->namsinh}}</td>
                <td>{{$docgia->diachi}}</td>
                <td>{{$docgia->sdt}}</td>
                <td>{{$docgia->email}}</td>
                <td>{{$docgia->quequan}}</td>
                <td>{{$docgia->khoa->tenkhoa}}</td>
                <td>{{$docgia->nganh->tennganh}}</td>
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection