
@extends('app')

@section('title', '編輯朝代表單')

@section('team06_theme', '編輯朝代的表單')

@section('team06_contents')
    @include('message.list')
    {!! Form::model($dynasty, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\DynastiesController@update', $dynasty->id]]) !!}
    @include('dynasties.form', ['submitButtonText'=>'更新朝代資料'])
    {!! Form::close() !!}
@endsection