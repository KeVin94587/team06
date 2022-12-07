
@extends('app')

@section('title', '建立朝代表單')

@section('team06_theme', '建立朝代的表單')

@section('team06_contents')
    {!! Form::open(['url' => 'dynasties/store']) !!}
    @include('dynasties.form', ['submitButtonText'=>'新增皇帝資料'])
    {!! Form::close() !!}
@endsection
