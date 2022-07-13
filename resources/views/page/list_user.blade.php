@extends('layout.home')
@section('main')

        <div class="col-md-9 main_right">
            <table class="table table-bordered">
                <div class="row">
                    <div class="col-md-2">
                        <p><span>List User</span> </p>
                    </div>
                    <div class="col-md-10">
                        <div class="main_but">
                            <button class="btn btn-primary"><a href="{{route('page.add_user')}}">add user</a> </button>
                        </div>
                    </div>
                </div>


                <thead>
                  <tr>
                    <th scope="col">User</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>


                </tbody>
              </table>

        </div>


@stop()
