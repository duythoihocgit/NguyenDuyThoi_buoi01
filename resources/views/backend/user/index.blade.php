@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
                <h1 class="d-inline">Tất cả thành viên</h1>
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
@section('title','Quan ly')