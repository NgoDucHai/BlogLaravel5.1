@extends('layout/contentTemplate')

@section('content')
<div class="media-body">
    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>
    <ul>
        @foreach ($posts as $post)
        <li>
            <div class="content row">
                <div class="col-md-3">
                    <a href="#">
                        <img class="media-object" src="{{asset('img/'.$post->image.'.jpg')}}" height="150" width="150">
                    </a>
                </div>
                <div class="col-md-7 ">
                    <h4 class="media-heading">
                        <a href="/home/{{ $post->slug }}">{{ $post->title }}</a>
                    </h4>
                    <em>({{ $post->published_at->format('M jS Y g:ia') }})</em>
                    <p>
                        {!! str_limit($post->content) !!}
                    </p>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    <hr>
    {!! $posts->render() !!}
</div>
</div>

@endsection
