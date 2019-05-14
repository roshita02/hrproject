
			  <div class="form-group">
			    {!! Form::label('name',trans('messages.department_name'),[])!!}
				{!! Form::input('text','name',isset($department->name) ? $department->name : '',['class'=>'form-control','placeholder'=>trans('messages.department_name')])!!}
			  </div>
			  <div class="form-group">
			    {!! Form::label('description',trans('messages.description'),[])!!}
			    {!! Form::textarea('description',isset($department->description) ? $department->description : '',['size' => '30x3', 'class' => 'form-control', 'placeholder' => trans('messages.description'),"data-show-counter" => 1,"data-limit" => config('config.textarea_limit'),'data-autoresize' => 1])!!}
			    <span class="countdown"></span>
			  </div>
			  <div class="form-group">
			   
			  	{!! Form::submit(isset($buttonText) ? $buttonText : trans('messages.save'),['class' => 'btn btn-primary pull-right']) !!}
			  </div>
