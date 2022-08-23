@extends('template-dashboard')

@section('content')
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    

     
        <!-- Post Job Section Start -->
        <div class="job-post ptb-100">
            <div class="container">
                <form action="{{ route('posts.store')}}" method="POST">
                @include('posts._form')
                </form>
            </div>
        </div>
        <!-- Post Job Section End -->
    
    @endsection