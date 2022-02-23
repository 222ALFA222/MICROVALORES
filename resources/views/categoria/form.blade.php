<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $categoria->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('valuacion') }}
            {{ Form::text('valuacion', $categoria->valuacion, ['class' => 'form-control' . ($errors->has('valuacion') ? ' is-invalid' : ''), 'placeholder' => 'valuacion']) }}
            {!! $errors->first('valuacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('numero_de_acciones') }}
            {{ Form::text('numero_de_acciones', $categoria->numero_de_acciones, ['class' => 'form-control' . ($errors->has('numero_de_acciones') ? ' is-invalid' : ''), 'placeholder' => 'numero_de_acciones']) }}
            {!! $errors->first('numero_de_acciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('acciones_en_venta') }}
            {{ Form::text('acciones_en_venta', $categoria->acciones_en_venta, ['class' => 'form-control' . ($errors->has('acciones_en_venta') ? ' is-invalid' : ''), 'placeholder' => 'acciones_en_venta']) }}
            {!! $errors->first('acciones_en_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('precio_por_accion') }}
            {{ Form::text('precio_por_accion', $categoria->precio_por_accion, ['class' => 'form-control' . ($errors->has('precio_por_accion') ? ' is-invalid' : ''), 'placeholder' => 'precio_por_accion']) }}
            {!! $errors->first('precio_por_accion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>