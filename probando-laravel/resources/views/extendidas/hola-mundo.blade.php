@extends('layauts.layout1')

@section('title', 'Curso Laravel Udemy')

@section('header')
    <h1>This is the EXTENDED content for header</h1>
@stop
@section('content')
    <p>This is the EXTENDED content paragraph</p>
@stop
@section('footer')
    @parent
@stop