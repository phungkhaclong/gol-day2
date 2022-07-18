@extends('admin.layouts.admin.master')
@section('main')

        <div class="col-md-9 main_right">
            <table class="table table-bordered">
                <div class="row">
                    <div class="col-md-2">
                        <p><span>List User</span> </p>
                    </div>
                    <div class="col-md-10">
                        <div class="main_but">
                            <span class="send_mail"><button type="button" class="btn btn-outline-secondary">
                                <a href="{{route('admin.mails.index')}}">Send Mail</a></button>
                            </span>
                            <span class="add_user"><button class="btn btn-primary">
                                <a href="{{route('admin.user.create')}}">add user</a> </button>
                            </span>
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
                    @foreach($adduser as $value)
                  <tr>
                    <th><i class="fa fa-user"></i></th>
                    <td>{{$value['name']}}</td>
                    <td>{{$value['email']}}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
@stop()
