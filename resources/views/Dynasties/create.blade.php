
@extends('app')

@section('title', '建立朝代表單')

@section('team06_theme', '建立朝代的表單')

@section('team06_contents')
    @include('message.list')
    {!! Form::open(['url' => 'dynasties/store']) !!}
    @include('dynasties.form', ['submitButtonText'=>'新增皇帝資料'])
    {!! Form::close() !!}
@endsection
