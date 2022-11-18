
@extends('app')

@section('title', '建立皇帝表單')

@section('team06_theme', '建立皇帝的表單')

@section('team06_contents')
    {!! Form::open(['url' => 'emperors/store']) !!}
    <div class="form-group">
        {!! Form::label('emperor_name', '皇帝名稱')!!}
        {!! Form::text('emperor_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dynasty_id', '所屬朝代')!!}
        {!! Form::select('dynasty_id', $dynasties, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('emperor_life', '皇帝壽命')!!}
        {!! Form::text('emperor_life', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('emperor_start_year', '登基年')!!}
        {!! Form::text('emperor_start_year', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('emperor_end_year', '退位年')!!}
        {!! Form::text('emperor_end_year', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit("新增皇帝", ['class'=>'btn btn-primary form-control']) !!}
    </div>

    @include('dynasties.form', ['submitButtonText'=>'新增皇帝資料'])
    {!! Form::close() !!}
@endsection
