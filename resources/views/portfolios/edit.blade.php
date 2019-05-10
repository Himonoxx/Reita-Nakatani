@extends('layouts.app')

@section('content')
<h1 class="col-sm-10 offset-1">ポートフォリオ編集ページ</h1>
<div class="card col-sm-10 offset-1 pt-5 pb-5">
    <div class="d-flex">
        <div class="col-sm-5 mx-auto">
            <h1 class="text-center">選択しているポートフォリオ</h1>
        </div>
        
        <div class="col-sm-5 mx-auto">
            <h1 class="text-center">編集フォーム</h1>
        </div>
    </div>
    
    <div class="d-flex">
        <div class="col-sm-5 mx-auto">
            <div class="card bg-secondary text-light">
                <img class="card-img-top" src="/images/dummy.png" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted mb-auto">Last updated 3 mins ago</small></p>
                  <div class="mb-auto">
                    <button class="btn btn-light text-dark btn-block">Visit Website</button>
                </div>
                </div>
              </div>
            
        </div>
        
        <div class="card col-sm-5 mx-auto">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 pt-3">
        
                    {!! Form::model($portfolio, ['route' => ['portfolios.update', $portfolio->id], 'method' => 'put']) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title',null, ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            {!! Form::label('comment', 'Comment') !!}
                            {!! Form::textarea('content',null, ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('siteurl', 'Site URL') !!}
                            {!! Form::text('siteurl',null, ['class' => 'form-control']) !!}
                        </div>
                        
                        
        
                        {!! Form::submit('Edit', ['class' => 'btn btn-info btn-block mb-5']) !!}
                    {!! Form::close() !!}
                    <div>
                        {!! Form::label('file', 'Site Capture') !!}
                        @include('portfolios.upload',['portfilio'=>$portfolio])
                    </div>
                
        
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
</div>






@endsection