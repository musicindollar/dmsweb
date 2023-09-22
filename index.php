<!DOCTYPE html>
<html lang="en">
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
                        <p>
                        </p>
                        <p><span class="fa fa-coffee"></span> Next event is our usual season opener Coffee Morning, on Saturday September 16th 10:00 - 12:00.
                            Come along for great coffee, chat and a preview of this season's performers.
                        </p>
                        <!--                        <p><span class="fa fa-cc-discover"></span> We're busy preparing for next season - watch this space for announcements!-->
                        <!--                        </p>-->
                        <!--                        <p><span class="fa fa-calendar"></span> Renowned violinist <a href="https://en.wikipedia.org/wiki/Rachel_Podger" target="_blank">Rachel Podger</a> <a-->
                        <!--                                    href="https://www.perththeatreandconcerthall.com/whats-on/rachel-podger-218002" target="_blank">will perform in Perth</a> on Tuesday 28th Feb, 7:30pm, in the beautiful St John's Kirk.-->
                        <!--                            Music in Dollar members get in for reduced rates of &#163;10-->
                        <!--                        </p>-->
                        <!--                        <p><span class="fa fa-clock-o"></span>-->
                        <!--                            Note that the new date for the <a-->
                        <!--                                    href="#SiroccoWinds">Sirocco Winds</a> concert is Saturday 7th May (<a-->
                        <!--                                    href="#SiroccoWinds">see below</a> for full details).-->
                        <!--                        </p>-->
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
            <h2>2023-24 Season</h2>
        </div>
        <div class="col-sm-6 margintop10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="season/2324/MiD-Leaflet-2023-24.pdf" target="_blank">View</a>
                    the full programme for the current season [PDF 0.7MB] <a
                            href="season/2324/MiD-Leaflet-2023-24.pdf" target="_blank"><img
                                src="image/pdf.jpeg"/></a>
                </div>
            </div>
        </div>
    </div>

    <div id="BuyingTickets" class="row">
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
                            concert listing below, or at the door (cash only at present).
                            Cost is &#163;12, students in full-time education admitted free of charge.</p>
                        <p>Season Tickets provide entry to all concerts in the season. Cost is &#163;40. That's &#163;8
                            per concert, unbeatable value!</p>
                        <p>Choose how you'd like to pay: online using the button below, <a href="contact.php">contact
                                us</a> to
                            request bank transfer details, or buy at the door.</p>
                        <div id="buyseasonticket">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/593008"
                               target="_blank">Buy season tickets</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div id="NextConcert" class="row">
        <div class="col-sm-12">
            <h3 class="text-info">Next event</h3>
            <ul class="list-group">


                <li class="clearfix list-group-item dms-list-item-next" id="RoseRoom">
                    <div class="col-sm-3">
                        <h3>Rose Room</h3>
                        <h4 class="text-info">
                            Saturday, 21<span class="subscript">st</span> October 2023
                        </h4>
                        <p>Time 7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 7:15pm</p>
                        <div id="buyticketroseroom">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/593010/"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2324/Rose-Room-095-240.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>According to Jazz Scotland, Rose Room are “the hottest ticket in Scotland right
                            now”, playing Swing jazz in the gypsy style, following in the footsteps of the great
                            Django Reinhardt and Stephane Grappelli.
                        </p>
                        <p>
                            Led by virtuoso fiddle player and vocalist Seonaid Aitken (who also plays with
                            Scottish Opera Orchestra), the band features a star line-up comprising
                            Scotland’s No.1 guitar maker Jimmy Moon of 'Moon Guitars’ (double
                            bass), Celtic Connections’ award-winners ‘Swing Guitars’ Tam Gallagher
                            and Tom Watson on rhythm and solo guitars respectively.
                        </p>
                        <p>Don't miss ‘Ensemble of the Year’ in the several ‘Scottish Jazz Awards’!</p>
                        <p><span class="fa fa-quote-left"></span><i>Rose Room swing harder than an elm tree in
                                a force nine English gale…</i><span
                                    class="fa fa-quote-right"></span> Shetland News</p>
                        <p><span class="fa fa-quote-left"></span><i>As close to the sound of the great Stephane Grappelli as I think you’re going to

                                hear in Scotland</i><span
                                    class="fa fa-quote-right"></span> BBC Radio Scotland</p>
                        <!--                        <p><a href="/season/2324/Programme-231021-RoseRoom.pdf"-->
                        <!--                              target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="http://roseroom.co.uk/"
                               target="_blank">More about Rose Room</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=IivIT45086g"
                              target="_blank">Listen to Rose Room in concert</a>, what an infectious beat along with the fantastic playing.</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">

                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-info">Still to come</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-group">

                            <li class="clearfix list-group-item dms-list-item" id="MartinSimpson">
                                <div class="col-sm-3">
                                    <h3>Rachel Hair</h3>
                                    <h4 class="text-info">
                                        Sunday, 12<span class="subscript">th</span> November 2023
                                    </h4>
                                    <p>Time 3:00pm Gibson Hall, Dollar <a
                                                href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                            7DU</a></p>
                                    <p>Pre-concert performance from 2:45pm</p>
                                    <div id="buyticketrachelhair">
                                        <a type="button" class="btn btn-info btn-blocks"
                                           href="https://www.wegottickets.com/event/593012/"
                                           target="_blank">Buy tickets</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <img src="/image/2324/rachelhair-240.jpg"/>
                                </div>
                                <div class="col-sm-6">
                                    <p>Widely recognised as one of the world’s finest exponents of Scottish Harp (clarsach),
                                        Rachel Hair partners with guitarist and fiddler Ron Jappy to showcase both the deep tradition
                                        and modern vibe of Scottish music.
                                    </p>
                                    <p>
                                        From crisp strathspeys and heartfelt airs, to virtuosic reels and driving jigs, this is not music for taking a nap!
                                        The Glasgow-based duo tour widely, and Rachel is active throughput the Celtic world and beyond in Europe
                                        promoting traditional and contemporary harp playing.
                                    </p>
                                    <p><span class="fa fa-quote-left"></span><i>sheer perfection... major new talent </i><span
                                                class="fa fa-quote-right"></span> - Irish Musical Review</p>
                                    <p><span class="fa fa-quote-left"></span><i>spectacular acoustic musical tour</i><span
                                                class="fa fa-quote-right"></span> - Folks & Roots</p>
                                    <!--                                    <p><a href="/season/2324/Programme-231112-RachelHair.pdf"-->
                                    <!--                                          target="_blank">Concert programme</a>-->
                                    <!--                                    </p>-->
                                    <p>
                                        <a href="https://www.rachelhair.com/"
                                           target="_blank">More about Rachel Hair</a>
                                    </p>
                                    <p><a href="https://www.rachelhair.com/videos/"
                                          target="_blank">Watch Rachel and Ron play</a>, on a New Zealand beach!</p>
                                </div>
                            </li>

                            <li class="clearfix list-group-item dms-list-item-prev" id="ChoirDay">
                                <div class="col-sm-3">
                                    <h3>Open Choir Day</h3>
                                    <p class="specialhilite italic">Free of charge - all welcome</p>
                                    <h4 class="text-info">
                                        Sunday 19<span class="subscript">th</span> November 2023
                                    </h4>
                                    <!--                                    <p>2:00pm (ends 5pm) Gibson Hall, Dollar <a-->
                                    <p>Time 1:30pm Gibson Hall, Dollar <a
                                                href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                            7DU</a></p>
                                    <div id="registeropenchoirday">
                                        <a type="button" class="btn btn-info btn-blocks"
                                           href="https://www.wegottickets.com/event/594703/"
                                           target="_blank">Register</a>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <img src="/image/2223/choir-cartoon-240.jpeg"/>
                                </div>
                                <div class="col-sm-6">
                                    <p>There's no better way to feel good than to sing! Music in Dollar has organised a
                                        day where you can do just that – with some expert tuition along the way.
                                        Singing doesn't require an instrument – it's you! Everyone can do it, so why not
                                        come along and have some fun.
                                        No music reading skills are needed.</p>
                                    <p>The format will be to learn a few songs (popular, folk, classical), with a vocal
                                        workshop led by expert tutor Brian McBride to help bring it all together. The theme this time is 'Musical Theatre'. At
                                        the end the 'choir' will perform the songs for anyone who wants to come along
                                        and listen.</p>
                                    <p>This is a community event, so all are welcome at no cost. Bring along friends and
                                        family, anyone who is interested to either sing themselves or listen to
                                        others.</p>
                                    <p>Water will be provided. Bring along any other edibles to keep you going. A pencil
                                        might also be handy for taking notes.</p>
                                    <p>If you'd like to come along then registering using the button on the left will help us
                                        to prepare for the right number of people.</p>
                                    <p>Those who don't fancy singing can still enjoy the sounds of those that do. Come
                                        along and listen - it's free!</p>
                                    <!--                        <a href="/season/2122/Programme-220130-PianoDay.pdf"-->
                                    <!--                           target="_blank">Concert programme</a>-->
                                    <!--                        </p>-->
                                </div>
                            </li>

                            <li class="clearfix list-group-item dms-list-item" id="DuoBizart">
                                <div class="col-sm-3">
                                    <h3>duo b!z'art</h3>
                                    <h4 class="text-info">
                                        Sunday, 14<span class="subscript">th</span> January 2024
                                    </h4>
                                    <p>3:00pm Gibson Hall, Dollar <a
                                                href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                            7DU</a></p>
                                    <p>Pre-concert performance from 2:45pm</p>
                                    <div id="buyticketduobizart">
                                        <a type="button" class="btn btn-info btn-blocks"
                                           href="https://www.wegottickets.com/event/593014/"
                                           target="_blank">Buy tickets</a>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <img src="/image/2324/Duobizart6-240.jpg"/>
                                </div>
                                <div class="col-sm-6">
                                    <p>One piano, four hands. Since 2004 Belgian pianists Geoffrey Baptiste and André Roe have been developing a unique approach to performance, with concerts a “complete lived experience”.
                                        Combining great musical works for piano duo, strong themes (Aboard the Orient Express, Tales and Legends, etc), with theatre and projection</p>
                                    <p>Their repertoire has similar themes, ranging from the romantic to 20th century with a subtle mix of undisputed masterpieces and unjustly neglected works.
                                    </p>
                                    <p><span class="fa fa-quote-left"></span><i>unusual and pretty original... so precise as a team that one could imagine it was just one player</i><span
                                                class="fa fa-quote-right"></span>
                                        – Fylde Music Circle</p>
                                    <p><span class="fa fa-quote-left"></span><i>played with real energy and so perfectly co-ordinated</i><span
                                                class="fa fa-quote-right"></span>
                                        – Maidenhead Music</p>
                                    <!--                                    <p><a href="/season/2324/Programme-240114-DuoBizart.pdf"-->
                                    <!--                                          target="_blank">Concert programme</a></p>-->
                                    <p><a href="https://www.duobizart.be/"
                                          target="_blank">More about duo b!z'art</a>
                                    </p>
                                    <p><a href="https://www.youtube.com/watch?v=efRT7-r8MSU"
                                          target="_blank">Listen to them play</a> Mendelssohn</p>
                                </div>
                            </li>

                            <li class="clearfix list-group-item dms-list-item-prev" id="PianoDay">
                                <div class="col-sm-3">
                                    <h3>Piano Day</h3>
                                    <p class="specialhilite italic">Free of charge - all welcome</p>
                                    <h4 class="text-info">
                                        Sunday, 28<span class="subscript">th</span> January 2024
                                    </h4>
                                    <p>2:00pm Gibson Hall, Dollar <a
                                                href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                            7DU</a></p>
                                    <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                                </div>
                                <div class="col-sm-3">
                                    <img src="/image/2122/piano-keyboardangle-240.jpg"/>
                                </div>
                                <div class="col-sm-6">
                                    <p>After last year's success we're delighted to run the Music in Dollar Piano Day for
                                        young people again. This time the focus is on young people performing a favourite
                                        piece in their own way.</p>
                                    <p>Mavy Williamson will provide expert tuition and guidance as the pianists rehearse and perform their chosen pieces.
                                        All abilities and ages from 5-19 are welcome – don't be shy.</p>
                                    <p>Fresh interpretations, famous and not so famous pieces, and free!
                                        No charge to enter as player or listener, so what better way to spend a Sunday
                                        afternoon.</p>
                                    <p>Refreshments will be provided.</p>
                                    <p>For those who are too old to play, why not come along and hear musicians of the
                                        future? It's free, and should be a varied and stimulating afternoon!</p>
                                    <p>We also plan to run a second Piano Day later in the year.</p>
                                    <!--                        <a href="/season/2122/Programme-220130-PianoDay.pdf"-->
                                    <!--                           target="_blank">Concert programme</a>-->
                                    <!--                        </p>-->
                                </div>
                            </li>

                            <li class="clearfix list-group-item dms-list-item-prev" id="ScottishClarinetChoir">
                                <div class="col-sm-3">
                                    <h3>Trio Ecossaise</h3>
                                    <h4 class="text-info">
                                        Sunday, 4<span class="subscript">th</span> February 2024
                                    </h4>
                                    <p>3:00pm Gibson Hall, Dollar <a
                                                href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                            7DU</a></p>
                                    <p>Pre-concert performance from 2:45pm</p>
                                    <div id="buyticket-trioecossaise">
                                        <a type="button" class="btn btn-info btn-blocks"
                                           href="https://www.wegottickets.com/event/593016/"
                                           target="_blank">Buy tickets</a>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <img src="/image/2324/trioecossaise1-240.jpeg"/>
                                </div>
                                <div class="col-sm-6">
                                    <p>For 15 years, Jennifer Brown (clarinet), Harriet Davidson (cello) and Claire Haslin (piano) have been performing
                                        across concert hall, schools and social settings. Their repertoire ranges from the classics (Beethoven, Brahms),
                                        to hidden gems (Ireland, Glinka), and all-female composer programmes (Schumann, Farrenc, Tailleferre & Walker)</p>
                                    <p><span class="fa fa-quote-left"></span><i>Holy Trinity Church was filled with wonderful music
                                            performed by the hugely talented Trio Ecossaise...
                                            the combination was sublime... a superb performance</i><span
                                                class="fa fa-quote-right"></span> – Crail Festival</p>
                                    <p><span class="fa fa-quote-left"></span><i>Trio Ecossaise brought a ray of sunshine</i><span
                                                class="fa fa-quote-right"></span> – Campbelltown Courier</p>
                                    <!--                        <a href="/season/2324/Programme-240204-TrioEcossaisepdf"-->
                                    <!--                           target="_blank">Concert programme</a>-->
                                    <p><a href="https://www.trioecossaise.com/"
                                          target="_blank">More about Trio Ecossaise</a>
                                    </p>
                                </div>
                            </li>

                            <li class="clearfix list-group-item dms-list-item-prev" id="AlbaChallah">
                                <div class="col-sm-3">
                                    <h3>Alba Challah</h3>
                                    <h4 class="text-info">
                                        Saturday, 16<span class="subscript">th</span> March 2024
                                    </h4>
                                    <p>7:30pm Gibson Hall, Dollar <a
                                                href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                            7DU</a></p>
                                    <p>Pre-concert performance from 7:15pm</p>
                                    <div id="buyticket-albachallah">
                                        <a type="button" class="btn btn-info btn-blocks"
                                           href="https://www.wegottickets.com/event/593018/"
                                           target="_blank">Buy tickets</a>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <img src="/image/2324/albachallah-240.jpeg"/>
                                </div>
                                <div class="col-sm-6">
                                    <p>Alba Challah are a diverse group of Scottish and international musicians, playing an intoxicating fusion of Klezmer, classical and World music styles.
                                        Featuring clarinet, viola, cello, accordion, bass and percussion, they explore a vibrant and uplifting sonic landscape.</p>
                                    <p>Klezmer is a European Jewish instrumental musical tradition characterised by dance tunes, ritual melodies, and virtuosic improvisations.
                                        In recent times Klezmer is often a fusion with other styles.</p>
                                    <p><span class="fa fa-quote-left"></span><i>excellent and entertaining performance... clearly a group of very talented musicians</i><span
                                                class="fa fa-quote-right"></span>
                                        – Ann Napier, The Osprey Music Society</p>
                                    <p><span class="fa fa-quote-left"></span><i>full of passion, brilliance and supreme
                                            intelligence</i><span
                                                class="fa fa-quote-right"></span>
                                        – Cowal Music Club</p>
                                    <!--                                    <p><a href="/season/2223/Programme-240316-AlbaChallah.pdf" target="_blank">Concert programme</a></p>-->
                                    <p><a href="https://www.classicalmusiciansscotland.com/artists/alba-challah/"
                                          target="_blank">More about Alba Challah</a>
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </ul>
        </div>
    </div>

    <!--    <div id="PrevConcert" class="row">-->
    <!--        <div class="col-sm-12">-->
    <!--            <h3 class="text-info">Previous concerts</h3>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="col-sm-12">-->
    <!--            <ul class="list-group">-->
    <!---->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->

</div>

<?php require "footer.php"; ?>

</body>
</html>
