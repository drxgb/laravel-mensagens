@extends('index')

@section('content')
	<section class="messages-container">
		<div class="message">
			<h1>{{ $message->title }}</h1>
			<span class="message-date">
				<em>{{ $message->created_at }}</em>
			</span>
			<p>{{ $message->content }}</p>
		</div>
	</section>
@endsection
