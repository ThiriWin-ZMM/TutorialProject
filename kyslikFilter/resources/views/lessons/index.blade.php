@extends('layouts.app')

@section('content')
<table>
    
</table>
@foreach ($lessons as $lesson)

{{ $lesson->title }}
    
@endforeach    
@endsection