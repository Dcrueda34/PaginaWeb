<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombrecat') }}
            {{ Form::text('nombrecat', $categoria->nombrecat, ['class' => 'form-control' . ($errors->has('nombrecat') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecat']) }}
            {!! $errors->first('nombrecat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>