@extends('admin.layouts.admin.master')
@section('main')
    <div class="col-md-9 main_right">
        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <p style="font-weight: bold;"> Showing Role: </p>
                <div>
                    <a href="{{ route('admin.role.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
            @if (!empty($role))
                <div class="container-fluid">
                    <p>
                        ID: {{ $role->id }}
                    </p>
                    <p>
                        Name: {{ $role->name }}
                    </p>
                    <p>
                        Created at: {{ $role->created_at }}
                    </p>
                    <p>
                        Updated at: {{ $role->updated_at }}
                    </p>
                </div>
                <div class="row mt-3">
                    <div class="d-flex justify-content-center">
                        <div>
                            <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-primary"> Edit </a>
                        </div>
                        <div>
                            <form class="d-inline" method="post" action="{{ route('admin.role.destroy', $role->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> Delete </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@stop()
