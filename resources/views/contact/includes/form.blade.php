<form method="post" action="/contact" novalidate>
    @csrf

    @if(session('status'))
    <p>{{ session('status') }}</p>
    @endif
    <div class="formulier_container">
       
          <input type="text" name="naam" id="naam" placeholder="Uw naam" value="{{ old('naam') }}" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" >
          @error('naam')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror

          <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Uw telefoonnummer" value="{{ old('telefoonnummer') }}" required data-parsley-pattern=[0-9]+$ data-parsley-trigger="keyup"> 
          @error('telefoonnummer')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror

          <input type="email" name="email" id="email" placeholder="Uw E-mail" value="{{ old('email') }}" required data-parsley-type="email" data-parsley-trigger="keyup">
          @error('email')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror

          <textarea name="opmerking" id="opmerking" cols="100" rows="10" placeholder="Opmerkingen" required data-parsley-trigger="keyup">{{ old('opmerking') }}</textarea>
          @error('opmerking')
          <p class="text-red-500 text-xs">{{ $message }}</p>
          @enderror
          <input type="submit" class="bg-[#F79012] text-[white] p-2 rounded-md" value="Verstuur uw vraag">
    </div>
</form>
@push('scripts')
    <script>
        $function(){
            $("#contactForm").parsley()
        }
    </script>
@endpush