@extends('layouts.app')

@section('content')
 <div class="col-sm-10 offset-sm-1 mt-5">
    <h1 class="midashi"><b>Portfolios</b></h1>
  </div>
        <div class="card col-sm-10 offset-sm-1 mt-0">
            <div class="card-deck mt-5 mb-5">
               <?php $cnt=1; ?>
               @if(count($portfolios)<=0)
                 <h1 class="text-center mx-auto">Nothing Portfolios</h1>
                @endif
              @foreach($portfolios as $portfolio)
          
                @if($cnt % 4 == 0)
                    <div class="card bg-secondary text-light">
                      @if($portfolio->image == null)
                        <img class="card-img-top" src="/images/dummy.png" alt="Card image cap">
                      @else
                        <img class="card-img-top" src={{ $portfolio->image }} alt="Card image cap">
                      @endif
                      <div class="card-body">
                        <h4 class="card-title">{{ $portfolio->title }}</h4>
                        <p class="card-text">{{ $portfolio->comment }}</p>
                        <p class="card-text"><small class="text-light mb-auto">date:{{ \Carbon\Carbon::createFromTimestamp($portfolio->timestamps)->format("m/d/Y") }}</small></p>
                        <div class="mb-auto">
                          <a class="btn btn-light text-dark btn-block" href={{ $portfolio->siteurl }} role="button">Visit Website</a>
                          @if(Auth::check())
                            @if(Auth::user()->id == $portfolio->user_id)
                              {!! link_to_route('portfolios.edit','Edit',['id'=>$portfolio->id],['class'=>'btn btn-info text-dark btn-block']) !!}
                            @endif
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-deck mt-5 mb-5">
                @else
                
                  <div class="card bg-secondary text-light">
                    @if($portfolio->image == null)
                      <img class="card-img-top" src="/images/dummy.png" alt="Card image cap">
                    @else
                      <img class="card-img-top" src={{ $portfolio->image }} alt="Card image cap">
                    @endif
                    <div class="card-body">
                      <h4 class="card-title">{{ $portfolio->title }}</h4>
                      <p class="card-text">{{ $portfolio->comment }}</p>
                      <p class="card-text"><small class="text-light mb-auto">{{ date_format($portfolio->created_at,'Y-m-d') }}</small></p>
                      <div class="mb-auto">
                        <a class="btn btn-light text-dark btn-block" href={{ $portfolio->siteurl }} role="button">Visit Website</a>
                        @if(Auth::check())
                          @if(Auth::user()->id == $portfolio->user_id)
                            {!! link_to_route('portfolios.edit','Edit',['id'=>$portfolio->id],['class'=>'btn btn-info text-dark btn-block']) !!}
                          @endif
                        @endif
                    </div>
                    </div>
                  </div>
                

                  
                
                @endif
                <?php $cnt=$cnt+1; ?>
                @endforeach
                </div>
              
              
    
    
</div>



@endsection