<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <p>{{ trans('home.location') }}</p>
    <div class="col-sm">
        {!! Form::open(['method' => 'GET', 'url' => 'search']) !!} 
            {!! Form::select('province_id', $provinces, null, ['class'=>'','id'=>"hang123"]) !!}
        {!! Form::close() !!}
    </div>
    @if(isset($provinces1))
    <div class="" style="color: #fff; font-size: 20px; position: absolute; margin-left: 250px;"><b>Dia danh: </b> {{$provinces1->province_name}}</div>
    @endif
    <div>
     {!! Form::open(['method' => 'POST', 'url' => 'search']) !!}
            {!! csrf_field() !!}      
            {!! Form::text(
                'text',
                old('text'), 
                [
                    'placeholder' => trans('register.email'),
                    'class' => 'text-search',
                ]) 
            !!}
        {!! Form::close() !!}
    </div>
</nav>

@section('js')
<script>
    $("#hang123").change(function(){
        var id = $('#hang123 option:selected').val();
        location.href="/local/" + id;
    }); 
</script>
<!-- <script>
    $('#hang123').on('change', function(){
        var selectElem = document.getElementById('province_id');
        alert(selectElem);
    });
</script> -->
