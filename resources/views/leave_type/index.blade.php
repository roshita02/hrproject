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
                             <h2><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.leave_type') !!}
				</h2>
                        </div>
                        <div class="body">

          
					{!! Form::open(['route' => 'leavetype.store','role' => 'form', 'class'=>'leavetype-form','id' => 'leavetype-form','data-form-table' => 'leavetype_table']) !!}
						@include('leave_type._form')
					{!! Form::close() !!}
					</div>
                </div>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Leave type List
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                            <th>Name</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($leave_types as $key => $type)
                                    	
                                    	<tr>
                                    		<td><a href="{{ route('leavetype.edit', $type->id) }}" class="action-btns">
                <span class="glyphicon glyphicon-pencil"></span>
            </a> 
                 {{Form::open(['route'=>['leavetype.destroy', $type->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}   
                    <a href="javascript:;" class="action-btns submit"><span class="glyphicon glyphicon-trash"></span></a>
                 {{Form::close()}}      </td>
                                    		<td>{{ $type->name}}</td>
                                    	</tr>
                                    	@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

	@stop