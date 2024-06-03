@extends('layouts.admin')
@section('content')

<form action="" method="post">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Tất cả sản phẩm</h1>
                  <a href="index.php?option=product&cat=create"  class="btn btn-sm btn-primary">Thêm sản phẩm</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Main content -->
      <section class="content">
         <div class="card">
            <div class="card-header">
               <select name="" id="" class="form-control d-inline" style="width:100px;">
                  <option value="">Xoá</option>
               </select>
               <button class="btn btn-sm btn-success">Áp dụng</button>
            </div>
            <div class="card-body">
               <table class="table table-bordered" id="mytable">
                  <thead>
                     <tr>
                        <th class="text-center" style="width:30px;">
                           <input type="checkbox">
                        </th>
                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Tên danh mục</th>
                        <th>Tên thương hiệu</th>
                        <th>ID</th>
                        <th>Chức năng</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($list as $row)
                     <tr>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><img src="{{asset('images/product'.$row->productimage)}}" alt="{{$row->productimage}}" style="width:100%;"></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->categoryname}}</td>
                        <td>{{$row->brandname}}</td>
                        <td>{{$row->id}}</td>
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
</form>
@endsection

@section('title', 'Quản lý sản phẩm')
