@extends('layouts.app')

@section('content')
 <div class="col-sm-10 offset-sm-1 mt-5">
    <h1 class="midashi"><b>Portfolios</b></h1>
  </div>
        <div class="card col-sm-10 offset-sm-1 mt-0 mb-5">
          <div class="d-flex" style="flex-wrap: wrap;">
          @foreach($portfolios as $portfolio)
            <div class="card mt-3 bg-secondary text-light m-3 resp">
              @if ($portfolio->image == null)
                <img class="card-img-top" src="/images/dummy.png" alt="images cap">
              @else
                <img class="card-img-top" src={{ $portfolio->image }} onerror="this.src='/images/dummy.png';" alt="images cap">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $portfolio->title }}</h5>
                <p class="card-text">{{ $portfolio->comment }}</p>
                <p class="card-text"><small class="text-light mb-auto">{{ \Carbon\Carbon::createFromTimestamp($portfolio->timestamps)->format("m/d/Y") }}</small></p>
                <div class="mb-auto">
                  <a class="btn btn-light text-dark btn-block" href={{ $portfolio->siteurl }} role="button">Visit Website</a>
                  @if(Auth::check())
                    @if(Auth::user()->id == $portfolio->user_id)
                      {!! link_to_route('portfolios.edit','Edit',['id'=>$portfolio->id],['class'=>'btn btn-info text-dark btn-block']) !!}
                      {!! link_to_route('portfolios.upload','Capture Upload',['id'=>$portfolio->id],['class'=>'btn btn-info text-dark btn-block']) !!}
                    @endif
                  @endif
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
        {{ $portfolios->links('pagination::bootstrap-4') }}
@endsection