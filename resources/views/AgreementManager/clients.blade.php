@extends('app')

@section('content')
<h1>The client lists</h1>
@foreach($clinetList as $person)
	<ul>{{$person->id}}</ul>
@endforeach
@endsection