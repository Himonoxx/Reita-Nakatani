@extends('layouts.app')

@section('content')
<div class="col-sm-10 offset-sm-1">
    <h1 class="midashi">新規作成画面</h1>
</div>

<div class="card col-sm-10 offset-1 pt-5 pb-5">
    
    <div class="row">
        
        <div class="col-sm-10 offset-sm-1">

            {!! Form::model($portfolio,['route' => 'portfolios.store']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title',null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('siteurl', 'Site URL') !!}
                    {!! Form::text('siteurl',null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('comment', 'Comment') !!}
                    {!! Form::textarea('comment',null, ['class' => 'form-control','rows'=>'5']) !!}
                </div>
                
                {!! Form::submit('Create', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}
        </div>
</div>



@endsection