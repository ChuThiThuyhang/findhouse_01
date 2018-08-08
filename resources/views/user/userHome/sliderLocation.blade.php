<div id="ThumbnailCarousel" class="carousel slide col-xs-12" data-ride="carousel">
    <div class="carousel-inner">
    @if($locations)
    @foreach($locations->chunk(4) as $chunk)
        <div class="carousel-item @if($loop->first) active @endif">
            <div class="row">
            @foreach($chunk as $local)
                <div class="col-md-3 col-sm-6">
                    <a href="/location/{{ $local->id }}" class="thumbnail">
                        {{ $local->name }}
                        <img src="{{ asset('bower_components/myBootstrap-design/lib/img/'.$local->image)}}" alt="Image" class="img-fluid img-thumbnail">
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
