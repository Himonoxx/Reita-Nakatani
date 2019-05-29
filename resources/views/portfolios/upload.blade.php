@extends('layouts.app')

@section('content')



<div class="col-sm-10 offset-sm-1">
    <h4 class="c-midashi">アップロード画面</h4>
    <div class="res">
        <div class="col-sm-6">
            <h4 class="text-center"><<現在のキャプチャ画像>></h4>
            <div class="card">
                @if(isset($portfolio->image))
                    <img class="card-img-top img-thumbnail" style="height:50vh;" src={{$portfolio->image}} alt="" />
                @else
                    <img src=/images/dummy.png alt="" />
                @endif
            </div>
        </div>
        
        
        <div class="col-sm-6">
            <h4 class="text-center"><<詳細画面>></h4>
            <div class="card" style="height:50vh;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Title</b><br>{{$portfolio->title}}</li>
                    <li class="list-group-item"><b>Site URL</b><br>{{$portfolio->siteurl}}</li>
                    <li class="list-group-item"><b>Comment</b><br>{{$portfolio->comment}}</li>
                    
                <li class="list-group-item">
                <div>
                    
                    {!! Form::open(['url'=>'portfolios/' . $portfolio->id . '/imagestore','method'=>'post','files'=>true]) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::label('file','Select File',['class'=>'control-label']) !!}
                        {!! Form::file('file') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::submit('Upload',['class'=>'btn btn-info btn-block']) !!}
                    </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </div>

@endsection