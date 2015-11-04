@extends('master')

@section('content')
	<h1> The Title:  {{$song->title}} </h1>

	@if( $song->lyrics )
		<article class="lyrics">
			{!! nl2br($song->lyrics) !!}
		</article>
		<br/>
		{!! link_to_route('songs.index','Go Back Home') !!}
	@endif

@stop