@extends('layouts.app')

@section('head')
    <title>Adds</title>
@endsection

@section('content')
<h1>Adds</h1>

  <table class="table table-bordered">
    <tr>
			<th> @sortablelink('post_date', 'Date') </th>
			<th> @sortablelink('title', 'Title') </th>
			<th> @sortablelink('name_id', 'Posted by') </th>
        </tr>
    @foreach ($adds as $data)
    <tr>
        <td>{{ $data->post_date }}</td>
		<td>{{ $data->title }}</td>
		<td>{{ $data->name }}</td>
    </tr>
	<tr>
		<td></td>
		<td>{{ $data->description}}</td>
        <td></td>
	</tr>
    @endforeach
	{!! $adds->appends(\Request::except('page'))->render() !!}
 </table>


@endsection