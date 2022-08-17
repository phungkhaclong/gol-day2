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
                    <p><span>{{ __('category.Category List')}}</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <button class="btn btn-primary"><a href="{{ route('admin.category.create') }}">{{ __('category.Addnew')}}</a>
                        </button>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">Id</th>
                    <th style="width: 30%;" scope="col">{{ __('category.Name')}}</th>
                    <th style="width: 30%;"scope="col">{{ __('category.Slug')}}</th>
                    <th style="width: 20%;" scope="col">{{ __('category.Action')}}</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($categories))
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category['id'] }}</td>
                            <td>{{ $category['name'] }}</td>
                            <td>{{ $category['slug'] }}</td>
                            <td>
                                <a href="{{ route('admin.category.show', $category->id) }}" class="btn btn-success">
                                    {{ __('category.Show') }} </a>
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary">
                                    {{ __('category.Edit') }} </a>
                                <form class="d-inline" method="post"
                                    action="{{ route('admin.category.destroy', $category->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  onclick="return confirm('Do you want to delete?')"
                                        class="btn btn-danger"> {{ __('category.Delete') }} </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop()
