@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
                <h1 class="d-inline">Tất cả thương hiệu</h1>
                <a href="brand_create.html" class="btn btn-sm btn-primary">Thêm thương hiêu</a>
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
                      <th class="text-center" style="width:130px;">Hình ảnh</th>
                      <th>Tên thương hiệu</th>
                      <th>Tên slug</th>
                   </tr>
                </thead>
             </table>
          </div>
       </div>
    </section>
 </div>
@endsection
@section('title','Quan ly')