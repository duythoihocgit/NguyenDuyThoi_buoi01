@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
                <h1 class="d-inline">Tất cả bài viết</h1>
                <a href="post_create.html" class="btn btn-sm btn-primary">Thêm bài viết</a>
             </div>
          </div>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="card">
          <div class="card-header p-2">
             Noi dung
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
                  @foreach($list as $row)
                   <tr>
                      <td class="text-center"><input type="checkbox"></td>
                      <td>{{$row->postid}}</td>
                      <td class="text-center"><img src="{{asset("images/post/".$row->postimage)}}" alt="{{$row->postimage}}" style="width:100px;"></td>
                      <td>{{$row->name}}</td>
                      <td>{{$row->title}}</td>
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
    </section>
 </div>
@endsection
@section('title','Quan ly')
