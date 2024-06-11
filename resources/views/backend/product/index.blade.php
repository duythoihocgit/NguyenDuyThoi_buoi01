@extends('layouts.admin')
@section('content')

<form action="" method="post">
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Quản lý sản phẩm</h1>
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
                       <a class="btn btn-sm btn-success" href="{{route('admin.product.create')}}">
                           <i class="fas fa-plus"></i> Thêm
                       </a>
                       <a class="btn btn-sm btn-danger" href="#">
                           <i class="fas fa-trash"></i> Thùng rác
                       </a>
                   </div>
               </div>
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
                        <td class="text-center"><img src="{{asset('images/products/'.$row->productimage)}}" alt="{{$row->productimage}}" style="width:100%;"></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->categoryname}}</td>
                        <td>{{$row->brandname}}</td>
                        <td>{{$row->id}}</td>
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
</form>
@endsection

@section('title', 'Quản lý sản phẩm')
