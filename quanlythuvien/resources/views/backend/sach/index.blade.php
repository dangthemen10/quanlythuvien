@extends('backend.layouts.master')
@section('title')
Quản Trị - Sách
@endsection
@section('feature-title')
Danh Sách Sách
@endsection
@section('content')
<a href="{{ route('backend.sach.create') }}" class="btn btn-primary">Thêm mới</a>
<a href="{{ route('backend.sach.print') }}" class="btn btn-success">In Danh Sách</a>
<table class="table-bordered table-hover ">
    <thead>
        <tr class="table-success" >
            <th>Mã Sách</th>
            <th>Tên Sách</th>
            <th>Tên Tác Giả</th>
            <th>Ảnh</th>
            <th>Thể Loại</th>
            <th>Nhà Xuất Bản</th>
            <th>Số Lượng Sách</th>
            <th>Trạng Thái Sách</th>         
            <th colspan="2">Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listSach as $sach)
        <tr>
            <td>{{$sach->masach}}</td>
            <td>{{$sach->tensach}}</td>
            <td>{{$sach->tentacgia}}</td>
            <td>
                <img src="{{ asset('storage/uploads/'. $sach->anh) }}" width="80px" height="80px"/>
            </td>
            <td>{{$sach->theloai->tentheloai}}</td>
            <td>{{$sach->nxb->tennxb}}</td>
            <td>{{$sach->soluong}} Cuốn</td>
            @if($sach->trangthaisach == 1)
                <td>Còn Sách</td>
            @else
                <td>Sách đã hết</td>
            @endif
            <td>
                <a class="btn btn-primary" href="{{ route('backend.sach.edit', ['id'=>$sach->id]) }}">Edit</a>
                
            </td>
            <td>
                <form name="frmDeleteSach" id="frmDeleteSach" method="post" action="{{ route('backend.sach.destroy', ['id' => $sach->id]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <button class="btn btn-danger btn-icon-split btn-delete">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete</span>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    <tbody>
</table>

{{ $users->links() }}
@endsection
@section('custom-scripts')
<script>
    $(document).ready(function(){
        $('.btn-delete').click(function(e){
            e.preventDefault();
            Swal.fire({
                title: 'Bạn Có Chắc Xóa Không?',
                text: "Nếu bạn xóa thì dữ liệu này sẽ không phục hồi được!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Xóa Dữ liệu!',
                    'Dữ liệu của bạn đã được xóa',
                    'Thành Công'
                    )

                    //submit form
                    $(this).parent('#frmDeleteSach').submit();
                }
                })
        })
    })
</script>
@endsection