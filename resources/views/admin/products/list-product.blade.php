@extends('admin.layouts.default')
@section('content')


<div class="p-4" style="min-height: 800px;">
                    <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
                    <button class="btn btn-info">Thêm mới</button>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
@foreach($products as $key => $value)
    <>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $value->name }}</td>
        <td>{{ $value->price }}</td>
        <td>{{ $value->image }}</td>
        <td>
            <button class="btn btn-warning">Sửa</button>
            <button class="btn btn-danger">Xóa</button>
        </td>
</tr>
@endfoeach


                        </tbody>
                    </table>
                </div>

                @endsection