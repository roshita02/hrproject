<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h4 class="modal-title">{!! trans('messages.add_new').' '.trans('messages.holiday') !!}</h4>
	</div>
	<div class="modal-body">
		{!! Form::open(['route' => 'holiday.store','role' => 'form', 'class'=>'holiday-form','id' => 'holiday-form','data-form-table' => 'holiday_table']) !!}
			@include('holiday._form')
		{!! Form::close() !!}
		<div class="clear"></div>
	</div>
	<div class="modal-footer">
	</div>