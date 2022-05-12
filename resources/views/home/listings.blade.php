@extends('layouts.bloglayout')

@section('title', 'Blog')

@section('content')
<section class="hero-body row header4">
    <div class="content row">
        <div class="hero-text">
            <h1 class="heading1">Blog</h1>
            <p>Vzw Wiebe</p>
        </div>
    </div>
    
</section>

<div class="container-small">
    <h1 class="center-content heading1">Blog</h1>
    <div>
    @include('partials._search')
    </div>
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

       @unless(count($listings) == 0)
      
       @foreach($listings as $listing)
            <x-listing-card :listing="$listing" />
       @endforeach
       
       @else
       <p>Er zijn momenteel geen blogberichten</p>
       @endunless
    </div>
    <div class="center-content ">
        <a href="/home/create" class="text-center bg-[#F79012] text-white p-2 rounded-md mb-12">Voeg een blogpost toe</a>
    </div>

    <div class="mt-6 p-4">
        {{ $listings->links() }}
    </div>
</div>

@endsection