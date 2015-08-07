@extends('layout/template')

@section('content')
<h1>Chao mung ban den trang Admin</h1>
<a href="{{url('/admin/create')}}" class="btn btn-success ">Create</a>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->updated_at }}</td>
            <td><a href="{{url('admin/showprofile',$user->id)}}" class="btn btn-primary">Show</a></td>
            <td><a href="{{url('admin/edit',$user->id)}}" class="btn btn-warning">Update</a></td>
            <td><a href="{{url('admin/delete',$user->id)}}" class="btn btn-success">Delete</a></td>
        </tr>
        @endforeach

    </tbody>

</table>
@endsection
