@extends('layouts.default')

@section('title', 'Home')

@section('content')
<div class="container-small">
    <h1 class="center-content heading1">Vzw Wiebe Bree</h1>
    <div class="container-grid">
        <div class="content-left">
            <p>
                <b>Vzw - Wiebe - Bree</b> is een vereniging die instaat voor het organiseren van een 
                integratievakantie en allerhande activiteiten tussen kansarme en kansrijke kinderen.
             </p>
             <a href="/contact" class="btn-content mt-10">
                Heeft u vragen? Stuur ons uw vraag!  <i class="fa-solid fa-circle-arrow-right"></i>
            </a>
        </div>
        <div class="content-right sponsor">
            <h1 class="heading1">SPONSORING</h1>
            <h3>BE 50 - 7350 - 1594 - 0118</h3>
            <p class="italic">Vanaf €40 fiscaal aftrekbaar</p>
        </div>
    </div>
</div>

    <div class="bg-container">
        <p class="text-align py1">Hoewel wij slechts een kleine vereniging zijn, willen wij toch graag zoveel mogelijk mensen bereiken en laten meegenieten van onze verhalen en gebeurtenissen.<br>
           Wij hopen dan ook van harte dat jullie af en toe eventjes tijd voor ons willen vrijmaken om onze blog te volgen!</p>
        <div class="container-grid3">
            <div class="box">
                <span class="fa-stack fa-4x">
                    <i class="fa-solid fa-circle fa-stack-2x" style="color:#1691B2"></i>
                    <i class="fa-solid fa-star fa-stack-1x fa-inverse"></i>
                  </span>
                  <h1 class="heading1">Wij staan hoog in het vaandel</h1>
                  <p>Onze vzw-wiebe-bree wordt steesd meer en meer gewaardeerd door ouders en kind.
                    Wat ons veel plezier doet.</p>
            </div>
            <div class="box">
                <span class="fa-stack fa-4x">
                    <i class="fa-solid fa-circle fa-stack-2x" style="color:#1691B2"></i>
                    <i class="fa-solid fa-children fa-stack-1x fa-inverse"></i>
                  </span>
                  <h1 class="heading1">Méér dan 30 kinderen</h1>
                  <p> 
                    Elk kind doet graag met ons mee.
                    En ze hebben steeds de grootste lol.
                    Het is een plezier ze te zien openbloeien.</p>
            </div>
            <div class="box">
                <span class="fa-stack fa-4x">
                    <i class="fa-solid fa-circle fa-stack-2x" style="color:#1691B2"></i>
                    <i class="fa-solid fa-person-chalkboard fa-stack-1x fa-inverse"></i>
                  </span>
                  <h1 class="heading1">13+ vrijwilligers</h1>
                  <p> 
                    Wij zijn met meer dan 13 vrijwilligers met ieder een andere functie , Maar met elk het zelfde doel.</p>
            </div>
        </div>

        <h1 class="text-align heading1">Sfeerbeelden</h1>
        <div class="container-grid3">
            <div class="box box1">
                <img src="../images/sfeerbeeld1.jpg" />
            </div>
            <div class="box box1">
                <img src="../images/sfeerbeeld2.jpg" />
            </div>
            <div class="box box1">
                <img src="../images/sfeerbeeld3.jpg" />
            </div>
            <div class="box box1">
                <img src="../images/sfeerbeeld4.jpg" />
            </div>
            <div class="box box1">
                <img src="../images/sfeerbeeld5.png" />
            </div>
            <div class="box box1">
                <img src="../images/sfeerbeeld6.jpg" />
            </div>
        </div>
    

@endsection