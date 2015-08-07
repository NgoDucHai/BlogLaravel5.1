@extends('layout.template')


@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<h1>Create Post</h1>
{!! Form::open(['action'=>['Admin\PostController@store'],'files' => true]) !!}
<div class="form-group">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Contnet', 'Content:') !!}
    {!! Form::textarea('content',null,['class'=>'form-control ckeditor']) !!}
</div>

<div class="form-group">
    {!! Form::label('Image', 'Image:') !!}
    {!! Form::file('image',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Publish', 'Publish:') !!}
    {!! Form::text('published_at',null,['class'=>'form-control datepicker','data-format'=>'Y-m-d H:i:s','id'=>'datepicker']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
</div>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<!--<script src="//cdn.ckeditor.com/4.5.2/standard/ckeditor.js"></script>-->
<script src="{{Asset('assets/js/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
        $('#datepicker').datepicker({
            dateFormat: 'yy-mm-dd',
            onSelect: function (datetext) {
                var d = new Date(); // for now
                datetext = datetext + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
                $('#datepicker').val(datetext);
            },
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function () {
        CKEDITOR.replace('content',
                {
                    filebrowserBrowseUrl: '/browser/browse.php',
                    filebrowserUploadUrl: '/uploader/upload.php',
                    customConfig: 'config.js',
                    toolbar: 'simple'
                })
    });
</script> 
{!! Form::close() !!}
@stop

