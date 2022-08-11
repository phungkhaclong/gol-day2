@extends('admin.layouts.admin.master')
@section('main')
    <div class="col-md-9 main_right_add">
        @if (empty($permissionGroup))
            <form class="container-fluid" method="post" action="{{ route('admin.permission-group.store') }}">
                @csrf
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <h3> {{ __('per-group.create-per') }}: </h3>
                    @else
                        <form class="container-fluid" method="post"
                action="{{ route('admin.permission-group.update', $permissionGroup->id) }}">
                @method('PUT')
                @csrf
                <div class="row">
                <div class="d-flex justify-content-between">
                <h3>  {{ __('per-group.edit-per') }}: </h3>
        @endif
        <a href="{{ route('admin.permission-group.index') }}" class="btn btn-primary">
            {{ __('per-group.back') }}
        </a>
    </div>
    </div>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">Id</th>
                <th scope="col"> {{ __('per-group.name') }}</th>
                <th scope="col">{{ __('per-group.created_at') }}</th>
                <th scope="col">{{ __('per-group.updated_at') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @if (!empty($permissionGroup))
            <tr>
                <td>{{ $permissionGroup['id'] }}</td>
                <td>{{ $permissionGroup['name'] }}</td>
                <td>{{ $permissionGroup['created_at'] }}</td>
                <td>{{ $permissionGroup['updated_at'] }}</td>
            </tr>
            @endif
            </tr>
        </tbody>
    </table>

    @if (!empty($permissionGroup))
        <div class="container-fluid">
            <p for="id" class="form-label"> ID </p>
            <p class="form-control"> {{ $permissionGroup->id }} </p>
        </div>
    @endif
    <div class="container-fluid">
        <label for="name" class="form-label"> {{ __('per-group.name') }} </label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            placeholder="" value="{{ old('name', $permissionGroup->name ?? '') }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="row mt-3">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">
                {{ __('per-group.save') }}
            </button>
        </div>
    </div>
    </form>
    </div>
@stop()
