@extends('master')

@section('content')
    <h2> Edit:  {{$song->title}} </h2>
    {!! Form::model($song,['route'=> ['songs.update',$song->slug],'method'=>'PATCH']) !!}
        @include('songs.form')
    {!! Form::close() !!}
@stop