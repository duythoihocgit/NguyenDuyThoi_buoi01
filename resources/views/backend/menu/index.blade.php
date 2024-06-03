@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả menu</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header text-right">
                    Noi dung
                </div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="accordion" id="accordionExample">
                                <div class="card mb-0 p-3">
                                    <select name="postion" class="form-control">
                                        <option value="mainmenu">Main Menu</option>
                                        <option value="footermenu">Footer Menu</option>
                                    </select>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingmenu">
                                        <strong data-toggle="collapse" data-target="#collapsemenu" aria-expanded="true"
                                            aria-controls="collapsemenu">
                                            Danh mục sản phẩm
                                        </strong>
                                    </div>
                                    <div id="collapsemenu" class="collapse" aria-labelledby="headingmenu"
                                        data-parent="#accordionExample">
                                        <div class="card-body p-3">
                                            @foreach ($list_category as $category)
                                                <div class="form-check">
                                                    <input name="menuId[]" class="form-check-input" type="checkbox"
                                                        value="" id="menuId">
                                                    <label class="form-check-label" for="menuId">

                                                        {{ $category->name }}

                                                    </label>
                                                </div>
                                             @endforeach
                                                <div class="my-3">
                                                    <button name="ADDmenu"
                                                        class="btn btn-sm btn-success form-control">Thêm</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingBrand">
                                        <strong data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true"
                                            aria-controls="collapseBrand">
                                            Thương hiệu
                                        </strong>
                                    </div>
                                    <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand"
                                        data-parent="#accordionExample">
                                        <div class="card-body p-3">
                                          @foreach($list_brand as $listbrand)
                                            <div class="form-check">
                                                <input name="BrandId[]" class="form-check-input" type="checkbox"
                                                    value="" id="BrandId">
                                                <label class="form-check-label" for="BrandId">
                                                    {{$listbrand->name}}
                                                </label>
                                            </div>
                                            @endforeach
                                            <div class="my-3">
                                                <button name="ADDBRAND"
                                                    class="btn btn-sm btn-success form-control">Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingTopic">
                                        <strong data-toggle="collapse" data-target="#collapseTopic" aria-expanded="true"
                                            aria-controls="collapseTopic">
                                            Chủ đề bài viết
                                        </strong>
                                    </div>
                                    <div id="collapseTopic" class="collapse" aria-labelledby="headingTopic"
                                        data-parent="#accordionExample">
                                        <div class="card-body p-3">
                                          @foreach($list_topic as $listtopic)
                                            <div class="form-check">
                                                <input name="TopicId[]" class="form-check-input" type="checkbox"
                                                    value="" id="TopicId">
                                                <label class="form-check-label" for="TopicId">
                                                    {{$listtopic->name}}
                                                </label>
                                            </div>
                                            @endforeach
                                            <div class="my-3">
                                                <button name="ADDTOPIC"
                                                    class="btn btn-sm btn-success form-control">Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingPage">
                                        <strong data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
                                            aria-controls="collapsePage">
                                            Trang đơn
                                        </strong>
                                    </div>
                                    <div id="collapsePage" class="collapse" aria-labelledby="headingPage"
                                        data-parent="#accordionExample">
                                        <div class="card-body p-3">
                                          @foreach($list_post as $listpost)
                                            <div class="form-check">
                                                <input name="PageId[]" class="form-check-input" type="checkbox"
                                                    value="" id="PageId">
                                                <label class="form-check-label" for="PageId">
                                                    {{$listpost->title}}
                                                </label>
                                            </div>
                                            @endforeach
                                            <div class="my-3">
                                                <button name="ADDPAGE"
                                                    class="btn btn-sm btn-success form-control">Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-header" id="headingCustom">
                                        <strong data-toggle="collapse" data-target="#collapseCustom" aria-expanded="true"
                                            aria-controls="collapseCustom">
                                            Tuỳ liên kết
                                        </strong>
                                    </div>
                                    <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom"
                                        data-parent="#accordionExample">
                                        <div class="card-body p-3">
                                            <div class="mb-3">
                                                <label>Tên menu</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Liên kết</label>
                                                <input type="text" name="link" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button name="ADDCUSTOM"
                                                    class="btn btn-sm btn-success form-control">Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th>Tên menu</th>
                                        <th>Liên kết</th>
                                        <th>Vị trí</th>
                                        <th>Chức vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $row)
                                        <tr>
                                            <td class="text-center"><input type="checkbox"></td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->link }}</td>
                                            <td>{{ $row->position }}</td>
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
@section('title', 'Quan ly')
