@extends('layout.home')
@section('main')
<div class="col-md-9 main_right_add">
   <div class="container">
    <div class="row">
        <div class="col-md-2">
            <p><span>List User</span> </p>
        </div>
        <div class="col-md-10">
            <div class="main_but">
                <button class="btn btn-primary"><a href="{{route('page.list_user')}}">back</a> </button>
            </div>
        </div>
    </div>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">password</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-md-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password Confirm</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">FaceBook link</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Youtube link</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>
@stop()
