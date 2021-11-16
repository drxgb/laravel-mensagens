<section class="form-container">
	@if (session('success'))
		<span class="text-primary">{{ session('success') }}</span>
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
				<span class="text-danger">{{ $message }}</span>
			@enderror

			<textarea name="content" id="content" cols="30" rows="5" placeholder="Escreva sua mensagem aqui."></textarea>
			@error('content')
				<span class="text-danger">{{ $message }}</span>
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
