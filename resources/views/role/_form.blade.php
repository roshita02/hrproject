<!-- Name Form Input -->
<div class="form-group @if ($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
</div>

<!-- Display name Form Input -->
<div class="form-group @if ($errors->has('display_name')) has-error @endif">
    {!! Form::label('display_name', 'Display Name') !!}
    {!! Form::text('display_name', null, ['class' => 'form-control', 'placeholder' => 'Display Name']) !!}
    @if ($errors->has('display_name')) <p class="help-block">{{ $errors->first('display_name') }}</p> @endif
</div>
<!-- Description Form Input -->
<div class="form-group @if ($errors->has('description')) has-error @endif">
    {!! Form::label('description', 'Display Name') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
    @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
</div>

