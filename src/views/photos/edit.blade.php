@extends('layouts.scaffold')

@section('main')

<h1>Edit Photo</h1>
{{ Form::model($photo, array('method' => 'PATCH', 'route' => array('photos.update', $photo->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::text('url') }}
        </li>

        <li>
            {{ Form::label('alt', 'Alt:') }}
            {{ Form::text('alt') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('photos.show', 'Cancel', $photo->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
