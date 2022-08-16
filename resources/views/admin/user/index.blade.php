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
        <table class="table table-bordered">
            <div class="row">
                <div class="col-md-2">
                    <p><span>{{ __('user.UserList') }}</span> </p>
                </div>
                <div class="col-md-10">
                    <div class="main_but">
                        <span class="send_mail"><button type="button" class="btn btn-outline-secondary">
                                <a href="{{ route('admin.admin_sendmail') }}">{{ __('user.Send Mail') }}</a></button>
                        </span>
                        <span class="add_user"><button class="btn btn-primary">
                                <a href="{{ route('admin.user.create') }}">{{ __('user.addnew') }}</a> </button>
                        </span>
                    </div>
                </div>
            </div>
            <thead>
                <tr>
                    <th style="width: 10%;" scope="col">{{ __('user.Avatar') }}</th>
                    <th style="width: 20%;" scope="col">{{ __('user.Name') }}</th>
                    <th style="width: 25%;"scope="col">{{ __('user.Email') }}</th>
                    <th style="width: 20%;"scope="col">{{ __('user.Roles') }}</th>
                    <th style="width: 30%;" scope="col">{{ __('user.Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($users))
                    @foreach ($users as $value)
                        <tr>
                            <th style="width: 10%;"><img src="{{ $value->social_avatar ?? 'https://fakeimg.pl/50/' }}"
                                        class="user-avatar rounded-circle" alt="">
                                </th>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                <select style="height: 70px;width:150px ; overflow-y: scroll" multiple disabled>
                                @foreach($value->roles as $role)
                                  <option> {{ $role->name }} </option>
                                @endforeach
                                </select>
                              </td>
                            <td>
                                <a href="{{ route('admin.user.show', $value->id) }}" class="btn btn-success"> {{ __('user.Show') }} </a>
                                <a  href="{{ route('admin.user.edit', $value->id) }}"  class="btn btn-primary"> {{ __('user.Edit') }} </a>
                                <form class="d-inline" method="post" action="{{ route('admin.user.destroy', $value->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Do you want to delete?')" class="btn btn-danger"> {{ __('user.Delete') }} </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@stop()
