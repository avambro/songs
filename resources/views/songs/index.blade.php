@extends('master')
@section('content')


	<h3>Songs Lists</h3>
    <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn btn-default pull-right"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
        </div>
        </div>

	<table class="table table-hover">
		<thead>
		<th>Title</th>
        <th colspan="2">Title</th>
		</thead>
		<tbody>
		@foreach($song as $_song)
			<tr><td>{!! link_to_route('songs.show',$_song->title,[$_song->slug]) !!}</td>
                <td>{!! link_to_route('songs.edit','Edit',[$_song->slug]) !!}</td>
                <td>{!! link_to_route('songs.edit','Delete',[$_song->slug]) !!}</td>
            </tr>
		@endforeach
		</tbody>

	</table>

@stop