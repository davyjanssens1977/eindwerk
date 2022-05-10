@extends('layouts.subpages')

@section('title', 'Registreren')

@section('title', 'Update mijn profiel')

@section('content')
<div class="bg-container">
    <div class="container-small-form">
        <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-10"
    >
        <header class="text-center">
            <h1 class="heading1">
                Gegevens aanpassen
            </h1>
        </header>
        <div class="align-container">
            <form action="{{ route('profile.update-email') }}" method="post" novalidate class="flex flex-col gap-4">
                @csrf @method('put')

                <p class="font-semibold text-xl mb-4">E-mailadres wijzigen</p>

                <div class="flex flex-col">
                    <label class="text-gray-500" for="voornaam">E-mailadres: *</label>
                    <input name="email" value="{{ auth()->user()->email }}" type="email" class="border border-gray-200 rounded p-2 w-full">
                    @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <button type="submit" class="bg-[#F79012] text-[white] p-2 rounded-md mt-1">
                        E-mailadres bewaren
                    </button>
                </div>

            </form>

            <form action="{{ route('profile.update-password') }}" method="post" novalidate class="mt-12 flex flex-col gap-4">
                @csrf @method('put')

                <p class="font-semibold text-xl mb-4">Wachtwoord instellen</p>

                <div class="flex flex-col">
                    <label class="text-gray-500" for="voornaam">Nieuw wachtwoord: *</label>
                    <input name="password" type="password" class="border border-gray-200 rounded p-2 w-full">
                    @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="flex flex-col">
                    <label class="text-gray-500" for="voornaam">Confirmeer nieuw wachtwoord: *</label>
                    <input name="password_confirmation" type="password" class="bborder border-gray-200 rounded p-2 w-full">
                    @error('password_confirmation') <p class="text-red-500">{{ $message }}</p> @enderror
                </div>

                <div>
                    <button type="submit" class="bg-[#F79012] text-[white] p-2 rounded-md mt-1">
                        Wachtwoord instellen
                    </button>
                </div>

            </form>


        </div>
    </div>
</div>
</div>
@endsection


