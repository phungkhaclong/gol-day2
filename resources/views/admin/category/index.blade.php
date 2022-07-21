@extends('admin.layouts.admin.master')
@section('main')
        <div class="col-md-9 main_right">
            <table class="table table-bordered">
                <div class="row">
                    <div class="col-md-2">
                        <p><span>List Category</span> </p>
                    </div>
                    <div class="col-md-10">
                        <div class="main_but">
                            <button class="btn btn-primary"><a href="{{route('admin.category.create')}}">add category</a> </button>
                        </div>
                    </div>
                </div>
                <thead>
                  <tr>
                    <th style="width: 10%;" scope="col">User</th>
                    <th style="width: 30%;" scope="col">Name</th>
                    <th style="width: 30%;"scope="col">Description</th>
                    <th style="width: 20%;" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($category as $item)
                    <td><i class="fa fa-user" aria-hidden="true"></i></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger">Xóa</button>
                    </td>
                    @endforeach
                  </tr>
                </tbody>
              </table>
        </div>
@stop()
