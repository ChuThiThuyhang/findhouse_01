@extends('masterAdmin')
@section('tittle', 'Admin')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">{{ trans('admin.title1') }}</h4>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{ trans('admin.ID') }}</th>
                            <th>{{ trans('admin.Name') }}</th>
                            <th>{{ trans('admin.email') }}</th>
                            <th>{{ trans('admin.phone') }}</th>
                            <th>{{ trans('admin.Username') }}</th>
                            <th>{{ trans('admin.address') }}</th>
                            <th>{{ trans('admin.Edit') }}</th>
                            <th>{{ trans('admin.Delete') }}</th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($users)
                       @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phonenumber }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <a href="">{{ trans('admin.Edit') }}</a>
                            </td>
                            <td>
                                <a href="">{{ trans('admin.Delete') }}</a>
                            </td>
                       </tr>
                       @endforeach
                       @endif
                   </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
