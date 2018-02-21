@extends('layouts.app')

@section('head')
    <title>My Adds</title>
@endsection

@section('content')
<h1>My Adds</h1>

  <table class="table table-bordered">
    <tr>
            <th>Date</th>
			<th>Title</th>
        </tr>
    @foreach ($useradds as $data)
    <tr>
        <td>{{ $data->post_date}}</td>
		<td>{{ $data->title}}</td>
    </tr>
	<tr>
		<td></td>
		<td>{{ $data->description}}</td>
        <td></td>
	</tr>
    @endforeach
 </table>
@endsection