@extends('template')

@section('main_content')

<h1>Companies</h1>

@foreach($jobs as $job)
    <article>
        {{$job -> jobtitle}}
    </article>
@endforeach



@endsection