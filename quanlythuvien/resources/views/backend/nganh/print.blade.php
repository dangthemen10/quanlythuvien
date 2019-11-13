@extends('print.layout.paper')

@section('title')
In danh sách Ngành Học
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
                    <span style="font-weight: bold;font-size: 1.2em;">DANH SÁCH NGÀNH HỌC</span>
                </td>
            </tr>
        </table>

        <table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>Mã Ngành</th>
                <th>Tên Ngành</th>
            </tr>
            @foreach($listNganh as $nganh)
            <tr>
                <td>{{$nganh->manganh}}</td>
                <td>{{$nganh->tennganh}}</td>
            </tr>
            @endforeach
        </table>
    </article>
</section>
@endsection