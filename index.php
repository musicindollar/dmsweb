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
                        <p><span class="fa fa-music"></span> Our first concert of 2023 is ADLibitum, a violin and accordion duo. They really generate some energy, and weave a lovely sound tapestry.
                        </p>
                        <p><span class="fa fa-heart"></span> The young persons Piano Day was a great success, with 20 young pianists participating in two parallel workshops, with a final performance to finish.
                        </p>
                        <!--                        <p><span class="fa fa-calendar"></span> x.</p>-->
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
            <h2>2021-22 Season</h2>
        </div>
        <div class="col-sm-6 margintop10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="season/2223/MiD-Leaflet-2022-23.pdf" target="_blank">View</a>
                    the full programme for the current season [PDF 0.7MB] <a
                            href="season/2223/MiD-Leaflet-2022-23.pdf" target="_blank"><img
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
                        <!--                        <p>Choose how you'd like to pay: online using the button below, <a href="contact.php">contact-->
                        <!--                                us</a> to-->
                        <!--                            request bank transfer details, or buy at the door.</p>-->
                        <!--                        <div id="buyseasonticket">-->
                        <!--                            <a type="button" class="btn btn-info btn-blocks"-->
                        <!--                               href="https://www.wegottickets.com/event/554785"-->
                        <!--                               target="_blank">Buy season tickets</a>-->
                        <!--                        </div>-->
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div id="NextConcert" class="row">
        <div class="col-sm-12">
            <h3 class="text-info">Next concert</h3>
            <ul class="list-group">

                  <li class="clearfix list-group-item dms-list-item-next" id="ADLibitum">
                      <div class="col-sm-3">
                          <h3>ADLibitum</h3>
                          <h4 class="text-info">
                              Sunday, 19<span class="subscript">th</span> February 2023
                          </h4>
                          <p>3:00pm Gibson Hall, Dollar <a
                                      href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                  7DU</a></p>
                          <p>Pre-concert performance from 7:15pm</p>
                          <div id="buyticketadlibitum">
                          <a type="button" class="btn btn-info btn-blocks"
                          href="https://www.wegottickets.com/event/572405/"
                          target="_blank">Buy tickets</a>
                          <p></p>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <img src="/image/2223/adlibitum1-240.jpeg"/>
                      </div>
                      <div class="col-sm-6">
                          <p>ADLibitum weave a dazzling and beatiful sound tapestry on violin and
                              accordion.</p>
                          <p>Andrea and Djordje Gajic are based in Scotland (Andrea is professor at RCS
                              Glasgow) and tour
                              widely.
                              Exploring many styles (eg Brahms, Massenet, Albeniz, Arkhipovsky),
                              their performances entrance the audience with precision, passion and
                              intensity.</p>
                          <p><span class="fa fa-quote-left"></span><i>Two astonishing virtuosi whose playing
                                  together was
                                  masterly</i><span
                                      class="fa fa-quote-right"></span>
                              – Skye Chamber Music</p>
                          <p><span class="fa fa-quote-left"></span><i>full of passion, brilliance and supreme
                                  intelligence</i><span
                                      class="fa fa-quote-right"></span>
                              – Cowal Music Club</p>
                          <p><a href="/season/2223/Programme-230219-AdLibitum.pdf" target="_blank">Concert programme</a></p>
                          <p><a href="https://www.classicalmusiciansscotland.com/artists/adlibitum/"
                                target="_blank">More about ADLibitum</a>
                          </p>
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

                            <li class="clearfix list-group-item dms-list-item" id="TheAllSorts">
                                <div class="col-sm-3">
                                    <h3>The All Sorts</h3>
                                    <h4 class="text-info">
                                        Sunday, 19<span class="subscript">th</span> March 2023
                                    </h4>
                                    <p>3:00pm Gibson Hall, Dollar <a
                                                href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                            7DU</a></p>
                                    <p>Pre-concert performance from 2:45pm</p>
                                    <div id="buyticketallsorts">
                                    <p>
                                      <a type="button" class="btn btn-info btn-blocks" href="https://www.wegottickets.com/event/573216/" target="_blank">Buy tickets</a>
                                    </p>
                                    <p></p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <img src="/image/2223/allsorts1-240.jpeg"/>
                                </div>
                                <div class="col-sm-6">
                                    <p>The All Sorts are an all-singing, all-female a-capella singing group,
                                        drawn from Scottish Opera performers who simply wanted 'an excuse to hang out
                                        more'.</p>
                                    <p>Hailing from the UK and North America, they range from opera to Motown and lieder
                                        to Disney,
                                        combining classic barbershop and classical arrangements. They began their
                                        closely
                                        harmonising adventure in late 2017.</p>
                                    <p><span class="fa fa-quote-left"></span><i>stylish and talented group coupling
                                            their wonderful
                                            voices with a flair for entertainment</i><span
                                                class="fa fa-quote-right"></span>
                                        – Margaret Isaacs, Cove Burgh Hall</p>
                                    <p><span class="fa fa-quote-left"></span><i>The All Sorts were amazing</i><span
                                                class="fa fa-quote-right"></span>
                                        – Alison Gregson, Greyfriars Kirk</p>
                                    <!--                        <a href="/season/2122/Programme-230219-ADLibitum.pdf"-->
                                    <!--                           target="_blank">Concert programme</a>-->
                                    <p><a href="https://www.theallsorts.com/"
                                          target="_blank">More about The All Sorts</a> and <a
                                                href="https://www.classicalmusiciansscotland.com/artists/the-all-sorts/">even
                                            more</a>
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

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

                <li class="clearfix list-group-item dms-list-item-prev" id="MartinSimpson">
                    <div class="col-sm-3">
                        <h3>Martin Simpson</h3>
                        <h4 class="text-info">
                            Saturday, 24<span class="subscript">th</span> September 2022
                        </h4>
                        <p>Time 7:30pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 7:15pm</p>
<!--                        <div id="buyticketmartinsimpson">-->
<!--                            <a type="button" class="btn btn-info btn-blocks"-->
<!--                               href="https://www.wegottickets.com/event/554788"-->
<!--                               target="_blank">Buy tickets</a>-->
<!--                        </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2223/martinsimpson1-240.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Martin Simpson is one of England’s most revered folk performers.
                            The remarkable intimate solo performances that Martin gives go from strength to strength -
                            every
                            gig is a masterclass.
                            He travels the length and breadth of the UK and beyond, giving rapt audiences passion,
                            sorrow,
                            love, beauty, tragedy and majesty through his playing.
                        </p>
                        <p>
                            Widely acknowledged as one of the finest acoustic and slide guitar players in the world,
                            Martin's interpretations of traditional songs are masterpieces of storytelling.
                            His solo shows are intense, eclectic, spellbinding and deeply moving.
                        </p>
                        <p>
                            Martin has been nominated an astounding 31 times in the 16 years of the BBC Radio 2 Folk
                            Awards
                            - more than any other performer - and has won numerous awards.
                        </p>
                        <p>With a huge guitar and banjo collection, Martin is consistently named as one of the very
                            finest
                            acoustic, finger-style and slide guitar players in the world.
                            Watch his <a href="https://www.youtube.com/watch?v=EAoQGSiVsy4"
                                         target="_blank">finger picking masterclass</a>.</p>
                        <p><span class="fa fa-quote-left"></span><i>Another guitar master class and great lyrics, just
                                like
                                a great red wine,smooth, full of flavour and just gets better year on year.</i><span
                                    class="fa fa-quote-right"></span></p>
                        <p><span class="fa fa-quote-left"></span><i>Beautiful. So humane.</i><span
                                    class="fa fa-quote-right"></span></p>
                        <p><a href="/season/2223/Programme-220924-MartinSimpson.pdf"
                              target="_blank">Concert programme</a>
                        </p>
                        <p>
                            <a href="https://martinsimpson.com/"
                               target="_blank">More about Martin Simpson</a>
                        </p>
                        <p>Martin has an extensive <a href="https://www.youtube.com/c/MartinSimpsonOfficial"
                                                      target="_blank">YouTube channel</a>. A <a
                                    href="https://www.youtube.com/watch?v=sVB2gEHGUZE"
                                    target="_blank">moving song</a>.</p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item-prev" id="LeonMcCawley">
                    <div class="col-sm-3">
                        <h3>Leon McCawley</h3>
                        <h4 class="text-info">
                            Sunday, 23<span class="subscript">rd</span> October 2022
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 2:45pm</p>-->
<!--                        <div id="buyticketleonmccawley">-->
<!--                            <a type="button" class="btn btn-info btn-blocks"-->
<!--                               href="https://www.wegottickets.com/event/559313/"-->
<!--                               target="_blank">Buy tickets</a>-->
<!--                            <p></p>-->
<!--                        </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2223/leonmccawley1-240.jpg"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Praised for his <i>unfailingly communicative playing</i>,
                            British pianist Leon McCawley has been delighting audiences worldwide since
                            winning first prize in the
                            1993 International Beethoven Piano Competition in Vienna and second prize at the
                            Leeds International
                            Piano Competition the same year.</p>
                        <p>His many concert performances and extensive discography have established him as a
                            pianist of great integrity and variety,
                            bringing freshness and vitality to Classical, Romantic and 20th century
                            repertoire.
                        </p>
                        <p>Bach, Beethoven, Mozart & Schubert (the late great Sonata D960).</p>
                        <p><span class="fa fa-quote-left"></span><i>One of today’s most impeccably musical
                                pianists</i><span
                                    class="fa fa-quote-right"></span>
                            – International Piano, 2021</p>
                        <p><span class="fa fa-quote-left"></span><i>tMcCawley’s sense of proportion and
                                architecture was peerless</i><span
                                    class="fa fa-quote-right"></span>
                            – Singapore Straits Times, 2022</p>
                        <p><a href="/season/2223/Programme-221023-LeonMcCawley.pdf"
                              target="_blank">Concert programme</a></p>
                        <p><a href="https://leonmccawley.com/"
                              target="_blank">More about Leon McCawley</a>
                        </p>
                        <p><a href="https://youtu.be/JQz_Y1f0JOg"
                              target="_blank">Hear him play</a></p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item-prev" id="ChoirDay">
                    <div class="col-sm-3">
                        <h3>Open Choir Day</h3>
                        <p class="specialhilite italic">Free of charge - all welcome</p>
                        <h4 class="text-info">
                            Sunday, 20<span class="subscript">th</span> November 2022
                        </h4>
                        <p>2:00pm (ends 5pm) Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <!--                            <p>Pre-concert performance from 7:15pm</p>-->
<!--                        <div id="registeropenchoirday">-->
<!--                            <a type="button" class="btn btn-info btn-blocks"-->
<!--                               href="https://www.wegottickets.com/event/559347"-->
<!--                               target="_blank">Register</a>-->
<!--                            <p></p>-->
<!--                        </div>-->
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
                            workshop led by expert tutor Verity Johnson to help bring it all together. At
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

                <li class="clearfix list-group-item dms-list-item-prev" id="ScottishClarinetChoir">
                    <div class="col-sm-3">
                        <h3>Scottish Clarinet Choir</h3>
                        <h4 class="text-info">
                            Sunday, 4<span class="subscript">th</span> December 2022
                        </h4>
                        <p>3:00pm Gibson Hall, Dollar <a
                                    href="https://www.google.co.uk/maps/place/Dollar+Academy/@56.1652588,-3.6761852,17z/data=!3m1!4b1!4m5!3m4!1s0x48862aa7490a4397:0x8adbca915a555cda!8m2!3d56.1652588!4d-3.6739965">FK14
                                7DU</a></p>
                        <p>Pre-concert performance from 2:45pm</p>
<!--                        <div id="buyticket-scottishclarinetchoir">-->
<!--                            <a type="button" class="btn btn-info btn-blocks"-->
<!--                               href="https://www.wegottickets.com/event/564640/"-->
<!--                               target="_blank">Buy tickets</a>-->
<!--                            <p></p>-->
<!--                        </div>-->
                    </div>
                    <div class="col-sm-3">
                        <img src="/image/2223/scottishclarinetchoir2-240.png"/>
                    </div>
                    <div class="col-sm-6">
                        <p>Not voices, but massed clarinets, of all shapes, sizes and tones!</p>
                        <p>Formed in 2019 by the ex-principal clarinet for RSNO and based in Dunblane,
                            the Choir has a mission to bring together professionals, amateurs, teachers and
                            students to celebrate
                            the glories of the clarinet family of instruments.</p>
                        <p>Their wide repertoire covers classics (Mozart), through to 20th century (Ravel,
                            Rachmaninov),
                            some local / contemporary names (Gordon Jacob, Paul Harvey, Carl Raven, Peter
                            Warlock and Eric Hughes),
                            including several world premieres.</p>
                        <!--                                    <p><span class="fa fa-quote-left"></span><i>Quote about scottish clarinet-->
                        <!--                                            choir</i><span-->
                        <!--                                                class="fa fa-quote-right"></span>-->
                        <!--                                        – xxx</p>-->
                        <!--                        <a href="/season/2223/Programme-221204-ScottishClarinetChoir.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <p><a href="https://www.scottishclarinetchoir.co.uk/"
                              target="_blank">More about Scottish Clarinet Choir</a>
                        </p>
                    </div>
                </li>

                <li class="clearfix list-group-item dms-list-item-prev" id="PianoDay">
                    <div class="col-sm-3">
                        <h3>Piano Day</h3>
                        <p class="specialhilite italic">Free of charge - all welcome</p>
                        <h4 class="text-info">
                            Sunday, 29<span class="subscript">th</span> January 2023
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
                            young
                            people again.</p>
                        <p>Come and join Juliette Philogene and Christopher Baxter in the wonderful setting
                            of Dollar
                            Academy,
                            for a day devoted to the joy of playing the piano.
                            Throughout the day there will be opportunities to perform and learn.
                            All abilities and ages from 5-19 are welcome – don't be shy.</p>
                        <p>Fresh interpretations, famous and not so famous pieces, and free!
                            No charge to enter as player or listener, so what better way to spend a Sunday
                            afternoon.</p>
                        <p>Refreshments will be provided.</p>
                        <p>For those who are too old to play, why not come along and hear musicians of the
                            future? It's
                            free, and should be a
                            varied and stimulating afternoon!</p>
                        <!--                        <a href="/season/2122/Programme-220130-PianoDay.pdf"-->
                        <!--                           target="_blank">Concert programme</a>-->
                        <!--                        </p>-->
                    </div>
                </li>

            </ul>
        </div>
    </div>

</div>

<?php require "footer.php"; ?>

</body>
</html>
