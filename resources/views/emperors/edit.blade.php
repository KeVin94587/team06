
@extends('app')

@section('title', '編輯皇帝表單')

@section('team06_theme', '編輯皇帝的表單')

@section('team06_contents')
    {!! Form::model($emperor, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\EmperorsController@update', $emperor->id]]) !!}
    @include('emperors.form', ['submitButtonText'=>'更新皇帝資料'])
    {!! Form::close() !!}
@endsection
