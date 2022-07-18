@extends('admin.layouts.admin.master')
@section('main')
<div class="col-md-9 main_right_add">
   <div class="container">
        <div class="row">
            <div class="col-md-2">
                <p><span>List User</span> </p>
            </div>
            <div class="col-md-10">
                <div class="main_back">
                    <button class="btn btn-primary"><a href="{{route('admin.user.index')}}">back</a> </button>
                </div>
            </div>
        </div>
        <form action="{{route('admin.user.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mời nhập tên...">
            @error('name')
                <span style = "color: red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
                <span style = "color: red;">{{$message}}</span>
            @enderror
          </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('password')
                            <span style = "color: red;">{{$message}}</span>
                        @enderror
                </div>
                <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password Confirm</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('password_confirmation')
                            <span style = "color: red;">{{$message}}</span>
                        @enderror
                </div>
            </div>
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="address" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('address')
                <span style = "color: red;">{{$message}}</span>
            @enderror
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">FaceBook link</label>
          <input type="name" name="facebook" class="form-control" id="exampleInputPassword1">
          @error('facebook')
          <span style = "color: red;">{{$message}}</span>
      @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Youtube link</label>
            <input type="name" name="youtube" class="form-control" id="exampleInputPassword1">
            @error('youtube')
            <span style = "color: red;">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="add_user_button">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Reset</button>
        </div>
      </form>
   </div>
</div>

@stop()
