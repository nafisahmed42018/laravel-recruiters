@extends('layout')

@section('content')
@include('partials._search')
<h2>
    {{$job_listing['title']}}
</h2>
<p>
    {{$job_listing['description']}}
</p>
@endsection

