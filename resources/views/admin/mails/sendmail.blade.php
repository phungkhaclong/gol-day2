
@extends('admin.layouts.admin.master')
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
        <form action="{{route('formSendMail')}}" method="POST">
            @csrf
        <select name="mail" class="form-select" aria-label="Default select example">
            <option >Chọn user...</option>
            @foreach($users as $value)
                <option value="{{$value['email']}}">{{$value['name']}}</option>
            @endforeach
        </select>
        {{-- <div class="form-group">
            <label for="attachment"> File đính kèm </label>
            <input class="form-control" type="file" id="attachment" name="attachment">
          </div> --}}

          <div class="add_user_button">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </table>
</div>

@stop()