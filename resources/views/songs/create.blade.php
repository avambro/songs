@extends('master')

@section('content')

    {!! Form::open(['route'=> 'songs.store']) !!}
        @include('songs.form')
    {!! Form::close() !!}
@stop