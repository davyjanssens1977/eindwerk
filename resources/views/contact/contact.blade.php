@extends('layouts.subpages')

@section('title', 'Contact')

@section('content')
<section class="hero-body row header3">
    <div class="content row">
        <div class="hero-text">
            <h1 class="heading1">Contacteer</h1>
            <p>Vzw Wiebe</p>
        </div>
    </div>
    
</section>
<div class="container-small">
    <h1 class="center-content heading1">Neem contact op met vzw Wiebe Bree</h1>
    <p>
        Het inzetten voor een betere wereld, daar staat vzw Wiebe voor. We richten ons op het steunen van verschillende maatschappelijke projecten, waarbij we speciaal aandacht geven aan projecten op het gebied van armoedebestrijding, integratie en educatie.
     </p>
    <div class="container-grid">
        <div class="content-left">
            <h1 class="heading1">CONTACTFORMULIER</h1>
                      <form method="POST">
                          @csrf
                          <div class="formulier_container">
                             
                                <input type="text" name="naam" id="naam" placeholder="Uw naam" value="{{ old('naam') }}" required>
                                <span class="error" id="naam_error"></span> 
                                <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Uw telefoonnummer" value="{{ old('telefoonnummer') }}" required> 
                                <span class="error" id="telefoonnummer_error"></span> 
                                <input type="email" name="email" id="email" placeholder="Uw E-mail" value="{{ old('email') }}"required>
                                <span class="error" id="email_error"></span>
                                <textarea name="opmerking" id="opmerking" cols="100" rows="10" placeholder="Opmerkingen"></textarea><br>
                                <input type="button" class="bg-[#F79012] text-[white] p-2 rounded-md" value="Verstuur uw vraag" id="knop_verstuur" value="{{ old('naam') }}" onclick="verstuur()" />
                         
                          </div>
                      </form>
         </div>
       
        <div class="right">
            <div class="bodycontact_container">
                <h1 class="heading1">CONTACTEER ONS</h1>
              <ul class="bodyadres_container">
                  <li>Vzw Wiebe Bree</li>
                  <li>Graevenstraat 12</li>
                  <li>3960 Bree</li>
              </ul> 
              <ul>
                  <li>E-mail: <a href="mailto:info@vzw-wiebe-bree.be" class="orange">info@vzw-wiebe-bree.be</a></li>
              </ul>
              
              
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2502.4658032763377!2d5.59884141603564!3d51.15520137957883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0d393e0a824b3%3A0xab52e851b17f12e3!2sGraevenstraat%2012%2C%203960%20Bree!5e0!3m2!1snl!2sbe!4v1651783181931!5m2!1snl!2sbe" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

   


      
    

@endsection