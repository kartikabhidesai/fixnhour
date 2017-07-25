@extends('layouts.adminlayout')

@section('content')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li><a href="{{ route('dashboard') }}"> Home </a><i class="fa fa-circle"></i></li>
        <li><span>User</span><i class="fa fa-circle"></i> </li>
        <li><span>List</span></li>
    </ul>
</div>
<h1 class="page-title"> User <small>List</small></h1>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-list font-green"></i>
                    <span class="caption-subject font-green bold uppercase">User List</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle font-green bold btn-default" href="{{ route('user-add') }}">
                        Add New User <i class="icon-plus"></i> 
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> User Name </th>
                                <th> Email </th>
                                <th> Phone </th>
                                <th> City </th>
                                <th> State </th>
                                <th> Postcode </th>
                                <th> Role Type </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count = 1; @endphp
                            @foreach($arrUserList as $row)
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->city_town  }}</td>
                                <td>{{ $row->state  }}</td>
                                <td>{{ $row->postcode  }}</td>
                                <td>{{ $row->role_type }}</td>
                                <td>
                                    <div class="actions">
                                        <a href="{{ route('user-edit', array('id'=> $row->id)) }}" class="btn btn-circle btn-icon-only btn-default"><i class="icon-wrench"></i></a>
                                        <span data-toggle="modal" class="delete" data-id="{{ $row->id }}" data-target="#deleteModal"> 
                                            <a class="btn btn-circle btn-icon-only btn-default delete" data-toggle="tooltip" data-original-title="Delete" style="font-size: 13px;" href="javascript:;"><i class="icon-trash"></i></a> 
                                        </span>
                                        <span data-toggle="modal" class="resetPassword" data-id="{{ $row->id }}" data-target="#resetPasswordModal"> 
                                            <a class="btn btn-circle btn-icon-only btn-default resetPassword" data-toggle="tooltip" data-original-title="Reset Password" style="font-size: 13px;" href="javascript:;"><i class="fa fa-arrows-alt"></i></a> 
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            @php $count++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Delete Record</h4>
                </div>
                <div class="modal-body">
                    <p> You want to delete record. Are you sure?</p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-danger" type="button">No</button>
                    <button class="btn btn-success yes-sure" type="button">Yes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="resetPasswordModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Reset Password </h4>
                </div>
                {{ Form::open( array('method' => 'post', 'id' => 'resetPasswordForm' )) }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-sm-4">New Password : <span class="required">*</span></label>
                                <div class="col-sm-6 form-group">
                                    {{ Form::password('new_pwd', array('class' => 'form-control', 'id' => 'new_pwd', 'placeholder' => 'Enter New Password')) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Re-enter Password : <span class="required">*</span></label>
                                <div class="col-sm-6 form-group">
                                    {{ Form::password('confirm_pwd', array('class' => 'form-control', 'placeholder' => 'Re-enter New Password')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-danger" type="button">No</button>
                    <button class="btn btn-success resetPwd" type="button">Yes</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection