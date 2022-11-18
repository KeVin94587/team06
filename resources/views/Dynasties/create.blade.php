
@extends('app')

@section('title', '建立朝代表單')

@section('team06_theme', '建立朝代的表單')

@section('team06_contents')
    {!! Form::open(['url' => 'dynasties/store']) !!}
    <div class="form-group">
        {!! Form::label('dynasty_name', '朝代名稱')!!}
        {!! Form::text('dynasty_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dynasty_start_year', '朝代起始年')!!}
        {!! Form::text('dynasty_start_year', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dynasty_end_year', '朝代結束年')!!}
        {!! Form::text('dynasty_end_year', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit("新增朝代", ['class'=>'btn btn-primary form-control']) !!}
    </div>
    @include('dynasties.form', ['submitButtonText'=>'新增朝代資料'])
    {!! Form::close() !!}
@endsection
