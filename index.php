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
                        <p><span class="fa fa-music">&nbsp;</span>Charlotte Rowan lived up to her billing - a fantastic,
                            sparky musical showcase, flowing between lyricism and virtuosity. A wonderful final treat for 2019.</p>
                        <p><span class="fa fa-envelope-o">&nbsp;</span>Like something, got a suggestion? Please <a
                                    href="contact.php">drop us a note online</a> or on
                            <a href="https://www.facebook.com/MusicInDollar" target="_blank">Facebook</a>.</p>
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
            <h2>2019-20 Season</h2>
        </div>
        <div class="col-sm-6 margintop10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="season/1920/DMS-Leaflet-2019-20.pdf" target="_blank">View</a>
                    the full programme for the current season [PDF 2.6MB] <a
                            href="season/1920/DMS-Leaflet-2019-20.pdf" target="_blank"><img
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
                        <h3>Top Floor Taivers</h3>
                        <h4 class="text-info">
                            Sunday, 19<span class="subscript">th</span> January 2020
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buytickettopfloortaivers">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="http://www.wegottickets.com/event/483892"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/TopFloorTaivers3-sm.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Top Floor Taivers are a folk band from Glasgow. Featuring vocalist and ukulele
                            player Claire Hastings (Young Traditional Musician of the Year 2015), fiddler Gráinne
                            Brady, Heather Downie on clarsach and Aidan Moodie on guitar, they have
                            impressed audiences with their unique arrangements and stunning harmonies.
                        </p>
                        <p>Their debut album <i>A Delicate Game</i> showcases a variety of styles. From
                            traditional ballads to contemporary covers, Top Floor Taivers deftly tell a story
                            through both words and instrumentation, no matter what its origin.</p>
                        <p>
                        <p><span class="fa fa-quote-left"></span><i>These four are incredibly talented.</i><span
                                    class="fa fa-quote-right"></span>
                            – Folk Radio UK</p>
                        </p>
                        <p><span class="fa fa-quote-left"></span><i>A flair for arrangement.</i><span
                                    class="fa fa-quote-right"></span>
                            – Northern Sky Magazine</p>
                        </p>
                        <!--                        <a href="/season/1920/Programme-200119-TopFloorTaivers.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="https://www.facebook.com/TopFloorTaivers/"
                               target="_blank">More about Top Floor Taivers</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=gi7HVQQ0isw" target="_blank">See Top Floor Taivers
                                in action</a></p>
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

                <li class="clearfix list-group-item dms-list-item" id="ChristinaLawrie">
                    <div class="col-sm-3">
                        <h3>Christina Lawrie</h3>
                        <h4 class="text-info">
                            Sunday, 23<span class="subscript">rd</span> February 2020
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buyticketchristinalawrie">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="http://www.wegottickets.com/event/483894"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/christinalawrie-a3-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Hailed as a rising star by the magazine International Piano, Scottish pianist
                            Christina Lawrie made her debut in 2009 with the RSNO in the Caird Hall.</p>
                        <p>After studying in Glasgow, Chetham's and Trinity College Cambridge, Christina
                            has been an active concert pianist in the UK and abroad. Winner of many prizes,
                            her debut at London’s world-renowned Wigmore Hall was praised by Musical
                            Opinion magazine for its “astute intelligence and warmth of spirit”.</p>
                        <p><span class="fa fa-quote-left"></span><i>Christina Lawrie is a young pianist of formidable
                                intellect and boundless
                                technique...Fantastic playing.</i><span
                                    class="fa fa-quote-right"></span>
                            – The Observer</p>
                        </p>
                        <p><span class="fa fa-quote-left"></span><i>Christina Lawrie is a wholly natural
                                musician.</i><span
                                    class="fa fa-quote-right"></span>
                            – Classical Source</p>
                        </p>
                        <!--                        <a href="/season/1920/Programme-190223-ChristinaLawrie.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="http://www.christinalawrie.co.uk/"
                               target="_blank">More about Christina Lawrie</a>
                        </p>
                        <p><a href="http://www.christinalawrie.co.uk/music/chopin-ballade-no4-stmartins.mp3"
                              target="_blank">Hear Christina play</a></p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item" id="RoxburghQuartet">
                    <div class="col-sm-3">
                        <h3>Roxburgh Quartet</h3>
                        <h4 class="text-info">
                            Saturday, 21<span class="subscript">st</span> March 2020
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <div id="buyticketroxburghquartet">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="http://www.wegottickets.com/event/483896"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/roxburgh-mg5685-sm.png"/>
                    </div>
                    <div class="col-sm-6">
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
                        <!--                        <a href="/season/1920/Programme-200321-RoxburghQuartet.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="http://www.roxburghquartet.com/"
                               target="_blank">More about the Roxburgh Quartet</a>
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

                <li class="clearfix list-group-item dms-list-item-prev">
                    <div class="col-sm-3">
                        <h3>Fergus McCreadie Trio</h3>
                        <h4 class="text-info">
                            Saturday, 5<span class="subscript">th</span> October 2019
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 7:15pm features Cloe Burbury on alto sax.</p>
                        <div id="buyticketfergusmccreadie">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="https://www.wegottickets.com/event/483888"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/fergus-alone-sm.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Labelled as "<i>the most exciting new talent to emerge from Scotland in a
                                decade</i>" (Jazz Scotland), the Fergus McCreadie Trio are poised to be one of
                            Jazz's most compelling outfits. Their music is a beguiling blend of
                            Jazz and Scottish styles. While the compositions are new, fresh and
                            exciting, they also strike a familiarity reminiscent of songs known since childhood.</p>
                        <p>2018, the trio released their debut album, 'Turas' (Scottish Gaelic for
                            Journey) to rave reviews, touring it internationally in 2019.</p>
                        <p>Featured recently in publications as diverse as Jazz Views and The Economist, Fergus and the
                            Trio are making their mark.</p>
                        <p><span class="fa fa-quote-left"></span><i>Precocious talent may abound in circles but it is
                                rare that they elicit such a
                                warm and positive feeling... compositions that are impeccably played,
                                memorable and thought provoking by turns.</i><span class="fa fa-quote-right"></span>
                            – Jazz Views</p>
                        <p><span class="fa fa-quote-left"></span><i>Simply outstanding.</i><span
                                    class="fa fa-quote-right"></span>
                            – Jazzwise</p>
                        <a href="http://www.fergusmccreadie.co.uk//"
                           target="_blank">More about Fergus McCreadie</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=IivIT45086g"
                              target="_blank">Hear Fergus play</a>.</p>
                        </p>
                        <a href="/season/1920/Programme-191005-FergusMcCreadie.pdf"
                           target="_blank">Concert programme</a>
                        </p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item-prev">
                    <div class="col-sm-3">
                        <h3>Charlotte Rowan</h3>
                        <h4 class="text-info">
                            Sunday, 17<span class="subscript">th</span> November 2019
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 2:45pm</p>
                        <div id="buyticketcharlotterowan">
                            <a type="button" class="btn btn-info btn-blocks"
                               href="http://www.wegottickets.com/event/483890"
                               target="_blank">Buy tickets</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/charlotte01-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>From an early age, local lass Rowan (who attended Dollar Academy) has been
                            captivating audiences with her dazzling virtuosity, commanding stage presence
                            and imaginative spirit.</p>
                        <p>Since graduating in 2012 from Peabody Conservatory of Music, USA, she has launched
                            a career as a solo performer and as a duo with long-established partner Charlotte
                            Stevenson.</p>
                        <p>Making a welcome return to Music in Dollar, those of us who hear her play in 2014 had similar
                            reactions to other audiences:</p>
                        <p><span class="fa fa-quote-left"></span><i>A breathtaking recital. I was advised to get
                                my programme signed for posterity, and wish I had.</i><span
                                    class="fa fa-quote-right"></span></p>
                        </p>
                        <p><span class="fa fa-quote-left"></span><i>The sheer virtuosity of her playing - speed, range
                                of technique, mood - was amazing. You truly gave us a concert to remember. Such an
                                amazing
                                performance.</i><span class="fa fa-quote-right"></span></p>
                        </p>
                        <a href="/season/1920/Programme-191117-CharlotteRowan.pdf"
                           target="_blank">Concert programme</a>
                        </p>
                        <p>
                            <a href="http://www.charlotterowan.com"
                               target="_blank">More about Charlotte Rowan</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=iQMJ8TEa4dY" target="_blank">See Charlotte Rowan
                                play</a>
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
