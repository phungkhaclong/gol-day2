
@extends('admin.layout_admin.layout')
@section('main')
<div class="col-md-9 main_right">
    <table class="table container ">
        <div class="row">
            <div class="col-md-3">
                <p><span class="send_text">Send email to user</span> </p>
            </div>
            <div class="col-md-9">
                <div class="main_back_sendmail">
                    <button class="btn btn-primary"><a href="{{route('admin.user.index')}}">back</a> </button>
                </div>
            </div>
        </div>
        <br>
        <select class="form-select" aria-label="Default select example">
            <option selected>select a user</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

          <div class="add_user_button">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </table>
</div>

@stop()
