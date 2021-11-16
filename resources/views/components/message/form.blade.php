<section class="form-container">
	@if (session('success'))
		<x-alert type="success" :message="session('success')" />
	@endif

	@isset($title)
		<h2>{{ $title }}</h2>
	@endisset

	<form action="@if($method == "PUT"){{ route('message.update', $message->id) }}@else{{ route('message.store') }}@endif" method="post">
		@csrf
		@if ($method == "PUT")
			@method('PUT')
		@endif
		<div class="input-container">
			<input type="text" name="title" id="title" placeholder="Título da Mensagem..." />
			@error('title')
				<x-alert type="danger" :message="$message" />
			@enderror

			<textarea name="content" id="content" cols="30" rows="5" placeholder="Escreva sua mensagem aqui."></textarea>
			@error('content')
				<x-alert type="danger" :message="$message" />
			@enderror
		</div>
		<div class="button-container">
			<button type="submit" class="btn btn-primary">
				@if ($method == "PUT")
					Modificar
				@else
					Enviar
				@endif
			</button>
		</div>
	</form>
</section>
