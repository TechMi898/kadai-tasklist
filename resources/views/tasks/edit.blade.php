@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', [
            '未開始' => '未開始',
            '実行中' => '実行中',
            '繰延' => '繰延',
            '完了' => '完了']) !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection