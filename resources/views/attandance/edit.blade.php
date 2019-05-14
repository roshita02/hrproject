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
                              <h2><strong>{!! trans('messages.edit') !!}</strong> {!! trans('messages.department') !!}
						</h2>
                        </div>
                    <div class="body">

         
					{!! Form::model($department,['method' => 'PATCH','route' => ['department.update',$department] ,'class' => 'department-form','id' => 'department-form-edit','data-form-table' => 'department_table']) !!}
						@include('department._form', ['buttonText' => trans('messages.update')])
					{!! Form::close() !!}
					</div>
                </div>
            </div>
        </div>

	</div>
</section>
		
	@stop