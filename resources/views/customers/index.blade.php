@include('datatable.include')
@extends('layouts.master')

@section('content')
	<h1>Customer</h1>
	<table class="table" id="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>No KTP</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $customer)
			<tr class="item{{$customer->id}}">
				<td>{{$customer->id}}</td>
				<td>{{$customer->customer_name}}</td>
				<td>{{$customer->customer_no_ktp}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection

<script>
	$(document).ready(function(){
		$('#table').Datatable();
	});
</script>