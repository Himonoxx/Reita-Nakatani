@extends('layouts.app')

@section('content')

<div class="card col-sm-10 offset-1">
    <div class="mx-auto">
        {!! Form::model($portfolio,['route'=>'portfolios.store']) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Title',null,['class'=>'col-sm-10 offset-1']) !!}
                            {!! Form::text('title', old('title'),null, ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('siteurl', 'Site URL') !!}
                            {!! Form::text('siteurl',old('siteurl'),null, ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            {!! Form::label('comment', 'Comment') !!}
                            {!! Form::textarea('comment',null, ['class' => 'form-control', 'rows' => '2']) !!} 
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('image', 'Site Capture', ['class' => 'control-label']) !!}
                            {{ csrf_field() }}
                            {!! Form::file('file',null,['files'=>true]) !!}
                        </div>
            
                        {!! Form::submit('Create', ['class' => 'btn btn-info btn-block']) !!}
        {!! Form::close() !!}
    </div>
</div>



@endsection