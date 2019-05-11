@extends('backend.master')

@section('title', 'Create')

@section('text')
@include('backend.header')
@include('backend.leftsidebar')
   <section class="content">
        <div class="container-fluid">


    <div class="row">
        <div class="col-md-5">
            <h3>Create</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('employee.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['route' => ['employee.store']], ['files' =>true] ) !!}
                @include('employee._form')
                <!-- Submit Form Button -->
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
</section>
@endsection