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