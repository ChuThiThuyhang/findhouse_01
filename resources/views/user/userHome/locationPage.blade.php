@extends('masterUser')
@section('title', 'Location')
@section('navbar')
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <a href="{{ url('/') }}" class="a_locationPage">Home</a>
    <p class="p_locationPage">{{ trans('home.location') }}</p>
    <div class="col-sm" id="_locationPgae">
        {!! Form::open(['method' => 'GET', 'url' => 'search']) !!} 
            <i class="icon icon-arrow-down3"></i>
            {!! Form::select(
                'province_id',
                $provinces, 
                null,
                [
                    'class' => 'form-control search-input',
                    'id' => 'hang123'
                ]) 
            !!}
        {!! Form::close() !!}
    </div>
    <div class="form-field">
        <i class="icon icon-calendar2"></i>
        <div id="prefetch">
            {!! Form::open(['method' => 'GET', 'url' => '/searchLocation']) !!}
                {!! Form::text(
                'nameLocation', 
                null,
                [
                    'placeholder' => trans('location.search'),
                    'class' => 'form-control search-input',
                    'id' => 'search-input',
                    'autocomplete' => 'off'
                ]) 
            !!}
            {!! Form::close() !!}
        </div>
    </div>
</nav>
@endsection
@section('playList')
    <div class="col-sm-4 col-md-4 sidebar sidebar-left pull-left" id="show-location">
        <div class="panel-group sidebar-body" id="accordion-left">
            <div class="panel panel-default">
                <div class="panel-heading" id="pnlInfo">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#layers" class="">
                            <i class="fa fa-list-alt"></i>
                            <b>
                                <span id="TieuDe_Sub">{{ trans('home.title') }}</span>
                            </b>
                        </a>
                    </h4>
                </div>
                <div id="layers" class="panel-collapse collapse in">
                    <div id="divRotate">
                        <div class="panel-body list-group">
                            <div class="jcarousel2" id="carousel2" data-jcarousel="true">
                                <ul>
                                    <li>
                                        <a data-fancybox-group="gallery" class="fancybox" href="{{ asset(config('upload.image') . '/' . $local->image) }}">
                                            <div class="thumb" id="image-1">
                                                <img src="{{ asset(config('upload.image') . '/' . $local->image) }}" class="imgSlideInfo" id="img-3">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="x-clear"></div>
                        </div>
                    </div>
                    <div id="divContent">
                        <div class="container">
                            <h4>{{ $local->name }}</h4>
                            <p>{{ trans('home.address') . $local->address }}</p>
                            <p>{{ trans('home.detail') }} 
                                <a href="{{ asset('/detailLocation') . '/' . $local->id }}">{{ trans('home.see') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('LocationMap')
    <div style="width: 100%" class="local-map">
        <iframe width="100%" height="400px" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=B%C3%A0%20N%C3%A0%20Hill+(B%C3%A0%20N%C3%A0)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0">
            <a href="https://www.maps.ie/create-google-map/">Add map to website</a>
        </iframe>
    </div>
@endsection
@section('sliderLocation')
    <div id="ThumbnailCarousel" class="carousel slide col-xs-12" data-ride="carousel">
        <div class="carousel-inner">
        @if($locations)
        @foreach($locations->chunk(4) as $chunk)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="row">
                @foreach($chunk as $local1)
                    <div class="col-md-3 col-sm-6">
                        <a href="javascript:void(0)" class="thumbnail" id="a1" onclick="myFunction({{$local1->province_id}}, {{$local1->id}})">
                            {{ $local1->name }}
                            <img src="{{ asset(config('upload.image') . '/' . $local1->image) }}" alt="Image" class="img-fluid img-thumbnail">
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        @endforeach
        @endif
        </div>
        <a class="carousel-control-prev" href="#ThumbnailCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">trans('home.Previous') }}</span>
        </a>
        <a class="carousel-control-next" href="#ThumbnailCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">trans('home.Next') }}</span>
        </a>
    </div>
@endsection
@section('js')
<script>
    $('#hang123').change(function() {
        var id = $('#hang123 option:selected').val();
        location.href = '/local/' + id;
    });

    @if (!empty($idpro))
        $('#hang123').val('{!! $idpro !!}');
    @endif

    function myFunction(province_id, id)
    {
        location.href = '/location/' + province_id + '/' + id;
    }
</script>
@endsection
