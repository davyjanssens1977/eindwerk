@extends('layouts.subpages')

@section('title', 'Todo lijst')

@section('content')
<section class="hero-body row header4">
    <div class="content row">
        <div class="hero-text">
            <h1 class="heading1">Todo lijst</h1>
            <p>Vzw Wiebe</p>
        </div>
    </div>
    
</section>

<div class="container-small">
    <h1 class="center-content heading1">Todo lijst</h1>
</div>
<div id="app">
    <app></app>
</div>

@endsection
<script src="{{ mix('js/app.js') }}"></script>