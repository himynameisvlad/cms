@extends('layouts.main')

@section('title')
    {{$index_page->title}}
@endsection

@section('content')
    @foreach($templates as $key => $value)
        @include('templates.' . $value->type)
    @endforeach
@endsection