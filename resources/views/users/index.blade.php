@extends('layouts.app')

@section('content')
<h1 class="col-sm-10 offset-1">管理画面</h1>
<div class="card col-sm-10 offset-1 pt-5 pb-5">
    <div class="d-flex">
        <div class="card col-sm-5 mx-auto">
            <p>ポートフォリオの編集及びアップロードはこちら。</p>
            {!! link_to_route('portfolios.portfolios','Go Edit',null,['class'=>'btn btn-info mb-3']) !!}
            
            <p>ポートフォリオの新規登録はこちら。</p>
            {!! link_to_route('portfolios.create','New Portfolio',null,['class'=>'btn btn-info mb-3']) !!}
        </div>
        
        <div class="card col-sm-5 mx-auto">
            <p>お問い合わせ内容の確認及び返信はこちら。</p>
            <button class="btn btn-success mb-3">Go Message Box</button>
        </div>
    </div>
    
</div>






@endsection