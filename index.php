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
                        <p><span class="fa fa-coffee">&nbsp;</span>A new season begins, packed with interest and quality.
                            Before the concerts being we have the Coffee Morning, where we will hear music from each
                            perform in this season&#39;s programme.
                            Great coffee, conversation, games, raffle, cake stall... Come along and join us!</p>
                        <p><span class="fa fa-ticket">&nbsp;</span>Season tickets and memberships will be on sale at the Coffee Morning.
                            As a special incentive to beat the rush and buy early, 2 free complimentary tickets will be
                            given out for anyone buying a season ticket before the first concert.
                            If you can&#39;t make it to the Coffee Morning, then <a href="contact.php">get in touch online</a> or on Facebook.
                        </p>
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
                    <a href="season/1819/DMS-Leaflet-2019-20.pdf" target="_blank">View</a>
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
                        <h3>Fergus McCreadie Trio</h3>
                        <h4 class="text-info">
                            Saturday, 5<span class="subscript">th</span> October 2019
                        </h4>
                        <p>7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                        <p>Pre-concert performance from 7:15pm</p>-->
                        <!--                            <div id="buyticketfergusmccreadie">-->
                        <!--                                <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                                   href="https://www.wegottickets.com/event/000000"-->
                        <!--                                   target="_blank">Buy tickets</a>-->
                        <!--                            </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/fergus-alone-sm.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>xxx.
                        </p>
                        <p>xxx.</p>
                        <p>Don't miss ‘Ensemble of the Year’ in the last <a href="http://www.jazzfest.co.uk/awards/">Scottish
                                Jazz Awards</a>!</p>
                        <p>
                            <a href="http://www.fergusmccreadie.co.uk//"
                               target="_blank">More about Fergus McCreadie</a>
                        </p>
                        <p>Tunes that you part know already <a href="https://www.youtube.com/watch?v=IivIT45086g"
                                                               target="_blank">to their
                                sound</a>.</p>
                        </p>
                        <!--                        <a href="/season/1920/Programme-191005-FergusMcCreadie.pdf"-->
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

                <li class="clearfix list-group-item dms-list-item">
                    <div class="col-sm-3">
                        <h3>Charlotte Rowan</h3>
                        <h4 class="text-info">
                            Sunday, 17<span class="subscript">th</span> November 2019
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                        <p>Pre-concert performance from 7:15pm</p>-->
                        <!--                        <div id="buyticketcharlotterowan">-->
                        <!--                            <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                               href="https://www.wegottickets.com/event/000000"-->
                        <!--                               target="_blank">Buy tickets</a>-->
                        <!--                        </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/charlotte01-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>xxx.
                        </p>
                        <p>“<i>xxx.</i>”
                            Michael Traub, UNISA Competition.</p>
                        <p>“<i>xxx...</i>”
                            John Humphreys, Chairman Dudley International Piano Competition.</p>
                        <p>
                        </p>
                        <!--                        <a href="/season/1920/Programme-191117-CharlotteRowan.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="http://www.charlotterowan.com"
                               target="_blank">More about Charlotte Rowan</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=iQMJ8TEa4dY" target="_blank">See Charlotte play</a>
                        </p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item">
                    <div class="col-sm-3">
                        <h3>Top Floor Taivers</h3>
                        <h4 class="text-info">
                            Sunday, 19<span class="subscript">th</span> January 2020
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
                        <!--                        <div id="buytickettopfloortaivers">-->
                        <!--                            <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                               href="https://www.wegottickets.com/event/000000"-->
                        <!--                               target="_blank">Buy tickets</a>-->
                        <!--                        </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/TopFloorTaivers3-sm.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>xxx.
                        </p>
                        <p>xxx.</p>
                        <p>
                        </p>
                        <!--                        <a href="/season/1920/Programme-200119-TopFloorTaivers.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                        <p>
                            <a href="http://aymanjarjour.com/"
                               target="_blank">More about Top Floor Taivers</a>
                        </p>
                        <p><a href="https://www.youtube.com/watch?v=gi7HVQQ0isw" target="_blank">See Top Floor Taivers
                                in action</a></p>
                    </div>
                </li>

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
                        <!--                        <div id="buyticketchristinalawrie">-->
                        <!--                            <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                               href="https://www.wegottickets.com/event/000000"-->
                        <!--                               target="_blank">Buy tickets</a>-->
                        <!--                        </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/christinalawrie-a3-sm.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Christina...</p>
                        <p>.</p>
                        <p>
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
                        <!--                            <div id="buyticketroxburghquartet">-->
                        <!--                                <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                                   href="https://www.wegottickets.com/event/447837"-->
                        <!--                                   target="_blank">Buy tickets</a>-->
                        <!--                            </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/1920/roxburgh-mg5685-sm.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>xxx.
                        </p>
                        <p>.</p>
                        <p>"" – x</p>
                        <p>
                        </p>
                        <!--                        <a href="/season/1819/Programme-190316-AlastairSavage.pdf"-->
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

  <?php require "footer.php"; ?>

</div>

</body>
</html>
