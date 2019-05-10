{!! Form::open(['url' => 'portfolios/imagestore','method'=>'post','files'=>true]) !!}

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="form-group">
    @if($portfolio->image)
        <p>
            <img src="{{ asset('storage/portfolio_cap/' . $portfolio->image) }}" alt="capture" />
        </p>
    @else
        <img src="/images/dummy.png" alt="capture" />
    @endif
{!! Form::label('file','参照',['class' => 'control-label btn btn-info']) !!}
{!! Form::file('file') !!}
{!! Form::submit('Submit',['class'=>'btn btn-info']) !!}
</div>
{!! Form::close() !!}