@extends('backend.master')

	@section('text')
	@include('backend.header')
@include('backend.leftsidebar')
<section class="content">
        <div class="container-fluid">

		 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                              <h2><strong>{!! trans('messages.edit') !!}</strong> {!! trans('messages.leave') !!}
						</h2>
                        </div>
                    <div class="body">

         
					{!! Form::model($leave,['method' => 'PATCH','route' => ['leave.update',$leave] ,'class' => 'leave-form','id' => 'leave-form-edit','data-form-table' => 'department_table']) !!}
						@include('leave._form', ['buttonText' => trans('messages.update')])
					{!! Form::close() !!}
					</div>
                </div>
            </div>
        </div>

	</div>
</section>
		
	@stop