<!DOCTYPE html>
<html>
<?php
require "header.php";
$title = "Music in Dollar";
htmlHead($title);
?>

<body>

<!--
Anna and Mairerad on 30th October 2021
Sirocco Winds 16th Jan 2022
Clare Hammond 9th April 2022
Roxburgh sometime in March 2022 depending on their orchestral commitments
and Alison Affleck and Tunnell Trust concert dates to be firmed up - the Tunnel Trust one depends on the other Music Socs in the tour.
-->

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
                        <p>
                        </p>
                        <p><span class="fa fa-times-circle"></span> Regrettably we have postponed the Sirocco Winds concert,
                            originally scheduled for 16th January.
                            The surge of Omicron cases meant that many of the committee and audience would not have
                            attended.
                            We are trying to reschedule it for late Spring - watch this space!
                        </p>
                        <p><span class="fa fa-medkit"></span> In line with best practice for small public events, we
                            have introduced <a href="covid19.php">Covid
                                19 guidelines</a>
                            for everyone's safety. Please familiarise yourself with these and respect them at the
                            concerts. Thanks!
                        </p>
                        <!--                        <p><span class="fa fa-coffee"></span> Our usual <span-->
                        <!--                                    class="bold specialhilite">Coffee Morning</span> to open the-->
                        <!--                            season will be held on Saturday 25th September at 10:00, in the-->
                        <!--                            Burnside Hall, Dollar.-->
                        <!--                            We're looking for volunteers to help on the day. Please speak to one of the committee or-->
                        <!--                            <a href="contact.php">get in touch online</a> or on Facebook. Hope to see you all there!-->
                        <p><span class="fa fa-envelope-o">&nbsp;</span> Like something, got a suggestion? Please <a
                                    href="contact.php">drop us a note online</a>, or on
                            <a href="https://www.facebook.com/MusicInDollar" target="_blank">Facebook</a> or
                            <a href="https://twitter.com/MusicInDollar" target="_blank">Twitter</a>.</p>
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
            <h2>2021-22 Season</h2>
        </div>
        <div class="col-sm-6 margintop10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="season/2122/DMS-Leaflet-2021-22.pdf" target="_blank">View</a>
                    the full programme for the current season [PDF 0.7MB] <a
                            href="season/2122/DMS-Leaflet-2021-22.pdf" target="_blank"><img
                                src="image/pdf.jpeg"/></a>
                </div>
            </div>
        </div>
    </div>

    <div id="NextConcert" class="row">
        <div class="col-sm-12">
            <h3 class="text-info">Buying Tickets</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
                <li class="clearfix list-group-item dms-list-item-prev" id="Tickets">
                    <div class="col-sm-12">
                        <p>Tickets for each concert can be bought by clicking the <i>'Buy tickets'</i> button beside the
                            concert listing below, or at the door.
                            Cost is &#163;10, students in full-time education admitted free of charge.</p>
                        <p>Season Tickets provide entry to all concerts in the season. Cost is &#163;35. That's less
                            than &#163;6 per concert, unbeatable value!</p>
                        <p>Choose how you'd like to pay: online using the button below, <a href="contact.php">contact
                                us</a> to
                            request bank transfer details, or buy at the door.</p>
                        <div id="buyseasonticket">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/526657"
                               target="_blank">Buy season tickets</a>
                        </div>
                    </div>
                </li>

            </ul>
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

                <li class="clearfix list-group-item dms-list-item-next" id="PianoDay">
                    <div class="col-sm-3">
                        <h3>Piano Day</h3>
                        <p class="specialhilite italic">Free of charge - all welcome</p>
                        <h4 class="text-info">
                            Sunday, 30<span class="subscript">th</span> January 2022
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2122/piano-keyboardangle-240.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Reintroducing the Music in Dollar Young Musician competition!
                        </p>
                        <p>Young pianists from several local schools will play a short set. Prizes will be awarded for
                            the best performances.</p>
                        <p class="italic">Further details to be confirmed.</p>
                        <!--                        <a href="/season/2122/Programme-220130-PianoDay.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
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

                <li class="clearfix list-group-item dms-list-item" id="RoxburghQuartet">
                    <div class="col-sm-3">
                        <h3>Roxburgh Quartet</h3>
                        <h4 class="text-info">
                            Sunday, 27<span class="subscript">th</span> February 2022
                        </h4>
                        <p>3:00pm, Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 7:15pm</p>
                        <div id="buyticketroxburghquartet">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/533030"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/roxburgh-mg5685-sm.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>This is the rescheduled concert from March 2020. Fingers crossed we can hear the Quartet this
                            time!</p>
                        <p>Formed in 2005 and based in Edinburgh, the Roxburgh are quartet in residence
                            at the city’s beautiful Lauriston Hall. Their core repertoire includes the late
                            Schubert quartets, the German Romantics, the great French masterworks and,
                            notably, Bartok’s First Quartet and Tan Dun’s Eight Colours for String Quartet.
                        </p>
                        <p>In recent years the quartet has added earlier music to its repertoire, inspired by
                            performing Bach’s The Art of Fugue at Edinburgh and St Andrews
                            Universities, with harpsichordists John Kitchen and Tom Wilkinson.</p>
                        <p><span class="fa fa-quote-left"></span><i>Inspired music played with complete control,
                                imagination and deep insight.</i><span
                                    class="fa fa-quote-right"></span>
                            – Courier</p>
                        </p>
                        <!--                        <a href="/season/1920/Programme-200327-RoxburghQuartet.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="http://www.roxburghquartet.com/"
                               target="_blank">More about the Roxburgh Quartet</a>
                        </p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item" id="PRDuo">
                    <div class="col-sm-3">
                        <h3>Prodanova - Ritivoiu Duo</h3>
                        <h4 class="text-info">
                            Sunday, 6<span class="subscript">th</span> March 2022
                        </h4>
                        <p>3:00pm, Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 7:15pm</p>
                        <div id="buyticketsprduo">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/533032"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2122/prodanova-ritivoiu-duo-240.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Yoanna Prodanova (Bulgarian) cello and Mihai Ritivoiu (Romanian) piano are Tunnell Trust
                            winners from last year.
                            These two outstanding young musicians bring their unique flair and originality to a varied
                            programme.
                            We are delighted to have them perform for us in Dollar.
                        </p>
                        <p>A native of Bulgaria, cellist Yoanna Prodanova studied in London and has played with several
                            UK orchestras.
                            Her recital career started in Switzerland in 2019.
                        </p>
                        <p>Romanian pianist Mihai Ritivoiu is the winner of numerous international competitions.
                            In addition to his solo recitals and concerto appearances, Mihai has a rich chamber music
                            activity, most notably as duo partner of the cellist Yoanna Prodanova.
                            Their duo has performed in the UK, France and The Netherlands, and they have been invited to
                            festivals
                        </p>
                        <p>The duo have recorded their debut album, including works by Janacek, Fauré and Chopin.
                        </p>
                        <p><span class="fa fa-quote-left"></span><i>it was refreshing to hear late Beethoven in the
                                hands of such a distinguished young duo</i><span
                                    class="fa fa-quote-right"></span>
                            – Christopher Axworthy</p>
                        <!--                        <a href="/season/2122/Programme-220306-PRDuo.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="https://christopheraxworthymusiccommentary.wordpress.com/2020/09/04/yoanna-prodanova-and-mihai-ritivoiu-at-st-marys/"
                               target="_blank">More about the Prodanova - Ritivoiu Duo</a>
                        </p>
                        <p><a href="http://www.yoannaprodanova.com/"
                              target="_blank">More about Yoanna Prodanova</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=4IFodCmWzK8"
                              target="_blank">Hear them play</a></p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item" id="ClareHammond">
                    <div class="col-sm-3">
                        <h3>Clare Hammond</h3>
                        <h4 class="text-info">
                            Saturday, 9<span class="subscript">th</span> April 2022
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 7:15pm</p>
                        <div id="buyticketsiroccowinds">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/533034"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2122/clarehammond-1-240.jpeg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Clare Hammond is an English pianist. Widely broadcast and recorded, she has created a strong
                            reputation as a 'star' interpreter of several areas, including contemporary music.
                            Clare’s discs for BIS have been widely praised with <i>The Times</i> commending her
                            “deliciously
                            unfussy poise and elegance”.
                            <i>Etude</i> received unanimous critical acclaim for its “unfaltering bravura and
                            conviction”
                            <i>(Gramophone)</i>. Her discography includes world premiere recordings of over twenty
                            works.
                        </p>
                        <p>Acclaimed as a pianist of “amazing power and panache” <i>(The Telegraph)</i>, Clare Hammond
                            is
                            recognised for the virtuosity and authority of her performances and has developed a
                            “reputation for brilliantly imaginative concert programmes” <i>(BBC Music Magazine)</i>. In
                            2016,
                            she won the Royal Philharmonic Society's 'Young Artist Award' in recognition of outstanding
                            achievement and in 2020 she was engaged to perform at the International Piano Series
                            (Southbank Centre) and the Aldeburgh Festival.</p>
                        <p><span class="fa fa-quote-left"></span><i>A revelation... very special and very
                                original.</i><span
                                    class="fa fa-quote-right"></span>
                            – Michel Dutrieue</p>
                        <!--                        <a href="/season/2122/Programme-220409-ClareHammond.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="http://clarehammond.com/"
                               target="_blank">More about Clare Hammond</a>
                        </p>
                        <p><a href="http://clarehammond.com/variations"
                              target="_blank">Hear her play</a></p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item" id="SiroccoWinds">
                    <div class="col-sm-3">
                        <h3>Sirocco Winds</h3>
                        <h4 class="text-info">
                            Saturday, ??<span class="subscript">th</span> TBC 2022
                        </h4>
                        <p>Time TBC Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
<!--                        <p>Pre-concert performance from 2:45pm</p>-->
                        <!--                        <div id="buyticketsiroccowinds">-->
                        <!--                            <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                               href="https://www.wegottickets.com/event/533028"-->
                        <!--                               target="_blank">Buy tickets</a>-->
                        <!--                        </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2122/siroccowinds-240.jpeg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Sirocco Winds are a dynamic and professional wind ensemble, who came together as alumni of
                            the Glasgow Conservatoire.
                        </p>
                        <p>Successes for the group include winning the Governors’ Recital Prize for Chamber Music at the
                            Royal Conservatoire of Scotland, being invited to perform at the Emerging Artists series at
                            Edinburgh’s Usher Hall and playing live on BBC Radio 3 and BBC Radio Scotland. Although
                            primarily a wind quintet the group also enjoy exploring chamber music for other instrument
                            combinations and have formed a trio for flute, clarinet and bassoon.</p>
                        <p><span class="fa fa-quote-left"></span><i>... a musical triumph.... two stunning sets with a
                                huge variety of music ranging across classical, jazz, show tunes – the West Side Story
                                medley was sublime – folk and contemporary.</i><span
                                    class="fa fa-quote-right"></span>
                            – St Boswell's Live!</p>
                        <!--                        <a href="/season/2122/Programme-220116-SiroccoWinds.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="https://www.classicalmusiciansscotland.com/artists/sirocco-winds/"
                               target="_blank">More about Sirocco Winds</a>
                        </p>
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

                <li class="clearfix list-group-item" id="MairearadAnna">
                    <div class="col-sm-3">
                        <h3>Mairearad and Anna</h3>
                        <h4 class="text-info">
                            Saturday, 30<span class="subscript">th</span> October 2021
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buyticketannamairerad">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/526659/"
                               target="_blank">Buy tickets</a>
                            <p></p>
                        </div>
                        <div>
                            <p><a href="covid19.php">Covid 19 guidelines</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2122/mairearadanna-240.jpeg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Two of Scotland’s most revered multi-instrumentalists,
                            Mairearad Green (accordion and bagpipes) and Anna Massie (guitar, banjo, fiddle) are a truly
                            captivating act, providing a highly energetic performance with an instantly warm and
                            friendly stage presence.</p>
                        <p>Having played alongside each other for over ten years, they revel in an intuitive approach to
                            each other’s musical ideas and interpretations, and an “almost telepathic communication” on
                            stage (Hi-Arts), effortlessly showcasing the fruits of duo partnership to the highest level
                            , creating “music more than the sum of just two parts” <i>(The Scotsman)</i>.
                            Now based in Glasgow, Mairearad and Anna both grew up in the Scottish Highlands amidst very
                            similar musical backgrounds (most notably, mandolin playing Dads!), and so share an innate
                            understanding of Scottish culture and music. As a duo they have enjoyed many successes,
                            including five stars in The Scotsman and high praise from KT Tunstall, becoming a much-loved
                            live act.</p>
                        <p><span class="fa fa-quote-left"></span><i>the camaraderie and sheer fun of musical
                                collaboration is plainly evident and infectious..</i><span
                                    class="fa fa-quote-right"></span>
                            – Songlines</p>
                        <p><span class="fa fa-quote-left"></span><i>full of energy and verve….first class.</i><span
                                    class="fa fa-quote-right"></span>
                            – R2 Magazine</p>
                        <!--                        <a href="/season/2122/Programme-211023-MairearadAnna.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <p><a href="https://www.mairearadandanna.com/"
                              target="_blank">More about Mairerad and Anna</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=pD3lZX7I4go"
                              target="_blank">Hear them play</a></p>
                        <p><a href="https://www.mairearadandanna.com/video/"
                              target="_blank">Samples from their website</a></p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item-prev" id="AlisonAffleck">
                    <div class="col-sm-3">
                        <h3>Alison Affleck</h3>
                        <h4 class="text-info">
                            Sunday, 28<span class="subscript">th</span> November 2021
                        </h4>
                        <p>3:00pm, Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 2:45pm</p>
                        <div id="buyticketalisonaffleck">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/529096"
                               target="_blank">Buy tickets</a>
                            <p></p>
                        </div>
                        <div>
                            <p><a href="covid19.php">Covid 19 guidelines</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2122/affleck-1-240.jpeg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Perennial winner and nominee of 'Best Jazz Vocalist', Ali Affleck is a trad jazz singer and
                            swing dancer.
                            As an American she is uniquely placed to deliver the authentic sound of Prohibition era
                            music, breathing new life into the music and bringing it to a 21st century audience.
                        </p>
                        <p>She is a resident musician at Edinburgh's Famous Jazz bar on Chambers Street
                            and this is where she hosts her trademark 'Speakeasy Sessions’ - high energy events that
                            feature the country's finest musicians performing early jazz, swing and blues
                            - a favourite for the swing dance scene!
                        </p>
                        <p><span class="fa fa-quote-left"></span><i>
                                “Ali Affleck is not a household name yet- but I think she soon will be” […]
                                “Ali sings with the same kind of élan and swing that is very evident in the recordings
                                of a certain Billie Holiday.
                                Now this is high praise indeed but I can assure you that it is entirely accurate. ”
                            </i><span
                                    class="fa fa-quote-right"></span>
                            – BBC Jazzhouse</p>
                        <!--                        <a href="/season/2122/Programme-211128-AliAffleck.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="https://www.aliaffleck.com/"
                               target="_blank">More about Ali Affleck</a>
                        </p>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <?php require "footer.php"; ?>

</div>

</body>
</html>
