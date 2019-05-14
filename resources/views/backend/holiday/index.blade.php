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
                              <h2><strong>{!! trans('messages.add_new') !!}</strong> {!! trans('messages.holiday') !!}
                        </h2>
                        </div>
                        <div class="body">
                {!! Form::open(['route' => 'holiday.store','role' => 'form', 'class'=>'holiday-form','id' => 'holiday-form','data-form-table' => 'holiday_table']) !!}
                        @include('backend.holiday._form')
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
                                Holiday List
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Action</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($holidays as $key => $holiday)
                                        <tr>
                                            <td>
                                          <a href="{{ route('holiday.edit', $holiday->id) }}" class="action-btns">
                <span class="glyphicon glyphicon-pencil"></span>
            </a> 
                 {{Form::open(['route'=>['holiday.destroy', $holiday->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}   
                    <a href="javascript:;" class="action-btns submit"><span class="glyphicon glyphicon-trash"></span></a>
                 {{Form::close()}}      
                                            </td>
                                            <td>{{ $holiday->date}}</td>
                                            <td>{{$holiday->description}}</td>
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