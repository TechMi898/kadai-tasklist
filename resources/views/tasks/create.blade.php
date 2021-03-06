@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
      <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">  
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
                <div class="form-group">
                    {!! Form::label('content', 'タスク：') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::select('status', [
                        '未開始' => '未開始',
                        '実行中' => '実行中',
                        '繰延' => '繰延',
                        '完了' => '完了'], null, ['class' => 'form-control']) !!}
                </div>
        
            {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection