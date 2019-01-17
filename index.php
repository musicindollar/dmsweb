<!DOCTYPE html>
<html>
<?php
require "header.php";
$title = "Music in Dollar";
htmlHead($title);
?>

<body>

<div class="container-fluid">
  <?php
  showHeaderBar("index");
  ?>

    <div class="navbar navbar-nomargin well clearfix home-subheader">
        <div class="row">
            <div class="col-sm-12" style="">
                <img src="image/dollarthumbs2.jpeg" class="widthfull"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-info">News</h4>
                    </div>
                    <div class="panel-body">
                        <p>Daniel Ciobanu was a different class. Everyone there was dazzled, moved and awestruck by the
                            combination of technique, passion and sheer musicality. It will live long in the memory.</p>
                        <p><span class="fa fa-music">&nbsp;</span>Our next concert is fast approaching, on Sunday 20th
                            January.
                        </p>
                        <p>Ayman Jarjour is well known to many of us. Originally from Syria, he has been based in
                            Scotland for a number of years. His performances are full of style and variety, with many
                            coming back
                            for more! Don&#39;t miss it.</p>
                        <!--                        <p><span class="fa fa-ticket">&nbsp;</span>It&#39;s not too late to take out a membership and-->
                        <!--                            save on this season&#39;s programme. Basic membership let&#39;s you pick and choose your-->
                        <!--                            concerts, at a cheaper price. And it helps Music in Dollar too.</p>-->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-info">Who are we?</h4>
                    </div>
                    <div class="panel-body">
                        <p>Music in Dollar is an independent organisation with a
                            mission to promote music and the arts around Dollar,
                            Clackmannanshire, Scotland.</p>
                        <a type="button" class="btn btn-default btn-xs" href="about.php">read
                            more</a>
                    </div>
                    <div class="panel-body">
                        <p>
                            <span class="fa fa-envelope"></span> Want to keep up with music in Dollar? Why not <a
                                    href="contact.php">sign up</a> for our mailing list. We won't
                            swamp you with mail and you can unsubscribe at any time
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="WhatsOn" class="row">
        <div class="col-sm-6">
            <h2>2018-19 Season</h2>
        </div>
        <div class="col-sm-6 margintop10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="season/1819/DMS-Leaflet-2018-19.pdf" target="_blank">View</a>
                    the full programme for the current season [PDF 2.6MB] <a
                            href="season/1819/DMS-Leaflet-2018-19.pdf" target="_blank"><img
                                src="image/pdf.jpeg"/></a>
                </div>
            </div>
        </div>
    </div>

    <div id="NextConcert" class="row">
        <div class="col-sm-12">
            <h3 class="text-info">Next concert</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">

                <li class="clearfix list-group-item dms-list-item-next">
                    <div class="col-sm-3">
                        <h3>Ayman Jarjour</h3>
                        <h4 class="text-info">
                            Sunday, 20<span class="subscript">th</span> January 2019
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buyticketaymanjarjour">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/447833"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1819/AymanJarjour-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Ayman is a Scotland-based classical guitarist with worldwide presence,
                            performing in the Middle East, USA, Africa and Far East. Originally from
                            Damascus, he studied in Spain and USA. Notable highlights have
                            been a concert to standing ovation at NY Carnegie Hall as winner of
                            Artists International’s Special Presentation Award, and the world
                            premiere of Olympus (concerto for guitar and orchestra) by Evis
                            Sammoutis and the Syrian premiere of Rodrigo’s two
                            masterpieces Concierto de Aranjuez and Concierto Andaluz.
                        </p>
                        <p>Ayman is involved with many charities working to help refugees
                            and people affected by the war in Syria. His repertoire includes
                            works with Spanish, Latin American, Classical, Middle Eastern and Modern
                            flavors. He plays an instrument made by Egyptian luthier Jean-Paul Haggar.</p>
                        <p>
                        </p>
                        <a href="/season/1819/Programme-190120-AymanJarjour.pdf"
                           target="_blank">Concert programme</a>
                        </p>
                        <p>
                            <a href="http://aymanjarjour.com/"
                               target="_blank">More about Ayman Jarjour</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=F3bwYtvvHa8" target="_blank">See Ayman play</a></p>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-info">Still to come</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">

                <li class="clearfix list-group-item dms-list-item" id="EmilyMitchell">
                    <div class="col-sm-3">
                        <h3>Emily Mitchell Vocal Ensemble</h3>
                        <h4 class="text-info">
                            Sunday, 24<span class="subscript">th</span> February 2019
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buyticketemilymitchell">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/447835"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1819/emilymitchell-2-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>"When the gates of Heaven are thrown open, I’d tears in my eyes. Best of all,
                            Tomas had engaged a wonderful young soprano, Emily Mitchell, for the all
                            important solo part in the last movement. If I say that she reminded me of a
                            young Lucia Popp, I can give no higher praise."
                            wholeelephant.co.uk
                        </p>
                        <p>Born into a musical family, Scottish soprano Emily Mitchell, was
                            immersed in music from an early age. She began her formal classical
                            training at the RCS in Glasgow under the tutelage of Margaret Aronson.
                            She is a Live Music Now! artist with her accompanist Geoffrey Tanti and
                            is a regular performer with Scottish Opera.</p>
                        <p>Emily has an extensive concert career ranging from opera to solo
                            recitals to oratorio. She sings regularly with the Dunedin Consort and is broadcast on
                            radio.</p>
                        <p>With another singer and accompanist Emily will take us through some of her
                            repertoire highlights.</p>
                        <p>
                            <!--                            </p>-->
                            <!--                                <a href="/season/1819/Programme-190120-AymanJarjour.pdf"-->
                            <!--                                   target="_blank">Concert programme</a>-->
                            <!--                            </p>-->
                        <p>
                            <a href="https://www.emilymitchellsoprano.com/"
                               target="_blank">More about Emily Mitchell</a>
                        </p>
                        <p><a href="https://www.emilymitchellsoprano.com/media" target="_blank">Hear Emily sing</a></p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item" id="AlastairSavage">
                    <div class="col-sm-3">
                        <h3>Alastair Savage Trio</h3>
                        <h4 class="text-info">
                            Saturday, 16<span class="subscript">th</span> March 2019
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buytickettl">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/447837"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1819/alastairsavage-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Way back in 2004, one of the violin players in the BBC SSO decided that
                            a return to his roots was long overdue. A native of Ardrossan, Alastair
                            Savage had grown up as a folk fiddler, famously winning The Double
                            (both the Ayrshire and National sections of the Land O' Burns Scots'
                            Fiddle Competition) in 1986, before going on to study classical playing at
                            the RSAM in Glasgow and then the Royal Academoy of Music in London.
                            Alastair heeded the call of the traditional tunes that had
                            started him off as a musician, and, together with his great friends Euan
                            Drysdale and Iain Crawford, The Alastair Savage Trio was born.
                        </p>
                        <p>As well as playing those written by the fiddle greats of yesteryear, Alastair had
                            been writing his own tunes for years, inspired by various experiences and the
                            land and cityscapes around him. <a href="http://alastairsavage.co.uk/music.html">Four albums
                                have been recorded so far</a>, along with many festival appearances.</p>
                        <p>"Hearing the raucous and the wistful tunes of Alastair Savage, I’ve never felt so
                            proud to be Scottish; his music is so invigorating and soulful" – Kate Clarkson</p>
                        <p>
                            <!--                            </p>-->
                            <!--                                <a href="/season/1819/Programme-190120-AymanJarjour.pdf"-->
                            <!--                                   target="_blank">Concert programme</a>-->
                            <!--                            </p>-->
                        <p>
                            <a href="http://alastairsavage.co.uk/"
                               target="_blank">More about Alastair Savage</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=B0GUT5uL4BQ" target="_blank">See the Alastair Savage
                                Trio in
                                action</a></p>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div id="PrevConcert" class="row">
        <div class="col-sm-12">
            <h3 class="text-info">Previous concerts</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">

                <li class="clearfix list-group-item dms-list-item-prev">
                    <div class="col-sm-3">
                        <h3>Rose Room</h3>
                        <h4 class="text-info">
                            Saturday, 15<span class="subscript">th</span> September 2018
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                        <p>Pre-concert performance from 7:15pm</p>-->
                        <!--                            <div id="buyticketroseroom">-->
                        <!--                                <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                                   href="https://www.wegottickets.com/event/447829"-->
                        <!--                                   target="_blank">Buy tickets</a>-->
                        <!--                            </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1819/roseroom-1-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>According to Jazz Scotland, Rose Room are “the hottest ticket in Scotland right
                            now”, playing Swing jazz in the gypsy style, following in the footsteps of the
                            great Django Reinhardt and Stephane Grappelli.
                        </p>
                        <p>Led by virtuoso fiddle player and vocalist
                            Seonaid Aitken (who also plays with Scottish Opera Orchestra), the
                            band features a star line-up comprising Scotland’s No.1 guitar
                            maker Jimmy Moon of ‘Moon Guitars’ (double bass), Celtic
                            Connections’ award-winners ‘Swing Guitars’ Tam Gallagher and
                            Tom Watson on rhythm.</p>
                        <p>Don't miss ‘Ensemble of the Year’ in the last <a href="http://www.jazzfest.co.uk/awards/">Scottish
                                Jazz Awards</a>!</p>
                        <p>
                            <a href="http://roseroom.co.uk/"
                               target="_blank">More about Rose Room</a>
                        </p>
                        <p>Dance around the living room <a href="https://www.youtube.com/watch?v=IivIT45086g"
                                                           target="_blank">to their
                                sound</a>.</p>
                        </p>
                        <a href="/season/1819/Programme-180915-RoseRoom.pdf"
                           target="_blank">Concert programme</a>
                        </p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item-prev">
                    <div class="col-sm-3">
                        <h3>Daniel Ciobanu</h3>
                        <h4 class="text-info">
                            Saturday, 6<span class="subscript">th</span> October 2018
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                        <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buyticketdanielciobanu">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/447831"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1819/Daniel-Ciobanu-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Originally from Romania, Daniel came to study in Edinburgh under Graeme
                            McNaught for a school gap year, and has retained close links with Scotland
                            since. A multiple first prize winner worldwide, a notable highlight was playing
                            on-stage alongside Lang Lang.
                        </p>
                        <p>“<i>Only one word can adequately describe this performance...Sensational!
                                Particularly exciting was the sense of devilry that permeated the faster
                                variations, in which the notes glittered and dazzled like
                                showers of diamonds.</i>”
                            Michael Traub, UNISA Competition.</p>
                        <p>“<i>A name to be shouted from the rooftops... a young man
                                whose staggering virtuoso credentials easily match those
                                of the young Horowitz, Cziffra and Rosenthal...</i>”
                            John Humphreys, Chairman Dudley International Piano Competition.</p>
                        <p>
                        </p>
                        <a href="/season/1819/Programme-181006-DanielCiobanu.pdf"
                           target="_blank">Concert programme</a>
                        </p>
                        <p>
                            <a href="http://www.danielpetricaciobanu.com/"
                               target="_blank">More about Daniel Cionabu</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=n5BXZd8xA14" target="_blank">See Daniel play</a></p>
                    </div>
                </li>

            </ul>
        </div>
    </div>

  <?php require "footer.php"; ?>

</div>

</body>
</html>
