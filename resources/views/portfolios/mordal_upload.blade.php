<!-- 切り替えボタンの設定 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Capture Upload
</button>

<!-- モーダルの設定 -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">サイトキャプチャアップロード確認画面</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Cancel">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
            {!! Form::open(['url'=>'portfolios/' . $portfolio->id . '/imagestore','method'=>'post','files'=>true]) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('file','Select File',['class'=>'control-label']) !!}
                {!! Form::file('file') !!}
            </div>
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        {!! Form::submit('Upload',['class'=>'btn btn-info']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>