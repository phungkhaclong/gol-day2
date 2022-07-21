@extends('admin.layouts.admin.master')
@section('main')
        <div class="col-md-9 main_right">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    <ul>
                        <li style="list-style-type: none">{!! \Session::get('message') !!}</li>
                    </ul>
                </div>
            @endif
            <table class="table table-bordered">
                <div class="row">
                    <div class="col-md-2">
                        <p><span>List User</span> </p>
                    </div>
                    <div class="col-md-10">
                        <div class="main_but">
                            <span class="send_mail"><button type="button" class="btn btn-outline-secondary">
                                <a href="{{route('admin.mails.sendmail')}}">Send Mail</a></button>
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
                    @if(!empty($users))
                    @foreach($users as $value)
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
                  @endif
                </tbody>
            </table>
            <div class="pagination_user">
                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
@stop()
