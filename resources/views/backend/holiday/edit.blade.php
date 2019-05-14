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
                              <h2><strong>{!! trans('messages.edit') !!}</strong> {!! trans('messages.holiday') !!}
						</h2>
                        </div>
                    <div class="body">

         
					{!! Form::model($holiday,['method' => 'PATCH','route' => ['holiday.update',$holiday] ,'class' => 'holiday-form','id' => 'holiday-form-edit','data-form-table' => 'holiday_table']) !!}
						@include('backend.holiday._form', ['buttonText' => trans('messages.update')])
					{!! Form::close() !!}
					</div>
                </div>
            </div>
        </div>

	</div>
</section>
		
	@stop