@inject('time', 'App\Services\TimeService')

<div class="message">
	{{-- Cabeçalho --}}
	<div class="message-header">
		{{-- Título --}}
		<h1 class="message-title">
			@if ($link)
				<a href="{{ route('message.show', $message->id) }}">{{ $message->title }}</a>
			@else
				{{ $message->title }}
			@endif
		</h1>

		{{-- Ações --}}
		@if ($link)
			<form class="message-actions" action="{{ route('message.destroy', $message->id) }}" method="post">
				{{-- Editar --}}
				<a href="{{ route('message.edit', $message->id) }}" class="btn btn-rounded btn-warning">
					<i class="fas fa-edit"></i>
				</a>

				{{-- Deletar --}}
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-rounded btn-danger">
					<i class="fas fa-trash"></i>
				</button>
			</form>
		@endif
	</div>

	{{-- Data de criação --}}
	<span class="message-date">
		<i class="far fa-clock"></i>
		<em>{{ $time->toMomentsAgo($message->created_at) }}</em>
	</span>

	{{-- Conteúdo da mensagem --}}
	<p>{{ $message->content }}</p>
</div>
