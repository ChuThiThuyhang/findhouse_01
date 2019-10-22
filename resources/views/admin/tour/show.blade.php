@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">{{ trans('tour.title1') }}</h4>
                <a href="{{ url('admincp/addTour') }}">{{ trans('tour.addTour') }}</a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{ trans('tour.ID') }}</th>
                            <th>{{ trans('tour.Name') }}</th>
                            <th>{{ trans('tour.start_at') }}</th>
                            <th>{{ trans('tour.stay_date_number') }}</th>
                            <th>{{ trans('tour.price') }}</th>
                            <th>{{ trans('tour.rate_id') }}</th>
                            <th>{{ trans('tour.description') }}</th>
                            <th>{{ trans('admin.Edit') }}</th>
                            <th>{{ trans('admin.Delete') }}</th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($tours)
                       @foreach($tours as $tour)
                        <tr>
                            <td>{{ $tour->tour_id }}</td>
                            <td>{{ $tour->name }}</td>
                            <td>{{ $tour->start_at }}</td>
                            <td>{{ $tour->stay_date_number }}</td>
                            <td>{{ $tour->price }}</td>
                            <td>{{ $tour->rate_id }}</td>
                            <td>{{ $tour->description }}</td>
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
