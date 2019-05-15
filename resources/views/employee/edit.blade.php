@extends('backend.master')

@section('title', 'Edit Employee ' . $employee->user->name)

@section('text')
@include('backend.header')
@include('backend.leftsidebar')

    <section class="content">
        <div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h3>Edit {{ $employee->user->name }}</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('employee.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                 @if($errors->any())
                    <div class="row collapse">
                        <ul class="alert-box warning radius">
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($employee, ['method' => 'PUT','files' => true, 'route' => ['employee.update',  $employee->id ] ]) !!}
                            @include('employee._formedit')
                            <!-- Submit Form Button -->
                            {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection