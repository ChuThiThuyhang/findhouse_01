@extends('masterAdmin')
@section('tittle', 'Admin')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">{{ trans('rate.title1') }}</h4>
                <a href="">{{ trans('rate.addRate') }}</a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{ trans('rate.ID') }}</th>
                            <th>{{ trans('rate.Name') }}</th>
                            <th>{{ trans('rate.rate_point') }}</th>
                            <th>{{ trans('rate.start_at') }}</th>
                            <th>{{ trans('rate.numberday') }}</th>
                            <th>{{ trans('admin.Edit') }}</th>
                            <th>{{ trans('admin.Delete') }}</th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($rates)
                       @foreach($rates as $rate)
                        <tr>
                            <td>{{ $rate->id }}</td>
                            <td>{{ $rate->name }}</td>
                            <td>{{ $rate->start_at }}</td>
                            <td>{{ $rate->rate_point }}</td>
                            <td>{{ $rate->rate_date_number }}</td>
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
