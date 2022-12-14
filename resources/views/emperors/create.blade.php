
@extends('app')

@section('title', '建立皇帝表單')

@section('team06_theme', '建立皇帝的表單')

@section('team06_contents')
    @include('message.list')
    {!! Form::open(['url' => 'emperors/store']) !!}
    @include('emperors.form', ['submitButtonText'=>'新增皇帝資料'])
    {!! Form::close() !!}
@endsection
