@extends('adminlte::page')
@section('tittle', 'Admin')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">{{ trans('plan.title1') }}</h4>
                <a href="">{{ trans('plan.addPlan') }}</a>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>{{ trans('plan.id') }}</th>
                            <th>{{ trans('plan.plan_name') }}</th>
                            <th>{{ trans('plan.location_id') }}</th>
                            <th>{{ trans('plan.start_at') }}</th>
                            <th>{{ trans('plan.datenumber') }}</th>
                            <th>{{ trans('plan.content') }}</th>
                            <th>{{ trans('admin.Edit') }}</th>
                            <th>{{ trans('admin.Delete') }}</th>
                       </tr>
                    </thead>
                    <tbody>
                       @if($plans)
                       @foreach($plans as $plan)
                        <tr>
                            <td>{{ $plan->id }}</td>
                            <td>{{ $plan->plan_name }}</td>
                            <td>{{ $plan->location_id }}</td>
                            <td>{{ $plan->start_at }}</td>
                            <td>{{ $plan->datenumber }}</td>
                            <td>{{ $plan->content }}</td>
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
