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
                            <th>Ten Tour</th>
                            <th>Ten dia diem</th>
                            <th></th>
                            <th></th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($lotours)
                       @foreach($lotours as $lotour)
                        <tr>
                            <td>{{ $lotour->id }}</td>
                            <td>{{ $lotour->location_id }}</td>
                            <td>{{ $lotour->tour_id }}</td>
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