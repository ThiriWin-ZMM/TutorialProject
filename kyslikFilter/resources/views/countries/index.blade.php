@extends('layouts.app')
@section('content')

<div class="container">

	<h2 class="text-center">Laravel 5.5 Countries Lists</h2>



	

		@foreach($countries as $country)

			<span style="padding: 5px;"> {{ $country->flag }} </span> 

		@endforeach

	

</div>

@endsection