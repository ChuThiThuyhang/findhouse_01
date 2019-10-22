@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">{{ trans('province.title1') }}</h4>
                <a href="">{{ trans('province.addprovince') }}</a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{ trans('province.id') }}</th>
                            <th>{{ trans('province.province_name') }}</th>
                            <th>{{ trans('province.description') }}</th>
                            <th>{{ trans('admin.Edit') }}</th>
                            <th>{{ trans('admin.Delete') }}</th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($provinces)
                       @foreach($provinces as $province)
                        <tr>
                            <td>{{ $province->id }}</td>
                            <td>{{ $province->province_name }}</td>
                            <td>{{ $province->description }}</td>
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
