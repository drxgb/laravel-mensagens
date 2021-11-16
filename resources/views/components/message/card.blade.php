<div class="message">
	<h1 class="message-title">
		@if ($link)
			<a href="{{ route('message.show', $message->id) }}">{{ $message->title }}</a>
		@else
			{{ $message->title }}
		@endif
	</h1>
	<span class="message-date">
		<i class="far fa-clock"></i>
		<em>{{ $message->created_at }}</em>
	</span>
	<p>{{ $message->content }}</p>
</div>
