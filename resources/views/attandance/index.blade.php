@extends('backend.master')

	@section('text')
	@include('backend.header')
@include('backend.leftsidebar')
<section class="content">
        <div class="container-fluid">
            @include('flash::message')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                              <h2><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.department') !!}
						</h2>
                        </div>
                        <div class="body">

         
					{!! Form::open(['route' => 'department.store','role' => 'form', 'class'=>'department-form','id' => 'department-form','data-form-table' => 'department_table']) !!}
						@include('department._form')
					{!! Form::close() !!}
					</div>
                </div>
            </div>
        </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Department List
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Department</th>
                                            <th>Description</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                            <th>Department</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($departments as $key => $department)
                                    	<tr>
                                    		<td>
                                          <a href="{{ route('department.edit', $department->id) }}" class="action-btns">
                <span class="glyphicon glyphicon-pencil"></span>
            </a> 
                 {{Form::open(['route'=>['department.destroy', $department->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}   
                    <a href="javascript:;" class="action-btns submit"><span class="glyphicon glyphicon-trash"></span></a>
                 {{Form::close()}}      
                                            </td>
                                    		<td>{{ $department->name}}</td>
                                    		<td>{{$department->description}}</td>
                                   
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