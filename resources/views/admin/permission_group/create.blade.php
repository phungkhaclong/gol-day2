@extends('admin.layouts.admin.master')
@section('main')
<div class="col-md-9 main_right_add">
   <div class="container">
    <div class="row">
        <div class="col-md-2">
            <p><span>ADD Permission_Group</span> </p>
        </div>
        <div class="col-md-10">
            <div class="main_back">
                <button class="btn btn-primary"><a href="{{ route('admin.permission_group.index') }}">back</a> </button>
            </div>
        </div>
    </div>
    <form class="container-fluid" method="post" action="{{ route('admin.permission_group.store') }}">
        @csrf
        <div class="container-fluid">
            <label for="name" class="form-label"> Name </label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="">
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

        <div class="add_user_button">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Reset</button>
        </div>
      </form>
   </div>
</div>
@stop()
