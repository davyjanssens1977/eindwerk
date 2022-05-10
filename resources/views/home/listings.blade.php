@extends('layouts.bloglayout')

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
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

       @unless(count($listings) == 0)
      
       @foreach($listings as $listing)
       <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
            <img
                class="hidden w-48 mr-6 md:block"
                src="images/no-image.png"
                alt=""
            />
            <div>
                <h3 class="text-2xl">
                    <a href="show.html">{{ $listing->titel }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $listing->naam }}</div>
                <ul class="flex">
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Laravel</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">API</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Backend</a>
                    </li>
                    <li
                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                    >
                        <a href="#">Vue</a>
                    </li>
                </ul>
                <div class="text-lg mt-4">
                   <p>Lorem ipsum dolor sit amet. Non doloremque accusamus hic dignissimos sunt ut velit neque eos tenetur dolore. Qui aliquid autem a consequatur facere qui vitae alias qui alias voluptas ex culpa iste ea dolorum voluptatibus non voluptas quia. Necessitatibus officia ut voluptatibus voluptatum 33 debitis delectus et laborum maiores et blanditiis quaerat</p>
                </div>
            </div>
        </div>
    </div>
       @endforeach

       @else
       <p>Er zijn momenteel geen blogberichten</p>
       @endunless
    </div>
</div>

@endsection