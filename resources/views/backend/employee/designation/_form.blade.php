
			  <div class="form-group">
			    {!! Form::label('department_id',trans('messages.department'),[])!!}
				{!! Form::select('department_id', [''=>''] + $departments,isset($designation->department_id) ? $designation->department_id : '',['class'=>'form-control input-xlarge select2me','placeholder'=>trans('messages.select_one')])!!}
			  </div>
			  
			  <div class="form-group">
			    {!! Form::label('name',trans('messages.designation'),[])!!}
				{!! Form::input('text','name',isset($designation->name) ? $designation->name : '',['class'=>'form-control','placeholder'=>trans('messages.designation')])!!}
			  </div>
			  @if(isset($designation) && $designation->is_default)
			  	<div class="form-group">
			  		<span class="label label-danger">{{trans('messages.user').' '.trans('messages.default')}}</span>
			  	</div>
			  @else
			  <div class="demo-checkbox">
			  	<input type="checkbox" name="is_default" value="1" id="basic_checkbox_1"> 
			  	<label for="basic_checkbox_1">
			  		{{trans('messages.user').' '.trans('messages.default')}}
			  	</label>
			  </div>
			  @endif
			  	
			  	{!! Form::submit(isset($buttonText) ? $buttonText : trans('messages.save'),['class' => 'btn btn-primary pull-right']) !!}
