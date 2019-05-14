			<div class="form-group">
			    {!! Form::label('leave_type_id',trans('messages.leave_type'),[])!!}
				{!! Form::select('leave_type_id',$leavetypes,['class'=>'form-control','placeholder'=>trans('messages.leave_type')])!!}
			  </div>
			  <div class="form-group">
			    {!! Form::label('status',trans('messages.status'),[])!!}
				{!! Form::select('status',['rejected'=>'Rejected','pending' => 'Pending','requested' =>'Requested', 'approved' => 'Approved'],['class'=>'form-control','placeholder'=>trans('messages.status')])!!}
			  </div>
			  <div class="form-group">
			    {!! Form::label('from_date',trans('messages.leave_from_date'),[])!!}
				{!! Form::date('from_date',null,['class'=>'form-control datepicker','placeholder'=>trans('messages.leave_from_date')])!!}
			  </div>
			<div class="form-group">
			    {!! Form::label('to_date',trans('messages.leave_to_date'),[])!!}
				{!! Form::date('to_date',null,['class'=>'form-control datepicker','placeholder'=>trans('messages.leave_to_date')])!!}
			  </div>
			  <div class="form-group">
			    {!! Form::label('description',trans('messages.description'),[])!!}
			    {!! Form::textarea('description',null,['size' => '30x3', 'class' => 'form-control', 'placeholder' => trans('messages.description'),"data-show-counter" => 1,"data-limit" => config('config.textarea_limit'),'data-autoresize' => 1])!!}
			    <span class="countdown"></span>
			  </div>
			  <div class="form-group">
			    {!! Form::label('remarks',trans('messages.remarks'),[])!!}
			    {!! Form::textarea('remarks',null,['size' => '30x3', 'class' => 'form-control', 'placeholder' => trans('messages.remarks'),"data-show-counter" => 1,"data-limit" => config('config.textarea_limit'),'data-autoresize' => 1])!!}
			    <span class="countdown"></span>
			  </div>

			   <div class="form-group">
			    {!! Form::label('approved_date',trans('messages.approved_date'),[])!!}
				{!! Form::date('approved_date',null,['class'=>'form-control datepicker','placeholder'=>trans('messages.approved_date')])!!}
			  </div>
			  <div class="form-group">
			    {!! Form::label('admin_remarks',trans('messages.admin_remarks'),[])!!}
			    {!! Form::textarea('admin_remarks',null,['size' => '30x3', 'class' => 'form-control', 'placeholder' => trans('messages.admin_remarks'),"data-show-counter" => 1,"data-limit" => config('config.textarea_limit'),'data-autoresize' => 1])!!}
			    <span class="countdown"></span>
			  </div>
			  <div class="form-group">
			   
			  	{!! Form::submit(isset($buttonText) ? $buttonText : trans('messages.save'),['class' => 'btn btn-primary pull-right']) !!}
			  </div>
