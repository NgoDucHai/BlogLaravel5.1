@extends('layout/template')

@section('content')
<h1>List post</h1>
<a href="{{url('post/create')}}" class="btn btn-success">Create post</a>
<hr>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Public</th>
            <th>Update</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contents as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{!! $post->content !!}</td>
            <td><img src="{{asset('img/'.$post->id.'.jpg')}}" height="35" width="30"></td>
            <td>{{ $post->published_at->format('M jS Y g:ia') }}</td>
            <td>{{ $post->updated_at }}</td>
            
            <td><a href="{{url('',$post->id)}}" class="btn btn-primary">Read</a></td>
            <td><a href="{{url('',$post->id)}}" class="btn btn-warning">Update</a></td>
            <td><a href="{{url('',$post->id)}}" class="btn btn-success">Delete</a></td>
        </tr>
        @endforeach

    </tbody>

</table>

@endsection