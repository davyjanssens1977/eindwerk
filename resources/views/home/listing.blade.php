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
<h2>
    {{ $listing['title'] }}
</h2>
<p>
    {{ $listing['description'] }}
</p>
</div>
@endsection

