@extends('layouts.subpages')

@section('title', 'Blog')

@section('content')
<section class="hero-body row header2">
    <div class="content row">
        <div class="hero-text">
            <h1 class="heading1">Blog</h1>
            <p>Vzw Wiebe</p>
        </div>
    </div>
    
</section>
<div class="container-small">
    <h1 class="center-content heading1">Blog</h1>
    <div class="container-grid">
       <h1>{{ $heading }}</h1>

       @if(count($listings) == 0)
        <p>Er zijn momenteel geen blogberichten</p>
       @endif
       @foreach($listings as $listing)
       <h2>
           <a href="home/listings/{{ $listing['$id'] }}">{{ $listing['title'] }}</a>
       </h2>
       <p>
           {{ $listing['description'] }}
       </p>
       @endforeach
    </div>
</div>

@endsection