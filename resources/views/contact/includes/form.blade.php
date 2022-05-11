<form method="post" action="/contact" novalidate>
    @csrf

    @if(session('status'))
    <p>{{ session('status') }}</p>
    @endif
    <div class="formulier_container">
       
          <input type="text" name="naam" id="naam" placeholder="Uw naam" value="{{ old('naam') }}">
          @error('naam')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror

          <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Uw telefoonnummer" value="{{ old('telefoonnummer') }}"> 
          @error('telefoonnummer')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror

          <input type="email" name="email" id="email" placeholder="Uw E-mail" value="{{ old('email') }}">
          @error('email')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror

          <textarea name="opmerking" id="opmerking" cols="100" rows="10" placeholder="Opmerkingen">{{ old('opmerking') }}</textarea>
          @error('opmerking')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror
          <input type="submit" class="bg-[#F79012] text-[white] p-2 rounded-md" value="Verstuur uw vraag">
   
    </div>
</form>