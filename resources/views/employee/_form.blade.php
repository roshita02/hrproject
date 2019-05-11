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
<!-- employee Form Input -->
<div class="form-group @if ($errors->has('employee_code')) has-error @endif">
    {!! Form::label('employee_code', 'Employee Code') !!}
    {!! Form::text('employee_code', null, ['class' => 'form-control', 'placeholder' => 'Employee Code']) !!}
    @if ($errors->has('employee_code')) <p class="help-block">{{ $errors->first('employee_code') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('gender')) has-error @endif">
    {!! Form::label('gender', 'Gender') !!}
    {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female', 'other' => 'Others'], ['class' => 'form-control', 'placeholder' => 'Gender']) !!}
    @if ($errors->has('gender')) <p class="help-block">{{ $errors->first('gender') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('marital_status')) has-error @endif">
    {!! Form::label('marital_status', 'Marital Status') !!}
    {!! Form::select('marital_status', ['single' => 'Single', 'married' => 'Married', 'divorced' => 'Divorced'], ['class' => 'form-control', 'placeholder' => 'Marital Status']) !!}
    @if ($errors->has('marital_status')) <p class="help-block">{{ $errors->first('marital_status') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('dob')) has-error @endif">
    {!! Form::label('dob', 'Date of Birth') !!}
    {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Dob']) !!}
    @if ($errors->has('dob')) <p class="help-block">{{ $errors->first('dob') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('date_of_joining')) has-error @endif">
    {!! Form::label('date_of_joining', 'Date of Joining') !!}
    {!! Form::date('date_of_joining', null, ['class' => 'form-control', 'placeholder' => 'Date of Joining']) !!}
    @if ($errors->has('date_of_joining')) <p class="help-block">{{ $errors->first('date_of_joining') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('date_of_leaving')) has-error @endif">
    {!! Form::label('date_of_leaving', 'Date of Leaving') !!}
    {!! Form::date('date_of_leaving', null, ['class' => 'form-control', 'placeholder' => 'Date of Leaving']) !!}
    @if ($errors->has('date_of_leaving')) <p class="help-block">{{ $errors->first('date_of_leaving') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('date_of_retirement')) has-error @endif">
    {!! Form::label('date_of_retirement', 'Date of Retirement') !!}
    {!! Form::date('date_of_retirement', null, ['class' => 'form-control', 'placeholder' => 'Date of Retirement']) !!}
    @if ($errors->has('date_of_retirement')) <p class="help-block">{{ $errors->first('date_of_retirement') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('contact_no')) has-error @endif">
    {!! Form::label('contact_no', 'Contact Number') !!}
    {!! Form::text('contact_no', null, ['class' => 'form-control', 'placeholder' => 'Contact Number']) !!}
    @if ($errors->has('contact_no')) <p class="help-block">{{ $errors->first('contact_no') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('photo')) has-error @endif">
    {!! Form::label('photo', 'Photo') !!}
    {!! Form::file('photo',null, ['class' => 'form-control', 'placeholder' => 'Photo']) !!}
    @if ($errors->has('photo')) <p class="help-block">{{ $errors->first('photo') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('facebook_link')) has-error @endif">
    {!! Form::label('facebook_link', 'Facebook Link') !!}
    {!! Form::text('facebook_link', null, ['class' => 'form-control', 'placeholder' => 'Facebook Link']) !!}
    @if ($errors->has('facebook_link')) <p class="help-block">{{ $errors->first('facebook_link') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('twitter_link')) has-error @endif">
    {!! Form::label('twitter_link', 'Twitter Link') !!}
    {!! Form::text('twitter_link', null, ['class' => 'form-control', 'placeholder' => 'Twitter Link']) !!}
    @if ($errors->has('twitter_link')) <p class="help-block">{{ $errors->first('twitter_link') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('linkedin_link')) has-error @endif">
    {!! Form::label('linkedin_link', 'Linkedin Link') !!}
    {!! Form::text('linkedin_link', null, ['class' => 'form-control', 'placeholder' => 'Linkedin Link']) !!}
    @if ($errors->has('linkedin_link')) <p class="help-block">{{ $errors->first('linkedin_link') }}</p> @endif
</div>
<!-- password Form Input -->
<div class="form-group @if ($errors->has('googleplus_link')) has-error @endif">
    {!! Form::label('googleplus_link', 'Google Plus ') !!}
    {!! Form::text('googleplus_link',null, ['class' => 'form-control', 'placeholder' => 'Google Plus ']) !!}
    @if ($errors->has('googleplus_link')) <p class="help-block">{{ $errors->first('googleplus_link') }}</p> @endif
</div>

