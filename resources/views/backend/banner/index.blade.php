@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- CONTENT -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12 text-right">
                        <a class="btn btn-sm btn-danger" href="category_trash.html">
                            <i class="fas fa-trash"></i> Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <form action="{{route('admin.banner.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Tên banner</label>
                                <input type="text" value="" name="name" id="name" class="form-control">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="link">Liên kết</label>
                                <input type="text" value="" name="link" id="link" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">Mô tả</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="postion">Vị trí</label>
                                <select name="position" id="position" class="form-control">
                                    <option value="0">None</option>
                                    <option value="slideshow">Slideshow</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image">Hình</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="2">Chưa xuất bản</option>
                                    <option value="1">Xuất bản</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="create" class="btn btn-success">Thêm banner</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:30px;">#</th>
                                    <th class="text-center" style="width:90px;">Hình</th>
                                    <th>Tên banner</th>
                                    <th>Liên kết</th>
                                    <th>Vị trí</th>
                                    <th class="text-center" style="width:200px;">Chức năng</th>
                                    <th class="text-center" style="width:30px;">ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                    <tr>
                                        <td class="text-center"><input type="checkbox"></td>
                                        <td class="text-center">
                                            <img src="{{ asset('images/banners/' . $row->image) }}" alt="{{ $row->image }}"
                                                style="width:100px;">
                                        </td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->link }}</td>
                                        <td>{{ $row->position }}</td>
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
                                        <td>{{ $row->id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.CONTENT -->
</div>
@endsection
@section('title', 'Quan ly')
