@extends('layouts.app')

@section('content')
<div class="col-sm-10 offset-sm-1">
    <h1 class="midashi">管理画面</h1>
</div>
<div class="card col-sm-10 offset-sm-1 pt-5 pb-5">
    <div class="d-flex">
        <div class="card col-sm-5 mx-auto">
            <p>ポートフォリオの編集及びアップロードはこちら。</p>
            {!! link_to_route('portfolios.portfolios','Go Edit',null,['class'=>'btn btn-info mb-3']) !!}
            
            <p>ポートフォリオの新規登録はこちら。</p>
            {!! link_to_route('portfolios.create','New Portfolio',null,['class'=>'btn btn-info mb-3']) !!}
        </div>
        
        <div class="card col-sm-5 mx-auto">
            <p>お問い合わせ内容の確認及び返信はこちら。</p>
            {!! link_to_route('contacts.index','Go Message Box',null,['class'=>'btn btn-success mb-3']) !!}
        </div>
    </div>
    
</div>






@endsection