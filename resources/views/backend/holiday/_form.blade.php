
			  <div class="form-group">
			    {!! Form::label('date',trans('messages.holiday_date'),[])!!}
				{!! Form::date('date',isset($holiday->date) ? $holiday->date : '',['class'=>'form-control','placeholder'=>trans('messages.holiday_date')])!!}
			  </div>
			  
			  <div class="form-group">
			    {!! Form::label('slug',trans('messages.slug'),[])!!}
				{!! Form::text('slug',isset($holiday->slug) ? $holiday->slug : '',['class'=>'form-control','placeholder'=>trans('messages.slug')])!!}
			  </div>

			  <div class="form-group">
			    {!! Form::label('description',trans('messages.description'),[])!!}
			    {!! Form::textarea('description',isset($holiday->description) ? $holiday->description : '',['size' => '30x3', 'class' => 'form-control', 'placeholder' => trans('messages.description'),"data-show-counter" => 1,"data-limit" => config('config.textarea_limit'),'data-autoresize' => 1])!!}
			    <span class="countdown"></span>
			  </div>

			  <div class="form-group">			   
			  	{!! Form::submit(isset($buttonText) ? $buttonText : trans('messages.save'),['class' => 'btn btn-primary pull-right']) !!}
			  </div>
