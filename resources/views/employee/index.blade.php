@extends('backend.master')

@section('title', 'Employee')

@section('text')
@include('backend.header')
@include('backend.leftsidebar')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-md-5">
                    <h3 class="modal-title">{{ str_plural('Employee', $employees->count()) }} </h3>
                </div>
                <div class="col-md-7 page-action text-right">
                        <a href="{{ route('employee.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                </div>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                         
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                <th>Name</th>
                <th>Code</th>
                <th>DOB</th>
                <th>DOJ</th>
                <th>DOL</th>
                <th>Contact No.</th>
                <th>Created At</th>
                <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                <th>Name</th>
                <th>Code</th>
                <th>DOB</th>
                <th>DOJ</th>
                <th>DOL</th>
                <th>Contact No.</th>
                <th>Created At</th>
                <th class="text-center">Actions</th>
                                        </tr>
                                    </tfoot>
                                   <tbody>
            @foreach($employees as $emp)
                <tr>
                    <td>{{ $emp->id }}</td>
                    <td>{{ $emp->user->name }}</td>
                    <td>{{ $emp->employee_code }}</td>
                    <td>{{ $emp->dob }}</td>
                    <td>{{ $emp->date_of_joining }}</td>
                    <td>{{ $emp->date_of_leaving }}</td>
                    <td>{{ $emp->contact_no }}</td>
                    <td>{{ $emp->created_at->toFormattedDateString() }}</td>
                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'employee',
                            'id' => $emp->id
                        ])
                    </td>
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



@endsection