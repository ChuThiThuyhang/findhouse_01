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
                            <th>{{ trans('tour.image') }}</th>
                            <th>{{ trans('tour.slot') }}</th>
                            <th>{{ trans('tour.transport') }}</th>
                            <th>{{ trans('tour.priceKid') }}</th>
                            <th>{{ trans('tour.type') }}</th>
                            <th>{{ trans('tour.pricekidsup') }}</th>
                            <th></th>
                            <th></th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($tours)
                       @foreach($tours as $tour)
                        <tr>
                            <td>{{ $tour->id }}</td>
                            <td>{{ $tour->name }}</td>
                            <td>{{ $tour->start_at }}</td>
                            <td>{{ $tour->stay_date_number }}</td>
                            <td>{{ $tour->price }}</td>
                            <td>{{ $tour->rate_id }}</td>
                            <td>{{ $tour->description }}</td>
                            <td>{{ $tour->image }}</td>
                            <td>{{ $tour->slot }}</td>
                            <td>{{ $tour->transport }}</td>
                            <td>{{ $tour->priceKid }}</td>
                            <td>{{ $tour->type }}</td>
                            <td>{{ $tour->pricekidsup }}</td>
                            <td>
                                <a href="{{ url('admincp/editTour/'.$tour->id) }}">{{ trans('admin.Edit') }}</a>
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
@section('js')
<script src="{{ asset('bower_components/myBootstrap-design/cssBookTour/js/uploadImage.js') }}"></script>
@endsection