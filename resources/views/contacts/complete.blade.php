@extends('layouts.app')

@section('content')
<div class="col-sm-8 offset-sm-2">
    <h1 class="midashi">確認画面</h1>
</div>
<div class="card col-sm-6 offset-sm-3">
    <h4 class="c-midashi">処理受付完了</h4>
    <b><p>お問い合わせ頂き有難う御座いました。<br>
            只今確認メールを送信致しましたので、ご確認下さい。</p></b>
            
    {!! link_to_route('contacts.create','戻る',null,['class'=>'btn btn-success col-sm-4 offset-4 mb-3 mt-3']) !!}
    
</div>





@endsection