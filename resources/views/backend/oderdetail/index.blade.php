@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="d-inline">Tất cả đơn hàng</h1>
                    <a href="banner_create.html" class="btn btn-sm btn-primary">Thêm đơn hàng</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                Noi dung
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="mytable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:30px;">
                                <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">Hình ảnh</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Note</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $row)
                            <tr>
                                <td class="text-center"><input type="checkbox"></td>
                                <td>{{ $row->delivery_name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->note }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->qty }}</td>
                                <td>{{ $row->amount }}</td>
                                <td>
                                    <a class="btn btn-primary btn xs">
                                        <i class="fas fa-edit"></i>Chỉnh sửa

                                    </a> |
                                    <a class="btn btn-info btn xs">
                                        <i class="fas fa-eye"></i>Chi tiết</a> |
                                    <a class="btn btn-danger btn xs">
                                        <i class="fas fa-trash"></i>Xoá</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
@section('title','Quan ly')