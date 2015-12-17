@extends('layout')

@section('content')
	<h1>{{$article -> title}}</h1>

	<hr />

	<article>
		<div class="body">{{$article->body}}</div>
	</article>	
@stop