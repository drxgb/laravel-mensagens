@extends('index')

@section('content')
	<x-message.form title="Editar mensagem" method="PUT" :message="$message" />
@endsection
