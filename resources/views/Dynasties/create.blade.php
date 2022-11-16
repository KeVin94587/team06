
@extends('app')

@section('title', '建立朝代表單')

@section('team06_theme', '建立朝代的表單')

@section('team06_contents')
    {!! Form::open(['url' => 'dynasties/store']) !!}
    <div class="form-group">
        {!! Form::label('name', '朝代名稱')!!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    @include('dynasties.form', ['submitButtonText'=>'新增朝代資料'])
    {!! Form::close() !!}
@endsection
