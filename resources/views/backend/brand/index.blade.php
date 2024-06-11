@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
        @csrf   
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="d-inline">Tất cả thương hiệu</h1>
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
                                <a class="btn btn-sm btn-danger" href="brand_trash.html">
                                    <i class="fas fa-trash"></i> Thùng rác
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>Tên thương hiệu (*)</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label>Slug</label>
                                    <input type="text" name="slug" class="form-control">
                                </div> --}}
                                <div class="mb-3">
                                    <label>Mô tả</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Hình đại diện</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Xuất bản</option>
                                        <option value="2">Chưa xuất bản</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="create" class="btn btn-success">Thêm thương hiệu</button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width:30px;">
                                                <input type="checkbox">
                                            </th>
                                            <th class="text-center" style="width:130px;">Hình ảnh</th>
                                            <th>Tên thương hiệu</th>
                                            <th>Tên slug</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list as $row)
                                            <tr>
                                                <td class="text-center"><input type="checkbox"></td>
                                                <td class="text-center"><img src="{{ asset('images/brands/' . $row->image) }}"
                                                        alt="{{ $row->image }}" style="width:100%;"></td>
                                                <td>{{ $row->name }}</td>
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
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection

@section('title', 'Quản lý thương hiệu')
