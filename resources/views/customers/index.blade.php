@extends('layouts.master')

@section('content')
	<h1>Customer</h1>
	<vue-table class="box"
		path="administration.users.initTable"
		id="users">
	</vue-table>
@endsection