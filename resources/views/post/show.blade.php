@extends('layouts.app')

@section('content')

 	<div class="title m-b-md">
        {{ $data->name }}
    </div>
    <p>{{ $data->content }}</p>
	
@endsection