@extends('admin.layouts.admin.master')
@section('main')
<div class="container-fluid">
   <div class="container">
    <div class="row">
        <div class="col-md-2">
            <p><span>ADD Product</span> </p>
        </div>
        <div class="col-md-10">
            <div class="main_back">
                <button class="btn btn-primary"><a href="{{route('admin.product.index')}}">back</a> </button>
            </div>
        </div>
    </div>
    <form action="{{route('admin.product.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
                <span style = "color: red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product</label>
            <input type="product" name="product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('product')
                <span style = "color: red;">{{$message}}</span>
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
