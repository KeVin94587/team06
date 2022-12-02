
@extends('app')

@section('title', '編輯皇帝表單')

@section('team06_theme', '編輯皇帝的表單')

@section('team06_contents')
    {!! Form::open(['url' => 'emperors/update/'.$emperor->id, 'method'=>'PATCH']) !!}
    <div class="form-group">
        {!! Form::label('emperor_name', '皇帝名稱')!!}
        {!! Form::text('emperor_name', $emperor->emperor_name, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dynasty_id', '所屬朝代')!!}
        {!! Form::select('dynasty_id', $dynasties, $selected_dyastyid, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('emperor_life', '皇帝壽命')!!}
        {!! Form::text('emperor_life', $emperor->emperor_life, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('emperor_start_year', '登基年')!!}
        {!! Form::text('emperor_start_year', $emperor->emperor_start_year, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('emperor_end_year', '退位年')!!}
        {!! Form::text('emperor_end_year', $emperor->emperor_end_year, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit("更新皇帝", ['class'=>'btn btn-primary form-control']) !!}
    </div>

    @include('dynasties.form', ['submitButtonText'=>'更新皇帝資料'])
    {!! Form::close() !!}
@endsection
