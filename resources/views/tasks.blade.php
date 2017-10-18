@extends('layouts.app')

@section('content')
	<div class="panel-body">
		<!-- mjesto za prikaz grešaka -->
		@include('common.errors')
		
		<!-- WebObrazac za novi Task -->
		<form action="/task" method="POST" class="form-horizontal">
			{{ csrf_field() }}
		</form>
	</div>
@endsection