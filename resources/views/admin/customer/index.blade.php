@extends('admin.layouts.admin.master')
@section('main')

    <div class="container-fluid">
        <table class="table table-bordered table-all">
            <div class="row">
                <div class="col-md-5 " style="margin-top: 10px;">
                    <div class="main-right">
                        <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"><a href="{{ route('admin.customer.create') }}">Thêm mới</a></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true">Xóa tất cả</i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-sign-in" aria-hidden="true">Chuyển người quản lý</i></button>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="main_but" style="height: 40px; float: left;">
                        <form action="" class="form-inline ">
                            <div class="form-group ">
                                <input class="form-control " name="key" placeholder="Search by name.."
                                    style="width: 400px;">
                            </div>
                            <button type="submit" class="btn btn-primary sreach">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="border-top border-primary border-2">
                <form>
                    <p>Tìm kiếm</p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Loại khách</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                            </div>

                            <div class="col-md-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Người quản lý</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>Tìm kiếm</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>Hủy lọc</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="border-top border-primary border-2">
                <p>Danh sách thông tin khách hàng</p>
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Loại khách</th>
                    <th scope="col">Mã KH</th>
                    <th scope="col">Thông tin KH</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Người tạo</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            </div>


        </table>

    </div>
@stop()
