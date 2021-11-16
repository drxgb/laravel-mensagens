@extends('index')

@section('content')
	<x-message.form title="Escreva uma mensagem..." />
	<section class="messages-container">
		@forelse ($messages as $message)
			<x-message.card :message="$message" :link="true" />
			<hr />
		@empty
			<p>Não há mensagens.</p>
		@endforelse
	</section>
@endsection
