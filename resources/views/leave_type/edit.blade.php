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
                     <h4 class="modal-title">{!! trans('messages.edit').' '.trans('messages.leave_type') !!}</h4>
                        </div>
                        <div class="body">
                        	{!! Form::model($leave_type,['method' => 'PATCH','route' => ['leavetype.update',$leave_type] ,'class' => 'leavetype-form','id' => 'leavetype-form-edit','data-form-table' => 'leavetype_table']) !!}
			@include('leave_type._form', ['buttonText' => trans('messages.update')])
		{!! Form::close() !!}
                        </div>
                    </div>
                </div>

	
</div>
</div>
    </section>

	@stop