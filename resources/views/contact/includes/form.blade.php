<form method="post" action="/contact" novalidate>
    @csrf

    @if(session('status'))
    <p>{{ session('status') }}</p>
    @endif
    <div class="formulier_container">
       
          <input type="text" name="naam" id="naam" placeholder="Uw naam" value="{{ old('naam') }}">
          @error('naam')
          <span>{{ $message }}</span>
          @enderror

          <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Uw telefoonnummer" value="{{ old('telefoonnummer') }}"> 
          @error('telefoonnummer')
          <span>{{ $message }}</span>
          @enderror

          <input type="email" name="email" id="email" placeholder="Uw E-mail" value="{{ old('email') }}">
          @error('email')
          <span>{{ $message }}</span>
          @enderror

          <textarea name="opmerking" id="opmerking" name="opmerkingen" cols="100" rows="10" placeholder="Opmerkingen"></textarea><br>
          @error('opmerkingen')
          <span>{{ $message }}</span>
          @enderror
          <input type="submit" class="bg-[#F79012] text-[white] p-2 rounded-md" value="Verstuur uw vraag" />
   
    </div>
</form>