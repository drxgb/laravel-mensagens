@extends('index')

@section('content')
	<section class="messages-container">
		@forelse ($messages as $message)
			<div class="message">
				<h1 class="message-title">
					<a href="{{ route('message.show', $message->id) }}">{{ $message->title }}</a>
				</h1>
				<span class="message-date">
					<em>{{ $message->created_at }}</em>
				</span>
				<p>{{ $message->content }}</p>
			</div>
			<hr />
		@empty
			<p>Não há mensagens.</p>
		@endforelse
	</section>
@endsection
