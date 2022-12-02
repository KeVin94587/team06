
@extends('app')

@section('title', '編輯朝代表單')

@section('team06_theme', '編輯朝代的表單')

@section('team06_contents')
    {!! Form::open(['url' => 'dynasties/update/'.$dynasty->id, 'method'=>'PATCH']) !!}
    <div class="form-group">
        {!! Form::label('dynasty_name', '朝代名稱')!!}
        {!! Form::text('dynasty_name', $dynasty->dynasty_name, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dynasty_start_year', '朝代起始年')!!}
        {!! Form::text('dynasty_start_year', $dynasty->dynasty_start_year, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dynasty_end_year', '朝代結束年')!!}
        {!! Form::text('dynasty_end_year', $dynasty->dynasty_end_year, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit("更新朝代", ['class'=>'btn btn-primary form-control']) !!}
    </div>
    @include('dynasties.form', ['submitButtonText'=>'更新朝代資料'])
    {!! Form::close() !!}
@endsection
