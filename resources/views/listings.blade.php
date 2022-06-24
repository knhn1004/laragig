@extends('layout')
@section('content')
<h1>Laragigs</h1>

<div>
@if(count($listings) > 0)
	@foreach($listings as $listing)
	<h2>
		<a href="/listings/{{$listing['id']}}">
		{{ $listing->title }}
		</a>
	</h2>
	<h3>{{ $listing->company }}</h3>
	<ul>
		<li>Laravel</li>
		<li>Vue.js</li>
		<li>Next.js</li>
	</ul>
	<div>{{ $listing->location }}</div>
	@endforeach
@else
	<p>No Listings Available</p>
@endif
</div>

@endsection