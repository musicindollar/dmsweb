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
        <img src="image/dollarthumbs2.jpeg" class="widthfull" alt="collage"/>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="text-info">News</h4>
          </div>
          <div class="panel-body">
            <p></p>
            <!--                        <p><img src="image/2324/harvest-sm.png"></img> Tony Baldwin <a href="season/2324/Harvest 1_10_23.pdf" target="_blank">will perform an organ recital in Dollar Parish Church</a> on Sunday 1st October, as part of the Celebration of Harvest.-->
            <!--                        </p>-->
            <!--                        <p><span class="fa fa-thumbs-o-up"></span> Well done to all students who took part in the Piano Day! A great variety of pieces and styles, and very enjoyable afternoon.-->
            <!--                        </p>-->
            <!--                        <p><span class="fa fa-user"></span> Come and Sing was great fun!-->
            <!--                            Led by the warm, engaging and amazing voice of expert tutor Brian McBride, we learned to sing a couple of musical theatre songs:-->
            <!--                            Age of Aquarius and Good Morning Baltimore.-->
            <!--                        </p>-->
            <!--                        <p><span class="fa fa-coffee"></span> The annual Coffee Morning is planned for Saturday 21st-->
            <!--                            September @10:00, in the Burnside Hall as usual.-->
            <!--                            This is our usual season opener and a great way to sample sounds from the season's artists-->
            <!--                            alongside home baking, games and chat.-->
            <!--                            Come along and hear what's upcoming!-->
            <!--                            Free complimentary tickets given for all Season Tickets bought before the opening concert,-->
            <!--                            so treat friends and family to a free concert.-->
            <!--                        </p>-->
            <p><span class="fa fa-heart"></span> <a href="#NightAtTheOpera">A Night At The
                Opera</a> was a fantastic event, as expected. The large audience was transfixed by the beautiful, sometime heart-rending performance.
              With a dash of humour too!
            </p>
            <p><span class="fa fa-music"></span> Our next event is the <a href="#ChineseOrchestra">Chinese Ensemble</a>.
              Reports from previous performances have been very positive, with accessible, enjoyable music and
              expert musicianship.
              To encourage everyone to come along any enjoy this, we have made it free to all!
            </p>
            <!--                        <p><span class="fa fa-smile-o"></span> <a href="#ComeAndSing">Come And Sing</a> was a lot of fun,-->
            <!--                            with Brian McBride irrepressible as ever.-->
            <!--                            This time the focus was on pop songs, about hope and love! What better message for today's-->
            <!--                            world.-->
            <!--                        </p>-->
            <!--                        <p><span class="fa fa-heart"></span> The Eilidh Grant Trio were a treat.-->
            <!--                            Eilidh was in fine voice and those reels really rocked, with heavy-metal bouzouki!-->
            <!--                        </p>-->
            <p><span class="fa fa-ticket"></span> Ticket prices have been held the same as last season.
              You won't find the highest quality professional music cheaper anywhere!
            </p>
            <!--                        <p><span class="fa fa-star"></span> The next <a href="image/2425/LetsPlayMusic-Sep24.jpg" target="_blank">Let's Play Music</a>-->
            <!--                            event will be in Dollar Parish Church on 8th September @ 3pm. Always a great event, showcasing local musical talent!-->
            <!--                        </p>-->

            <!--                        <p><span class="fa fa-cc-discover"></span> We're busy preparing for next season - watch this space for announcements!-->
            <!--                        </p>-->
            <!--                        <p><span class="fa fa-calendar"></span> Renowned violinist <a href="https://en.wikipedia.org/wiki/Rachel_Podger" target="_blank">Rachel Podger</a> <a-->
            <!--                                    href="https://www.perththeatreandconcerthall.com/whats-on/rachel-podger-218002" target="_blank">will perform in Perth</a> on Tuesday 28th Feb, 7:30pm, in the beautiful St John's Kirk.-->
            <!--                            Music in Dollar members get in for reduced rates of &#163;10-->
            <!--                        </p>-->
            <p><span class="fa fa-envelope-o">&nbsp;</span> Like something, got a suggestion? Please <a
                href="contact.php">drop us a note online</a>, or on
              <a href="https://www.facebook.com/MusicInDollar" target="_blank">Facebook</a>
              <!--                  <a href="https://twitter.com/MusicInDollar" target="_blank">Twitter</a>.</p>-->
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
            <p>Music in Dollar is an <a href="about.php">independent organisation</a> with a
              mission to promote music and the arts around Dollar, Clackmannanshire, Scotland.</p>
            <a type="button" class="btn btn-default btn-xs" href="about.php">read more</a>
          </div>
          <div class="panel-body">
            <p>
              <span class="fa fa-envelope"></span> Want to keep up with music in Dollar? Why not <a
                href="contact.php">sign up</a> for our mailing list. We won't
              swamp you with mail, and you can unsubscribe at any time
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="WhatsOnWrapper" class="row">
    <div class="col-sm-6">
      <h2 id="WhatsOn">2025-26 Season</h2>
    </div>
    <div class="col-sm-6 margintop10">
      <div class="panel panel-default">
        <div class="panel-body">
          <a href="season/2526/MiD-Leaflet-2025-26.pdf" target="_blank">View</a>
          the full programme for the current season [PDF 0.6MB]
          <a href="season/2526/MiD-Leaflet-2025-26.pdf" target="_blank"><img src="image/pdf.jpeg" alt="PDF icon"/></a>
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
              concert listing below, or at the door
              (we have a card machine, but it doesn't always work so best to have some cash as backup).
              Cost is &#163;12, students in full-time education admitted free of charge.</p>
            <p>Season Tickets provide entry to all concerts in the season. Cost is &#163;40. That's less than &#163;7
              per concert, unbeatable value!</p>
            <p>Choose how you'd like to pay: online using the button below, buy at the door (card or cash),
              or <a href="contact.php">contact us</a> to request bank transfer details.</p>
            <div id="buyseasonticket">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/event/675529/" target="_blank">Buy season tickets
              </a>
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

        <li class="clearfix list-group-item dms-list-item-next" id="ChineseOrchestra">
          <div class="col-sm-3">
            <h3>Chinese Ensemble</h3>
            <p class="specialhilite italic">Free of charge - all welcome</p>
            <h4 class="text-info">
              Sunday, 2<span class="subscript">nd</span> November 2025
            </h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--              <p>Pre-concert performance from 2:45pm</p>-->
<!--            <div id="buyticket-chineseorchestra">-->
<!--              <a type="button" class="btn btn-info btn-blocks"-->
<!--                 href="https://wegottickets.com/event/675532/" target="_blank">Buy tickets-->
<!--              </a>-->
<!--              <p></p>-->
<!--            </div>-->
          </div>
          <div class="col-sm-3">
            <img src="/image/2526/ChineseOrchestra-Pipa2-240.jpg" alt="Night at the Opera picture"/>
          </div>
          <div class="col-sm-6">
            <p>And now for something a little different! The Edinburgh Chinese Community Orchestra (aka Harmony Ensemble)
              was established 25 years ago as a group of local musicians and visiting students who love performing
              Chinese music.
            </p>
            <p>They perform at many events throughout Scotland, often representing the Chinese Community at traditional
              celebrations, bringing Chinese music to a wider community.
            </p>
            <p>For our performance, the ensemble will comprise Li Rong Rong and Eddie McGuire (of Whistlebinkies fame,
              and a prominent composer) who introduces the pieces. They have lined up a magical programme of Chinese music
              in various styles.</p>
            <p>This is an informal event, where the audience are invited to touch and play the instruments and chat
              to the performers.
            </p>
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

        <li class="clearfix list-group-item dms-list-item" id="WePlayPiano1">
          <div class="col-sm-3">
            <h3>We Play Piano</h3>
            <p class="specialhilite italic">Free of charge - all welcome</p>
            <h4 class="text-info">Sunday, 9<span class="subscript">th</span> November 2025</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
          </div>
          <div class="col-sm-3">
            <img src="/image/2122/piano-keyboardangle-240.jpg" alt="Image of piano keyboard"/>
          </div>
          <div class="col-sm-6">
            <p>Music in Dollar are hosting another piano performance afternoon, <b>We Play Piano</b>.
              See the <a href="season/2324/WEPLAYPIANO-info.pdf" target="_blank">accompanying information</a>.
            </p>
            <p>This is an afternoon for young pianists ages 5-18, of all abilities and all styles,
              to play for family and friends, with a supportive and encouraging audience.
            </p>
            <p>It showcases young courageous pianists who are dedicated to performance.
              Come and join us for what will be an inspirational afternoon of young talent!
            </p>
            <p>Refreshments will be provided.</p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="TimKliphuis">
          <div class="col-sm-3">
            <h3>Tim Kliphuis Trio</h3>
            <h4 class="text-info">Sunday, 23<span class="subscript">rd</span> November 2025</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--              <p>Pre-concert performance from 2:45pm</p>-->
            <div id="buyticket-timkliphuis">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/event/675534/" target="_blank">Buy tickets
              </a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2526/TimKliphuis-Silhouette-240.jpg" alt="Image of Tim Kliphuis"/>
          </div>
          <div class="col-sm-6">
            <p>Award-winning Dutch violinist Tim Kliphuis has created a brand new style that
              embraces classical, gypsy jazz and folk. Hailed as a ‘current-day improvising
              Paganini’, his inclusive and innovative approach to music has united audiences
              and is influencing a new generation of string players.
            </p>
            <p>An invitation to the Richard Strauss Festival in Germany started the Tim Kliphuis Trio (Nigel
              Clark, guitar and Roy Percy, double bass) whose mission is a ‘total music’ without stylistic barriers.
              They performed at the Amsterdam Canal Concert, curated the world fiddle night at Celtic Connections
              Glasgow, celebrated Stéphane Grappelli at the Django Reinhardt Festival in Samois-sur-Seine.
            </p>
            <p>Many collaborations and tours later, we are thrilled that artists of this international stature will play for us
              in Dollar.
            </p>
            <p><span class="fa fa-quote-left"></span><i>Superb ... a thoughtful, provocative meeting of minds</i>
              <span class="fa fa-quote-right"></span> – The Sunday Times</p>
            <p><span class="fa fa-quote-left"></span><i>Playfully inventive and technically brilliant</i>
              <span class="fa fa-quote-right"></span> – Time Out</p>
            <!-- <p><a href="/season/2526/Programme-251123-TimKliphuisTrio" target="_blank">Concert programme</a></p>-->
            <p><a href="https://timkliphuis.com/" target="_blank">More about Tim Kliphuis</a></p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="ChloePianoTrio">
          <div class="col-sm-3">
            <h3>Chloe Piano Trio</h3>
            <h4 class="text-info">Saturday, 24<span class="subscript">th</span> January 2026</h4>
            <p>7:30pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--                        <p>Pre-concert performance from 7:15pm</p>-->
            <div id="buyticket-chloepianotrio">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/event/678365/"
                 target="_blank">Buy tickets</a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2526/Chloe%20Piano%20Trio-240.jpg" alt="Chloe Piano Trio picture"/>
          </div>
          <div class="col-sm-6">
            <p>The Chloé Piano Trio, winners of the Royal Philharmonic Society Henderson
              Prize 2021, was formed in 2017 by talented emerging musicians at the Royal
              College of Music, London. They come to Dollar as Tunnell Prize winners, with a
              programme of Mozart, Dvorak, Weir and Ravel.
            </p>
            <p><span class="fa fa-quote-left"></span><i>Few young groups play with as much personality as the Chloé Piano Trio</i>
              <span class="fa fa-quote-right"></span> – Keith Bruce, Vox Carnyx
            </p>
            <p><span class="fa fa-quote-left"></span><i>An outstanding ensemble, with very high
                standard of playing, bringing together three top-rate instrumentalists and equally sensitive,
                intelligent and dedicated musicians ...probing interpretations of not only mainstream repertoire,
                but also of lesser known works which deserve more recognition</i>
              <span class="fa fa-quote-right"></span> – Ulrich Koella, Ticino Musica Festival
            </p>
            <!-- <p><a href="/season/2526/Programme-260124-ChloePianoTrio.pdf" target="_blank">Concert programme</a></p>-->
            <p><a href="https://chloepianotrio.com/" target="_blank">More about the Chloe Piano Trio</a></p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="ComeAndSing">
          <div class="col-sm-3">
            <h3>Come and Sing!</h3>
            <p class="specialhilite italic">Free of charge - all welcome</p>
            <h4 class="text-info">Sunday 1<span class="subscript">st</span> February 2026</h4>
            <p>2:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!-- <div id="registeropenchoirday">-->
            <!--   <a type="button" class="btn btn-info btn-blocks"-->
            <!--     href="https://wegottickets.com/event/xxx/"-->
            <!--     target="_blank">Register</a>-->
            <!--   <p></p>-->
            <!-- </div>-->
          </div>
          <div class="col-sm-3">
            <img src="/image/2223/choir-cartoon-240.jpeg" alt="Choir image"/>
          </div>
          <div class="col-sm-6">
            <p>There's no better way to feel good than to sing! Music in Dollar has organised a
              day when you can do just that – with some expert tuition along the way.
              Singing doesn't require an instrument – it's you! Everyone can do it, so why not
              come along and have some fun.
            </p>
            <p>The format will be to learn a few songs (popular, folk, classical), with a vocal
              workshop led by expert tutor Brian McBride to help bring it all together. Theme TBD.
              At the end the 'choir' will perform the songs for anyone who wants to come along and listen.
            </p>
            <p>This is a community event, all are welcome at no cost. Bring along friends and family, anyone who is interested
              to either sing themselves or listen to others.
            </p>
            <p>Water will be provided. Bring along any other edibles to keep you going. A pencil
              might also be handy for taking notes.
            </p>
            <p>If you'd like to come along then registering using the button on the left will help us
              to prepare for the right number of people.
            </p>
            <p>Those who don't fancy singing can still enjoy the sounds of those that do. It's worthwhile just to hear Brian
              singing all the parts!</p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="JiaNingNg">
          <div class="col-sm-3">
            <h3>Jia Ning Ng</h3>
            <h4 class="text-info">Sunday, 1<span class="subscript">st</span> March 2026</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--            <p>Pre-concert performance from 2:45pm</p>-->
            <div id="buyticket-jianingng">
              <a type="button" class="btn btn-info btn-blocks" href="https://wegottickets.com/event/678367/"
                 target="_blank">Buy tickets
              </a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2425/JiaNingNg-1-240.jpg" alt="Image of Jia Ning Ng"/>
          </div>
          <div class="col-sm-6">
            <p>Singaporean pianist Jia Ning Ng has recently graduated from the Royal Conservatoire of
              Scotland where, in addition to gaining B.Mus., M.Mus. and Artist Diploma, she won many prestigious awards.
              In April 2022, she made her debut with the RSNO, for which she was awarded First Prize in
              the RCS Concerto Competition. Jia Ning is also an active chamber musician, being particularly
              drawn to Lieder, and has also collaborated with the Resol String Quartet
            </p>
            <p>Since graduating Jia has played throughout Scotland to rave reviews (and standing ovations).
              This was originally programmed for last season, but delayed for family reasons. We are delighted that we
              were able to reschedule what should be a fabulous concert.
            </p>
            <p><span class="fa fa-quote-left"></span>
              <i>From the imposing opening solo piano passage through the technical middle
                sections, Ng played with an admirable blend of sensitivity and musical understanding</i>
              <span class="fa fa-quote-right"></span> – Straits Times
            </p>
            <p><span class="fa fa-quote-left"></span>
              <i>Ng was clearly alive to all the nuances of Schubert’s famously illustrative accompaniments
                whether turning the great Steinway into a gently plucked lute or rippling seamlessly
                as the flowers swayed in the breeze</i>
              <span class="fa fa-quote-right"></span> – Oxford Lieder Festival
            </p>
            <!-- <p><a href="/season/2425/Programme-250302-JiaNingNg" target="_blank">Concert programme</a></p>-->
            <p><a href="https://oxfordsong.org/artist/jia-ning-ng" target="_blank">More about Jia Ning Ng</a></p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="CharlotteRowan">
          <div class="col-sm-3">
            <h3>Charlotte Rowan</h3>
            <h4 class="text-info">Sunday, 15<span class="subscript">th</span> March 2026</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--              <p>Pre-concert performance from 2:45pm</p>-->
            <div id="buyticket-charlotterowan">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/event/678373/" target="_blank">Buy tickets</a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2526/charlotte01-sm.jpg" alt="Charlotte Rowan picture"/>
          </div>
          <div class="col-sm-6">
            <p>From an early age, local lass Rowan (who attended Dollar Academy) has been captivating audiences with her dazzling
              virtuosity, commanding stage presence and imaginative spirit.
            </p>
            <p>Since graduating in 2012 from Peabody Conservatory of Music, USA, she has launched a career as a solo performer,
              and as a duo with long-established partner Charlotte Stevenson.
            </p>
            <p>She last played at Dollar in 2020, and the memory of that powerful and passionate performance lingers.
              We are very much looking forward to her return to Dollar!
            </p>
            <p><span class="fa fa-quote-left"></span>
              <i>A breathtaking recital. I was advised to get my programme signed for posterity, and wish I had</i>
              <span class="fa fa-quote-right"></span> – Stirling
            </p>
            <p><span class="fa fa-quote-left"></span>
              <i>The sheer virtuosity of her playing - speed, range of technique, mood - was amazing. You truly gave us a concert to
                remember. Such an amazing performance</i>
              <span class="fa fa-quote-right"></span> – Crail</p>
            <!-- <p><a href="/season/2526/Programme-260315-CharlotteRowan.pdf" target="_blank">Concert programme</a></p>-->
            <p><a href="https://charlotterowan.com/" target="_blank">More about Charlotte Rowan</a></p>
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
        <li class="clearfix list-group-item dms-list-item-prev" id="OpenAfternoon">
          <div class="col-sm-3">
            <h3>Season Opener - Music on Sunday Afternoon</h3>
            <p class="specialhilite italic">Free of charge - all welcome</p>
            <h4 class="text-info">Sunday, 14<span class="subscript">th</span> September 2025</h4>
            <p>3:00pm <a href="https://maps.app.goo.gl/qYBJHMSLHWBZufWM9">Maguire Building, Dollar Academy FK14 7DU</a></p>
          </div>
          <div class="col-sm-3">
            <img src="/image/2526/openafternoon-240.png" alt="Open afternoon picture"/>
          </div>
          <div class="col-sm-6">
            <p>In a change of format, our event to open the new season is an afternoon of live music.</p>
            <p>Combining the informality of the Open Evening, with raffle, games and stalls from the Coffee Morning and
              two halves of live music of varying styles, courtesy of talented students. There is something for everyone -
              enjoy music, wine, chat and games in a relaxed cabaret-style setting.
            </p>
            <p>Drinks and refreshments are supplied. Come along, bring your friends, enjoy!</p>
            <p>Season and Basic memberships will be on sale. As a bonus for buying early and beating the rush at the first
              concert, every Season membership comes with free complimentary tickets. Treat your friends and family!
            </p>
            <p><i>Note that this is in the Maguire Building, Dollar Academy, not the usual Gibson Hall where we stage concerts.
                It is a magnificent modern building (2005) in the grounds of Dollar Academy,
                around 200 yards from the main school building (<a href="https://maps.app.goo.gl/qYBJHMSLHWBZufWM9">link to
                  map</a>), and close to the sports pavilion. Signs directing you to it will be in place.</i></p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item-prev" id="NightAtTheOpera">
          <div class="col-sm-3">
            <h3>A Night At The Opera</h3>
            <h4 class="text-info">Saturday, 18<span class="subscript">th</span> October 2025</h4>
            <p>7:30pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--              <p>Pre-concert performance from 7:15pm</p>-->
<!--            <div id="buyticket-nightattheopera">-->
<!--              <a type="button" class="btn btn-info btn-blocks"-->
<!--                 href="https://wegottickets.com/event/675530/" target="_blank">Buy tickets-->
<!--              </a>-->
<!--              <p></p>-->
<!--            </div>-->
          </div>
          <div class="col-sm-3">
            <img src="/image/2526/NightAtTheOpera-1-240.jpg" alt="Night at the Opera picture"/>
          </div>
          <div class="col-sm-6">
            <p>Defying conventional beliefs that the opera can only be played in huge city
              venues, we’re bringing it to Dollar! Cut-down in size but not in quality, A Night at
              the Opera comprises four singers, eleven instruments, conductor and compère!
            </p>
            <p>Programmes are packed with favourite operatic melodies, including pieces to
              delight both the musical connoisseur and the less operatically minded. Homage is
              paid to giants of the genre such as Bizet, Delibes, Donizetti, Mozart, Offenbach,
              Puccini, Saint-Saens, J Strauss and Verdi, sometimes with a nod to Lehar and Gilbert and
              Sullivan. Each item is introduced with full musical and character explanation.
            </p>
            <p>A surprise or two may also be in store!</p>
            <p><span class="fa fa-quote-left"></span><i>"Fabulous performance! What a wonderful evening! Sublime singing, all accompanied
                by a magnificent orchestra. An absolute joy from start to finish!"</i>
              <span class="fa fa-quote-right"></span> – Lanark Music
            </p>
             <p><a href="/season/2526/Programme-251018-NightAtTheOpera.pdf" target="_blank">Concert programme</a></p>
            <p><a href="https://www.classicalmusiciansscotland.com/artists/opera-gala/" target="_blank">
               More about A Night at the Opera</a>
            </p>
          </div>
        </li>

      </ul>
    </div>
  </div>

</div>

<?php require "footer.php"; ?>

</body>
</html>
