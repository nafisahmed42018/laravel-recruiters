@extends('layout')
@section('content')
@include('partials._hero')
@include('partials._search')
    

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@unless ( count($job_listings) == 0)


@foreach($job_listings as $job_listing)

<x-listing-card :job_listing="$job_listing"/>
@endforeach


@else
<p>Not enough list</p>
@endunless

</div>
@endsection