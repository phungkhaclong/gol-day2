@extends('admin.layouts.admin.master')
@section('main')

    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <form action="">
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Mã khách hàng: </label>
                        <input name="id" id="id" class="form-control mb-2" value="" readonly>
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Thông tin khách hàng(Vi): </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Địa chỉ: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Điện thoại: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Số zalo: </label>
                        <a href="" class="btn btn-primary"> Thêm zalo </a>
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Số phone 1: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                        <a class="btn btn-danger delete "> Xóa </a>
                        <form id="delete-form" class="d-inline" method="post" action="">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Email: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Người liên hệ: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Chứ vụ: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Tên đơn vị: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Mã số thuế: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Địa chỉ hóa đơn: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                    <div class="container-fluid">
                        <label for="id" class="form-label"> Tài khoản ngân hàng: </label>
                        <input name="id" id="id" class="form-control mb-2" value="">
                    </div>
                </form>
            </div>
            <div class="col-5">
                <div class="mb-3">
                    <label for="id" class="form-label"> Loại khách hàng: </label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="" selected disabled hidden> Khách lẻ </option>
                        <option value=""> 1 </option>
                        <option value=""> 1 </option>
                        <option value=""> 1 </option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="" id="" value=""> Chia sẻ quyền cho kế toán
                    <br>
                </div>
                <div class="mb-3">
                    <input type="checkbox" name="" id="" value=""> Khoá tạo đơn hàng, khách hàng
                    đã quá hạn mức
                </div>
                <div class="mb-3">
                    <label for="id" class="form-label"> Mô tả nợ hạn định: </label>
                </div>
                <div class="mb-3">
                    <textarea name="" id="" cols="80" rows="5" placeholder="Giao hàng thu tiền trực tiếp"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hạn mức nợ cho phép:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="0">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả nợ cho phép:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea id="default">Hello, World!</textarea>
                </div>
            </div>
        </div>
    </div>
@stop()
