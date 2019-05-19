
<div class="mx-auto">
    {!! Form::label('file', 'Site Capture') !!}
    {!! Form::open(['route'=>'portfolios.imagestore','method'=>'put','files'=>true]) !!}
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="form-group mx-auto">
        @if($portfolio->image)
            <p>
                <img src="{{ asset('storage/portfolio_cap/' . $portfolio->image) }}" alt="capture" />
            </p>
        @else
            <img src="/images/dummy.png" alt="capture" />
        @endif
        {!! Form::file('file') !!}
        {!! Form::submit('Submit',['class'=>'btn btn-info btn-block mt-3']) !!}
    </div>
    {!! Form::close() !!}
</div>