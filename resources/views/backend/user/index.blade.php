@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
                <h1 class="d-inline">Tất cả thành viên</h1>
                <a href="user_create.html" class="btn btn-sm btn-primary">Thêm thành viên</a>
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
                      <th>Họ tên</th>
                      <th>Điện thoại</th>
                      <th>Email</th>
                      <th>Vị trí</th>
                      <th>Chức năng</th>
                   </tr>
                </thead>
                <tbody>
                  @foreach($list as $row)
                  <tr>
                     <td class="text-center"><input type="checkbox"></td>
                     <td>{{$row->name}}</td>
                     <td>{{$row->email}}</td>
                     <td>{{$row->phone}}</td>
                     <td>{{$row->roles}}</td>
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