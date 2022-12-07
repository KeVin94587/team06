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
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}

    </div>