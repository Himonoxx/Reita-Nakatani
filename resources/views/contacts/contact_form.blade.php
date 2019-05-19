<div class="text-center">
    <h4>お問い合わせフォーム</h4>
</div>
<div class="row">
    <div class="col-sm-10 offset-sm-1 mb-3">

        {!! Form::open(['route' => 'contacts.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('categoly', 'Categoly') !!}
                            {!! Form::select('categoly', ['人事・採用関係'=>'人事・採用関係','ご質問'=>'ご質問','その他お問い合わせ'=>'その他お問い合わせ'],['class'=>'w-auto']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('title', '件名') !!}
                            {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('content', '内容') !!}
                            {!! Form::textarea('content', old('content'), ['class' => 'form-control','rows'=>'5']) !!}
                        </div>
                        
                            {!! Form::submit('Submit', ['class' => 'btn btn-info btn-block']) !!}
        {!! Form::close() !!}
        </div>
    </div>