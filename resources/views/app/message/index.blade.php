@extends('index')

@section('content')
	<section class="messages-container">
		@forelse ($messages as $message)
			<h1>{{ $message->title }}</h1>
			<p>{{ $message->content }}</p>
			<hr />
		@empty
			<p>Não há mensagens.</p>
		@endforelse
	</section>
@endsection
