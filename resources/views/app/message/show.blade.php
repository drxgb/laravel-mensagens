@extends('index')

@section('content')
	<section class="messages-container">
		<x-message.card :message="$message" />
	</section>
@endsection
