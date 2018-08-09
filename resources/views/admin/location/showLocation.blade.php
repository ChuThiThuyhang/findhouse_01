@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">{{ trans('location.title1') }}</h4>
                <a href="{{ url('admincp/addLocation') }}">{{ trans('location.addLocation') }}</a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{ trans('location.ID') }}</th>
                            <th>{{ trans('location.name') }}</th>
                            <th>{{ trans('location.address') }}</th>
                            <th>{{ trans('location.province_id') }}</th>
                            <th>{{ trans('location.description') }}</th>
                            <th>{{ trans('location.image') }}</th>
                            <th>{{ trans('admin.Edit') }}</th>
                            <th>{{ trans('admin.Delete') }}</th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($locations)
                       @foreach($locations as $location)
                        <tr>
                            <td>{{ $location->id }}</td>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->address }}</td>
                            <td>{{ $location->province_id }}</td>
                            <td>{{ $location->description }}</td>
                            <td>{{ $location->image }}</td>
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
