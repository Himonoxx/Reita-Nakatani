@extends('layouts.app')

@section('content')
<div class="col-sm-10 offset-1 ">
<h1 class="midashi">ポートフォリオ編集ページ</h1>
</div>
<div class="card col-sm-10 offset-1 pt-5 pb-5">
    <div class="d-flex">
        <div class="col-sm-5 mx-auto">
            <h1 class="text-center c-midashi">Select Portfolio</h1>
        </div>
        
        <div class="col-sm-5 mx-auto">
            <h1 class="text-center c-midashi">Edit Form</h1>
        </div>
    </div>
    
    <div class="d-flex">
        <div class="col-sm-5 mx-auto">
                <div class="card bg-secondary text-light">
                      @if($portfolio->image == null)
                        <img class="card-img-top" src="/images/dummy.png" alt="Card image cap">
                      @else
                        <img class="card-img-top" src={{ $portfolio->image }} alt="Card image cap">
                      @endif
                    <div class="card-body">
                        <h4 class="card-title">{{ $portfolio->title }}</h4>
                        <p class="card-text">{{ $portfolio->comment }}</p>
                        <p class="card-text"><small class="text-muted mb-auto">{{ $portfolio->timestamps }}</small></p>
                        <div class="mb-auto">
                          <a class="btn btn-light text-dark btn-block" href={{ $portfolio->siteurl }} role="button">Visit Website</a>
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
                            {!! Form::textarea('comment',null, ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('siteurl', 'Site URL') !!}
                            {!! Form::text('siteurl',null, ['class' => 'form-control']) !!}
                        </div>
                        
                        
                    
                        {!! Form::submit('Edit', ['class' => 'btn btn-info btn-block mb-5']) !!}
                    {!! Form::close() !!}
                    
                    
                    
                    @if(Auth::user()->id == $portfolio->user_id)
                        <div>
                            {!! Form::model($portfolio,['route'=>['portfolios.destroy',$portfolio->id],'method'=>'delete']) !!}
                                {!! Form::submit('ポートフォリオを削除する',['class'=>'btn btn-warning btn-block mb-5']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                
        
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
</div>






@endsection