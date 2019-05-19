@extends('layouts.app')

@section('content')
<div class="col-sm-10 offset-sm-1">
    <h1 class="midashi">About</h1>
</div>
<div class="col-sm-10 offset-sm-1">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">プロフィール</a>
    <a class="nav-item nav-link" id="nav-myroots-tab" data-toggle="tab" href="#nav-myroots" role="tab" aria-controls="nav-myroots" aria-selected="false">生い立ち</a>
  </div>
</nav>

<div class="tab-content mt-3" id="nav-tabContent">
  <div class="tab-pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      @include('abouts.mycareer')
  </div>
  <div class="tab-pane" id="nav-myroots" role="tabpanel" aria-labelledby="nav-myroots-tab">
      @include('abouts.myroots')
  </div>
</div>
</div>
















































@endsection