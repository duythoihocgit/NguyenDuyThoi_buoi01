@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả bài viết</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a class="btn btn-sm btn-success" href="{{route('admin.post.create')}}">
                                <i class="fas fa-plus"></i> Thêm
                            </a>
                            <a class="btn btn-sm btn-danger" href="#">
                                <i class="fas fa-trash"></i> Thùng rác
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px;">
                                        <input type="checkbox">
                                    </th>
                                    <th>ID</th>
                                    <th class="text-center" style="width:130px;">Hình ảnh</th>
                                    <th>Chủ đề</th>
                                    <th>Tiêu đề bài viết</th>
                                    <th>Slug</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                    <tr>
                                        <td class="text-center"><input type="checkbox"></td>
                                        <td>{{ $row->postid }}</td>
                                        <td class="text-center"><img src="{{ asset('images/posts/' . $row->postimage) }}"
                                                alt="{{ $row->postimage }}" style="width:100px;"></td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->slug }}</td>
                                        <td class="text-center">

                                            <a href="#" class="btn btn-sm btn-success">
                                                <i class="fas fa-toggle-on"></i>
                                            </a>

                                            <a href="#" class="btn btn-sm btn-info">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
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
@section('title', 'Quan ly')
