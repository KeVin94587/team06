
@extends('app')

@section('title', '建立皇帝表單')

@section('team06_theme', '建立皇帝的表單')

@section('team06_contents')
    {!! Form::open(['url' => 'emperors/store']) !!}
    <div class="form-group">
        {!! Form::label('emperor_name', '皇帝名稱')!!}
        {!! Form::select('emperor_name', $emperors, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dynasty_name', '所屬朝代')!!}
        {!! Form::select('dynasty_name', $dynasties, ['class' => 'form-control']) !!}

    </div>
    @include('dynasties.form', ['submitButtonText'=>'新增皇帝資料'])
    {!! Form::close() !!}
@endsection
