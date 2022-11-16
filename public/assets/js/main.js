    <div class="form-group">
        {!! Form::label('dynasty_id', '所屬朝代')!!}
        {!! Form::select('dynasty_id', $dynasties, ['class' => 'form-control']) !!}
    </div>