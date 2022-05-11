@extends('layouts.bloglayout')

@section('title', 'Blog')

@section('content')
<div class="bg-container">
    <h1 class="center-content heading1 mgtop2">Nieuwe blogpost</h1>
<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Voeg een blogpost toe
                        </h2>
                    </header>

                    <form method="POST" action="/home/listings" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label
                                for="naam"
                                class="inline-block text-lg mb-2"
                                >Naam</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="naam" value="{{ old('naam') }}"
                            />

                            @error('naam')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="titel" class="inline-block text-lg mb-2"
                                >Titel blogpost</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="titel" value="{{ old('titel') }}"
                            />
                            @error('titel')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text-lg mb-2">
                                Tags (Gescheiden met een komma)
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="tags" value="{{ old('tags') }}"  
                            />
                            @error('tags')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="foto" class="inline-block text-lg mb-2">
                                Foto
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="foto"
                            />
                            @error('foto')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="bericht"
                                class="inline-block text-lg mb-2"
                            >
                                Bericht
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="bericht"
                                rows="10"
                                placeholder="Uw blogpost" 
                            >{{ old('bericht') }}</textarea>
                            @error('bericht')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-[#F79012] text-[white] p-2 rounded-md"
                            >
                                Voeg blogpost toe
                            </button>

                            <a href="/home/listings" class="text-black ml-4"><i class="fa-solid fa-circle-arrow-left"></i> Terug naar blogposts </a>
                        </div>
                    </form>
                </div>
            </div>
@endsection