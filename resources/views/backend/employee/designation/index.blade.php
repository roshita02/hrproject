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
                             <h2><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.designation') !!}
				</h2>
                        </div>
                        <div class="body">

          
					{!! Form::open(['route' => 'designation.store','role' => 'form', 'class'=>'designation-form','id' => 'designation-form','data-form-table' => 'designation_table']) !!}
						@include('backend.employee.designation._form')
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
                                Designation List
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                            <th>Designation</th>
                                            <th>Department</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@foreach($designations as $key => $designation)
                                    	
                                    	<tr>
                                    		<td><a href="{{ route('designation.edit', $designation->id) }}" class="action-btns">
                <span class="glyphicon glyphicon-pencil"></span>
            </a> 
                 {{Form::open(['route'=>['designation.destroy', $designation->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}   
                    <a href="javascript:;" class="action-btns submit"><span class="glyphicon glyphicon-trash"></span></a>
                 {{Form::close()}}      </td>
                                    		<td>{{ $designation->name}}</td>
                                    		<td>@if(!empty($designation->department->name)){{$designation->department->name}} @endif</td>
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