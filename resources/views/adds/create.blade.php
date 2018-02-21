@extends('layouts.app')

@section('head')
    <title>My Adds</title>
@endsection

@section('content')
    <h1>Create new</h1>
    <form action="{{ url('/adds') }}" method="post">
    {{ csrf_field() }}
Title:        <input name="title" type="text">
Description:    <input name="description" type="text">
    <button>Save</button>

    </form>

@endsection