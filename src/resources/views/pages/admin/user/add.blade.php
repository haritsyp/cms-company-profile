@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form {{ $page_attributes->title }} </h6>
	</div>
	<div class="card-body">
		<form method="POST" action="{{ route('user.store') }}">
			@csrf
			@include('pages.admin.user.form')
		</form>
	</div>
</div>


@endsection

@section('script')

@endsection
