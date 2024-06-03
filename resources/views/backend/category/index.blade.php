@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12">
               <h1 class="d-inline">Tất cả danh mục</h1>
            </div>
         </div>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="card">
         <div class="card-header text-right">
            <button class="btn btn-sm btn-success" type="submit" name="THEM">
               <i class="fa fa-save" aria-hidden="true"></i>
               Lưu
            </button>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-4">
                  <div class="mb-3">
                     <label>Tên danh mục (*)</label>
                     <input type="text" name="name" id="name" placeholder="Nhập tên danh mục" class="form-control"
                        onkeydown="handle_slug(this.value);">
                  </div>
                  <div class="mb-3">
                     <label>Slug</label>
                     <input type="text" name="slug" id="slug" placeholder="Nhập slug" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label>Mô Tả</label>
                     <textarea name="description" class="form-control"></textarea>
                  </div>
                  <div class="mb-3">
                     <label>Danh mục cha (*)</label>
                     <select name="parent_id" class="form-control">
                        <option value="">None</option>
                       
                     </select>
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
               </div>
               <div class="col-md-8">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Tên danh mục</th>
                           <th>Tên slug</th>
                           <th>Chức năng</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($list as $row)
                        <tr>
                           <td class="text-center">
                              <input type="checkbox">
                           </td>
                           <td class="text-center">
                              <img src="{{asset('images/categorys/'.$row->image)}}" alt="{{$row->image}}" style="width:100px;">
                           </td>
                           <td>{{$row->name}}</td>
                           <td>{{$row->slug}}</td>
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
         </div>
      </div>
   </section>
</div>
@endsection
@section('title','Danh muc')
