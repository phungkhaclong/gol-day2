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
        @if (empty($category))
            <form class="container-fluid" method="post" action="{{ route('admin.category.store') }}">
                @csrf
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <h3> {{ __('category.Create Category') }} </h3>
                    @elseif(isset($show))
                        <form class="container-fluid" action="">
                            <div class="row">
                            <div class="d-flex justify-content-between">
                            <h3> {{ __('category.Show Category') }} </h3>
                    @else
                        <form class="container-fluid" method="post"
                            action="{{ route('admin.category.update', $category->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                            <div class="d-flex justify-content-between">
                            <h3>{{ __('category.Edit Category') }} </h3>
        @endif
        <a href="{{ route('admin.category.index') }}" class="btn btn-primary">
            Back
        </a>
    </div>
    </div>
    <div class="container-fluid">
        <label for="name" class="form-label">{{ __('category.Name') }} </label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            placeholder="" value="{{ old('name', $category->name ?? '') }}" <?php if (isset($show)) {
                echo 'readonly';
            } ?>>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="container-fluid">
        <label for="slug" class="form-label">{{ __('category.Slug') }} </label>
        <input name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
            placeholder="" value="{{ old('slug', $category->slug ?? '') }}" <?php if (isset($show)) {
                echo 'readonly';
            } ?>>
        @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    @if (!isset($isShow))
        <div class="row mt-3">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('category.Save') }}
                </button>
            </div>
        </div>
    @endif
    </form>
    </div>
@stop()
