<div class="alert alert-{{ $type }}">
	@switch($type)
		@case('success')
			<i class="fas fa-check-circle"></i>
			@break
		@case('warning')
			<i class="fas fa-exclamation-triangle"></i>
			@break
		@case('danger')
			<i class="fas fa-times-circle"></i>
			@break
	@endswitch
    {{ $message }}
</div>
