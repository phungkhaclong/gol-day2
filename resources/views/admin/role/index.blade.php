@extends('admin.layout_admin.layout')
@section('main')

        <div class="col-md-9 main_right">
            <table class="table table-bordered">
                <div class="row">
                    <div class="col-md-2">
                        <p><span>List Role</span> </p>
                    </div>
                    <div class="col-md-10">
                        <div class="main_but">
                            <button class="btn btn-primary"><a href="{{route('role.create')}}">add role</a> </button>
                        </div>
                    </div>
                </div>
                <thead>
                  <tr>
                    <th style="width: 10%;" scope="col">User</th>
                    <th style="width: 30%;" scope="col">Name</th>
                    <th style="width: 30%;"scope="col">Email</th>
                    <th style="width: 20%;" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><i class="fa fa-user" aria-hidden="true"></i></th>
                    <td>Phùng Khắc Long</td>
                    <td>Long@gmail.com</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th><i class="fa fa-user" aria-hidden="true"></i></th>
                    <td>Phùng Khắc Long</td>
                    <td>Long@gmail.com</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th><i class="fa fa-user" aria-hidden="true"></i></th>
                    <td>Phùng Khắc Long</td>
                    <td>Long@gmail.com</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th><i class="fa fa-user" aria-hidden="true"></i></th>
                    <td>Phùng Khắc Long</td>
                    <td>Long@gmail.com</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th><i class="fa fa-user" aria-hidden="true"></i></th>
                    <td>Phùng Khắc Long</td>
                    <td>Long@gmail.com</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
@stop()
