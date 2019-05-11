@extends('backend.master')

@section('title', 'Roles')

@section('text')
@include('backend.header')
@include('backend.leftsidebar')

    <section class="content">
        <div class="container-fluid">
            <div class="row ">
            <div class="block-header">
                <div class="col-md-5">
                    <h3 class="modal-title">{{ str_plural('Roles', $roles->count()) }} </h3>
                </div>
                <div class="col-md-7 page-action text-right">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                </div>
            </div>
            </div>
            
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                
                <th>Created At</th>
                <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                
                <th>Created At</th>
                <th class="text-center">Actions</th>
                                        </tr>
                                    </tfoot>
                                   <tbody>
            @foreach($roles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    
                    <td>{{ $item->created_at->toFormattedDateString() }}</td>

                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'roles',
                            'id' => $item->id
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