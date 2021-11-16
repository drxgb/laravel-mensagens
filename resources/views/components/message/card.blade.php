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
			<div class="message-actions">
				{{-- Editar --}}
				<a href="{{ route('message.edit', $message->id) }}" class="btn btn-warning">
					<i class="fas fa-edit"></i>
				</a>
			</div>
		@endif
	</div>

	{{-- Data de criação --}}
	<span class="message-date">
		<i class="far fa-clock"></i>
		<em>{{ $message->created_at }}</em>
	</span>

	{{-- Conteúdo da mensagem --}}
	<p>{{ $message->content }}</p>
</div>
