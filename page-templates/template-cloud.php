<?php
/**
* Template Name: Cloud Page
* Template Post Type: page
*
* @package VisioSign
*/

get_header();

    //building solution template
?>
        <div class="position-relative" id="cloud-page">
        <?php get_template_part('includes/section','hero'); ?>
        <?php get_template_part('includes/section','clicker'); ?>
        <section class="two-sec">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-5 page-desc">
                            <div class="mag-wrap ">
                                <h1 class="display-6">VisioSign Cloud</h1>
                                <h4 class="display-1 l-10">VisioSign Cloud er basen for enhver VisioSign Solution. Det er den online platform, der samler alle organisationens VisioSign enheder i én brugervenlig platform.
                                </h4>
                                    <p class="display-2 work-sans l-10">
                                        Fra VisioSign Cloud administreres og driftes indhold, funktion, design, brugere og hardware. De brugere, der kobles på systemet, kan online opdatere en eller flere skærme inden for få minutter. Det er desuden muligt at tilgå VisioSign Cloud fra en telefon eller tablet og lave mindre ændringer. Der er mulighed for at tilknytte et uendeligt antal skærme og brugere på løsningerne.
                                        <br><br>
                                        VisioSign Cloud fungerer lokalt, regionalt, globalt og på tværs af disse. Det er kun fantasien, der sætter grænser. VisioSign Cloud kan spejle eksisterende organisationsstrukturer, om de så er hierarkiske eller tværgående i store og små organisationer. Derfor kan design defineres centralt i organisationen og tilpasses enkelte afdelinger og lokaliteter. Indhold kan ligeledes deles på tværs af organisationen, til én eller flere specifikke afdelinger, bygninger eller lokaliteter.                            </p>
                            </div>
                        </div>
                        <div class="col-md-7 page-pic" id="player">
                            <div class="vid-box">
                                <div class="vid-overlay"><div class="fr-vid-play-button"></div></div>
                                <video poster="/img/cloud/vid_p.png" id="video-element">
                                    <source src="img/video.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="hide-until-9">
                                <p class="display-2 work-sans l-10">
                                    Fra VisioSign Cloud administreres og driftes indhold, funktion, design, brugere og hardware. De brugere, der kobles på systemet, kan online opdatere en eller flere skærme inden for få minutter. Det er desuden muligt at tilgå VisioSign Cloud fra en telefon eller tablet og lave mindre ændringer. Der er mulighed for at tilknytte et uendeligt antal skærme og brugere på løsningerne.
                                    <br><br>
                                    VisioSign Cloud fungerer lokalt, regionalt, globalt og på tværs af disse. Det er kun fantasien, der sætter grænser. VisioSign Cloud kan spejle eksisterende organisationsstrukturer, om de så er hierarkiske eller tværgående i store og små organisationer. Derfor kan design defineres centralt i organisationen og tilpasses enkelte afdelinger og lokaliteter. Indhold kan ligeledes deles på tværs af organisationen, til én eller flere specifikke afdelinger, bygninger eller lokaliteter.                            </p>
                        
                            </div>
                            <!-- <div id='controls'>
                                 <progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
                                <button id='btnReplay' class='replay' title='replay' accesskey="R" onclick='replayVideo();'>Replay</button>	 -->
                                <!-- <button id='btnPlayPause' class='play' title='play' accesskey="P" onclick='playPauseVideo();'>Play</button> -->
                                <!-- <i class="fas fa-play fa-3x play" id='btnPlayPause' title='play' accesskey="P" onclick='playPauseVideo();'></i> -->
                                <!-- <button id='btnStop' class='stop' title='stop' accesskey="X" onclick='stopVideo();'>Stop</button>
                          <input type="range" id="volume-bar" title="volume" min="0" max="1" step="0.1" value="1">
                                <button id='btnMute' class='mute' title='mute' onclick='muteVolume();'>Mute</button>	
                          <button id='btnFullScreen' class='fullscreen' title='toggle full screen' accesskey="T" onclick='toggleFullScreen();'>[&nbsp;&nbsp;]</button> 
                            </div> -->
        
                        </div>
                    </div>
                </div>
        </section>
        <section class="tabbed">
            <div class="wrapper">
                <h1 class="display-6 l-10">Funktion og indhold</h1>
                <h5 class="display-4">VisioSign Cloud understøtter en bred vifte af funktioner på</h5>
        
                <ul class="nav nav-tabs tabbed-fn">
                    <li  class="active"><a data-toggle="tab" href="#menu1" class="active">
                        <img src="img/cloud/f1.png">
                        <span>Design</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu2">
                        <img src="img/cloud/f2.png">
                        <span>Tekst og billede</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu3">
                        <img src="img/cloud/f3.png">
                        <span>Billedgalleri</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu4">
                        <img src="img/cloud/f4.png">
                        <span>Video</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu5">
                        <img src="img/cloud/f5.png">
                        <span>Touch</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu6">
                        <img src="img/cloud/f6.png">
                        <span>RSS</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu7">
                        <img src="img/cloud/f7.png">
                        <span>HTML</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu8">
                        <img src="img/cloud/f8.png">
                        <span>Lysavis</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu9">
                        <img src="img/cloud/f9.png">
                        <span>Gæsteliste</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu10">
                        <img src="img/cloud/f10.png">
                        <span>Planlægning</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu11">
                        <img src="img/cloud/f11.png">
                        <span>Møde- og skema data</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu12">
                        <img src="img/cloud/f12.png">
                        <span>Ur, dato og ugenummer</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu13">
                        <img src="img/cloud/f13.png">
                        <span>Tæller</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu14">
                        <img src="img/cloud/f14.png">
                        <span>Find vej</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu15">
                        <img src="img/cloud/f15.png">
                        <span>Vejrudsigt</span>
                    </a></li>
                    <li><a data-toggle="tab" href="#menu16">
                        <img src="img/cloud/f16.png">
                        <span>Twitter</span>
                    </a></li>
                  </ul>
                
                  <div class="tab-content">
                    <div id="menu1" class="tab-pane fade active show">
                        <i class="fas fa-times tabe-hider hide-until-7"></i>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/cloud/f1.png">
                            </div>
                            <div class="col-md-9">
                                <h3 class="display-6">Design</h3>
                                <p class="display-4">Alle skærme kan tilpasses specielle ønsker til design, ud fra VisioSigns standardlinje eller ud fra organisationens eget design.</p>
                            </div>
                        </div>
                        <div class="row fr-tabbed-hidden hide-until-7">
                            <p class="display-4">Alle skærme kan tilpasses specielle ønsker til design, ud fra VisioSigns standardlinje eller ud fra organisationens eget design.</p>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <i class="fas fa-times tabe-hider hide-until-7"></i>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/cloud/f2.png">
                            </div>
                            <div class="col-md-9">
                                <h3 class="display-6">Tekst og billede</h3>
                                <p class="display-4">Alle skærme kan tilpasses specielle ønsker til design, ud fra VisioSigns standardlinje eller ud fra organisationens eget design.</p>
                            </div>
                        </div>
                        <div class="row fr-tabbed-hidden hide-until-7">
                            <p class="display-4">Alle skærme kan tilpasses specielle ønsker til design, ud fra VisioSigns standardlinje eller ud fra organisationens eget design.</p>
                        </div>
                     </div>
                    <div id="menu3" class="tab-pane fade">
                        <i class="fas fa-times tabe-hider hide-until-7"></i>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/cloud/f3.png">
                            </div>
                            <div class="col-md-9">
                                <h3 class="display-6">Billedgalleri</h3>
                                <p class="display-4">Alle skærme kan tilpasses specielle ønsker til design, ud fra VisioSigns standardlinje eller ud fra organisationens eget design.</p>
                            </div>
                        </div>
                        <div class="row fr-tabbed-hidden hide-until-7">
                            <p class="display-4">Alle skærme kan tilpasses specielle ønsker til design, ud fra VisioSigns standardlinje eller ud fra organisationens eget design.</p>
                        </div>
                </div>
            </div>
        </section>
        <section class="divider">
            <img src="img/cloud/divide.jpg">
        </section>
        <section class="some-info">
            <div class="wrapper">
                <h2 class="display-6 l-10">Persondata og datasikkerhed</h2>
                <div class="row">
                    <div class="col-md-6 l-10">
                        <h4 class="display-1">Persondata politik</h4>
                        <p class="display-2">Det er vigtigt for os at vores kunder kan føle sig trygge ved den måde VisioSign opbevarer og anvender persondata. Derfor har vi formuleret en klar politik om hvordan vi behandler de oplysninger vi får.
                           <br> Der er alene tale om persondata af ikke følsom karakter – almindelige personoplysninger. Vi opbevarer og behandler kun jeres persondata i den periode hvor det er nødvendigt for vores samarbejde.
                        <br>VisioSign er databehandler af jeres persondata. Vi opbevarer og bruger persondata til løbende support og kommunikation omkring de produkter og services der er inkluderet i aktive abonnementer hos os.</p>
                    </div>
                    <div class="col-md-6 l-10">
                        <h4 class="display-1">Datasikkerhed</h4>
                        <p class="display-2">I VisioSign betyder datasikkerhed meget. Vi har taget en lang række forholdsregler i vores systemer og praksisser for at sikre data.
                            <br>Sikkerhed omkring data, stabilitet af service, utilgængelighed af data, fysisk afgrænsning af enheder og formålsbegrænset databehandling er kerneområder i vores sikkerhed.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="big-cta" style="background:url(img/solution/bg.jpg);">
            <div class="overlay-v">
        
            </div>
            <div class="wrapper">
        
                <div class="text-wraps position-relative">
                    <h1 class="display-0 fg-brown">Let's work</h1>
                    <h1 class="display-0 m-40 text-white">together</h1>
                        <p class="display-2 work-sans fg-white m-80">
                            En kort forklarende tekst om Erik, der fortæller lidt om hvad hans rolle er og at man kan kontakte ham for at lave lignende projekter.
                        </p>
                        <a href="" class="fr-button-link-brown-white">Få et tilbud</a>
        
                </div>
            </div>
        </section>
        </div>
<?php

get_footer();
?>