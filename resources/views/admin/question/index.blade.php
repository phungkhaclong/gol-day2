@extends('admin.layouts.admin.master')
@section('main')
    <div class="container-fluid">

        @if (\Session::has('message'))
            <div class="alert alert-success">
                <ul>
                    <li style="list-style-type: none">{!! \Session::get('message') !!}</li>
                </ul>
            </div>
        @endif
        <table class="table table-bordered table-all">
            <div class="row">
                <div class="col-md-2">
                    <p><span>{{ __('question.Question List') }}</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <span class="add_user"><button class="btn btn-primary">
                                <a href="{{ route('admin.question.create') }}">{{ __('question.Addnew') }}</a> </button>
                        </span>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 15%;" scope="col">{{ __('question.Id') }}</th>
                    <th style="width: 20%;" scope="col">{{ __('question.Content') }}</th>
                    <th style="width: 25%;"scope="col">{{ __('question.Category') }}</th>
                    <th style="width: 20%;" scope="col">{{ __('question.Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($questions))
                    @foreach ($questions as $value)
                        <tr >
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->content }}</td>
                            <td>{{ $value->category_id }}</td>
                            <td>
                                <a href="{{ route('admin.question.show', $value->id) }}" class="btn btn-success"> {{ __('question.Show') }} </a>
                                <a  href="{{ route('admin.question.edit', $value->id) }}"  class="btn btn-primary"> {{ __('question.Edit') }} </a>
                                <form class="d-inline" method="post" action="{{ route('admin.question.destroy', $value->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Do you want to delete?')" class="btn btn-danger"> {{ __('question.Delete') }} </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $questions->links() }}
    </div>
@stop()
