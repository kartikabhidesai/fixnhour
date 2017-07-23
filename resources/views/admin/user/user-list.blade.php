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
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
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
</div>
@endsection