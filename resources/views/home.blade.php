@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (\Session::has('message'))
                    <div class="alert alert-success">
                        <ul>
                            <li style="list-style-type: none">{!! \Session::get('message') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
