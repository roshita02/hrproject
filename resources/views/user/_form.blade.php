<!-- Name Form Input -->
<div class="form-group @if ($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
</div>

<!-- email Form Input -->
<div class="form-group @if ($errors->has('email')) has-error @endif">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
</div>

<!-- password Form Input -->
<div class="form-group @if ($errors->has('password')) has-error @endif">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
    @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
</div>

<!-- Roles Form Input -->
<div class="form-group @if ($errors->has('roles')) has-error @endif">
    {!! Form::label('roles[]', 'Roles') !!}
    {!! Form::select('roles[]', $roles, isset($user) ? $user->roles()->pluck('id')->toArray() : null,  ['class' => 'form-control', 'multiple']) !!}
    @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('firstname')) has-error @endif">
    {!! Form::label('firstname', 'First Name') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
    @if ($errors->has('firstname')) <p class="help-block">{{ $errors->first('firstname') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('lastname')) has-error @endif">
    {!! Form::label('lastname', 'Last Name') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
    @if ($errors->has('lastname')) <p class="help-block">{{ $errors->first('lastname') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('married_status')) has-error @endif">
    {!! Form::label('married_status', 'Married Status') !!}
    {!! Form::select('married_status', ['' =>'--select--','1' =>'Yes','2' =>'No' ], ['class' => 'form-control', 'placeholder' => 'Married Status']) !!}
    @if ($errors->has('married_status')) <p class="help-block">{{ $errors->first('married_status') }}</p> @endif
</div>
<div class="form-group @if ($errors->has('status')) has-error @endif">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', ['' =>'--select--','1' =>'Active','2' =>'Inactive' ], ['class' => 'form-control', 'placeholder' => 'Status']) !!}
    @if ($errors->has('status')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
</div>

<div class="form-group @if ($errors->has('designation_id')) has-error @endif">
    {!! Form::label('designation', 'Designation') !!}
    {!! Form::select('designation_id', $designations, ['class' => 'form-control', 'placeholder' => 'Designation']) !!}
    @if ($errors->has('designation_id')) <p class="help-block">{{ $errors->first('designation_id') }}</p> @endif
</div>

