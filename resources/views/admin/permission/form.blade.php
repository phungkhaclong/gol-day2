@extends('admin.layouts.admin.master')
@section('main')
    <div class="container-fluid">
        @if (empty($permission))
            <form class="container-fluid" method="post" action="{{ route('admin.permission.store') }}">
                @csrf
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <h3> {{ __('permission.create-permission') }}: </h3>
                    @else
                        <form class="container-fluid" method="post"
                            action="{{ route('admin.permission.update', $permission->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <h3> {{ __('permission.edit-permission') }}: </h3>
        @endif
        <a href="{{ route('admin.permission.index') }}" class="btn btn-primary">
            Back
        </a>
    </div>
    </div>
    <table class="table">
        <thead>

            <tr>
                <th scope="col">Id</th>
                <th scope="col">{{ __('permission.name') }}</th>
                <th scope="col">{{ __('permission.key') }}</th>
                <th scope="col">{{ __('permission.per') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @if (!empty($permission))
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->key }}</td>
                <td>{{ $permission->permission_group_id }}</td>
            </tr>
            @endif
            </tr>
        </tbody>
    </table>

    @if (!empty($permission))
        <div class="container-fluid">
            <p for="id" class="form-label"> ID </p>
            <p class="form-control"> {{ $permission->id }} </p>
        </div>
    @endif
    <div class="container-fluid">
        <label for="name" class="form-label"> {{ __('permission.name') }} </label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            placeholder="" value="{{ old('name', $permission->name ?? '') }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="container-fluid">
        <label for="Key" class="form-label"> {{ __('permission.key') }} </label>
        <input name="key" type="text" class="form-control @error('key') is-invalid @enderror" id="key"
            placeholder="" value="{{ old('key', $permission->key ?? '') }}">
        @error('key')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    @php
    $selected = null;
    if (!empty(old('permission_group_id'))) {
        $selected = old('permission_group_id');
    } elseif (!empty($permission)) {
        $selected = $permission->permissionGroup->id;
    }
    @endphp
    <div class="container-fluid">
        <label for="permission_group_id" class="form-label"> {{ __('permission.permission') }} </label>
        <select name="permission_group_id" id="permission_group_id"
            class="form-select @error('permission_group_id') is-invalid @enderror">
            @if (empty($selected))
                <option value="" selected disabled hidden> {{ __('permission.select-per') }} </option>
            @endif
            @foreach ($permissionGroups as $permissionGroup)
                <option value="{{ $permissionGroup->id }}"{{ $selected == $permissionGroup->id ? ' selected' : '' }}>
                    {{ $permissionGroup->name }} </option>
            @endforeach
        </select>
        @error('permission_group_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="row mt-3">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>
    </form>
    </div>
@stop()
