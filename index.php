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
            <p><span class="fa fa-calendar"></span> The new season is unveiled! Another fantastic range of high quality musicians and styles.
            </p>
            <p><span class="fa fa-music"></span> Our next event is the Season Opener.
            Sticking with the successful format of last year, Dollar Academy students will play and sing for us in a variety of styles.
            This is a completely free community event, open to all.
            In the relaxed setting of the Captain's Room, Dollar Academy, come along and enjoy a drink of two of your choice while taking in some inspiring music.
            </p>
            <p><span class="fa fa-gbp"></span> We've had to increase some prices this season. Still the best value around, only &#163;7.50 per concert with a season ticket!
            </p>
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
      <h2 id="WhatsOn">2026-27 Season</h2>
    </div>
    <div class="col-sm-6 margintop10">
      <div class="panel panel-default">
        <div class="panel-body">
          <a href="season/2627/MiD-Leaflet-2026-27.pdf" target="_blank">View</a>
          the full programme for the current season [PDF 0.6MB]
          <a href="season/2627/MiD-Leaflet-2026-27.pdf" target="_blank"><img src="image/pdf.jpeg" alt="PDF icon"/></a>
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
              concert listing below, or at the door.
              We accept card and cash payments. Occasionally the card machine won't connect, so it's prudent to have some cash as a backup!
              Cost at the door for a single concert is &#163;14, students in full-time education admitted free of charge.</p>
            <p>Season Tickets provide entry to all concerts in the season. Cost is &#163;45, that's only &#163;7.50
              per concert, unbeatable value!
              Buy at the <a href="#SeasonOpener">Season Opener</a> (and get free complimentary tickets), on the door at a concert, or <a
                href="contact.php">contact us</a>.</p>
            <p>If you prefer to use a bank transfer, then <a href="contact.php">contact us</a> to request bank details.</p>
            <div id="buyseasonticket">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/f/27426" target="_blank">Buy season tickets
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

        <li class="clearfix list-group-item dms-list-item-next" id="SeasonOpener">
          <div class="col-sm-3">
            <h3>Season Opener - Music on Sunday Afternoon</h3>
            <p class="specialhilite italic">Free of charge - all welcome</p>
            <h4 class="text-info">Sunday, 13<span class="subscript">th</span> September 2026</h4>
            <p>3:00pm <a href="https://maps.app.goo.gl/qYBJHMSLHWBZufWM9">Maguire Building, Dollar Academy FK14 7DU</a></p>
          </div>
          <div class="col-sm-3">
            <img src="/image/2526/openafternoon-240.png" alt="Open afternoon picture"/>
          </div>
          <div class="col-sm-6">
            <p>We're repeating last year's successful format, of a relaxed community concert to open the new season.</p>
            <p>Combining music from Dollar Academy students in a variety of styles, there is a range of drinks with raffle, games and stalls.
              There will be something for everyone - enjoy music, wine, chat and games in a relaxed cabaret-style setting.
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
            <h4 class="text-info">Sunday, 27<span class="subscript">th</span> September 2026</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
          </div>
          <div class="col-sm-3">
            <img src="/image/2122/piano-keyboardangle-240.jpg" alt="Image of piano keyboard"/>
          </div>
          <div class="col-sm-6">
            <p>By popular demand, Music in Dollar are hosting another piano performance afternoon, <b>We Play Piano</b>.
              See the <a href="season/2324/WEPLAYPIANO-info.pdf" target="_blank">accompanying information</a>.
            </p>
            <p>This is an afternoon for young pianists ages 5-18, of all abilities and all styles,
              to play for family and friends, with a supportive and encouraging audience.
            </p>
            <p>It showcases young courageous pianists who are dedicated to performance.
              Skill levels range from intermediate to near-professional RCS students.
              Come and join us for what will be an inspirational afternoon of young talent!
            </p>
            <p>Refreshments will be provided.</p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="DanielCiobanu">
          <div class="col-sm-3">
            <h3>Daniel Ciobanu</h3>
            <h4 class="text-info">Saunday, 25<span class="subscript">th</span> October 2026</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--              <p>Pre-concert performance from 7:15pm</p>-->
            <div id="buyticket-danielciobanu">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/f/27425" target="_blank">Buy tickets
              </a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/1819/Daniel-Ciobanu-sm.jpg" alt="Image of Daniel Ciobanu"/>
          </div>
          <div class="col-sm-6">
            <p>The memory of Romanian pianist Daniel Ciobanu’s previous concert in Dollar is still vivid,
              in particular his epic, passionate performance of Pictures at an Exhibition.
              Since 2018 Daniel has developed into an established global star, with rave reviews for live performances,
              both solo and with orchestras, and recordings.
            </p>
            <p>He has played on many of the world's big stages, from Carnegie Hall New York, to Concertgebouw Amsterdam and KonzertHaus Berlin,
              and with some of the world's premier orchestras.</p>
            <p>Daniel retains a deep love of Scotland, where he trained,
              and we are privileged to have him play again for us in Dollar.
              His <i>l’enfant terrible</i> programme spans Bach, Mozart, Liszt, Prokofiev and more. Not to be missed!
            </p>
            <p><span class="fa fa-quote-left"></span><i>Ciobanu, the perfect pianist to pull of a work of astonishing energy and passion.
              To watch him in action is truly mesmerising, as he brings to life the pace and sheer aggression of the work
              [Prokofiev's 3rd Piano Concerto, with the Royal Philharmonic Orchestra] as it builds to a crashing finale.
              To then be treated to an amusing and varied performance, showcasing his range of talents to the full, was the icing on the cake.</i>
              <span class="fa fa-quote-right"></span> – Karl Hornsey
            </p>
            <p><span class="fa fa-quote-left"></span><i>The solo part was played by the phenomenal Romanian pianist Daniel Ciobanu
              with vitalism of his style, wonderful technique, the pouring, albeit controlled lyricism and a great sense of swing style.</i>
              <span class="fa fa-quote-right"></span> – Michael Klubinski - Beethoven Easter Festival Warsaw Philharmonic
            </p>
            <!--<p><a href="/season/2627/Programme-261025-DanielCiobanu.pdf" target="_blank">Concert programme</a></p> -->
            <p><a href="https://www.danielciobanu.com/" target="_blank">
               More about Daniel Ciobanu</a>
            </p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="TesseraStringQuartet">
          <div class="col-sm-3">
            <h3>Tessera String Quartet</h3>
            <h4 class="text-info">
              Sunday, 15<span class="subscript">th</span> November 2026
            </h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--              <p>Pre-concert performance from 2:45pm</p>-->
            <div id="buyticket-tesseraquartet">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/f/27428" target="_blank">Buy tickets
              </a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2627/tesseraquartet-1-sm.png" alt="Image of Tessera String Quartet"/>
          </div>
          <div class="col-sm-6">
            <p>Since 2025 the Tessera Quartet has been promoting the goal to make classical and chamber music more accessible, engaging, and personal.
              Comprising musicians from RCS and Northern College of Music, they have a shared passion for the living tradition of chamber music,
              while extending the boundaries of performance and repertoire. For example, concerts by candlelight!
            </p>
            <p>The varied programme will interweave favourites like Dvorak's “American” Quartet, with some hidden gems.
            </p>
            <p>The word <i>tessera</i> suggests a small piece within a larger mosaic.
            For the quartet, it reflects the way four individual musical voices come together to form something complete, detailed, and alive,
            making every performance a warm and engaging experience.
            </p>
            <!--<p><a href="/season/2627/Programme-261115-TesseraQuartet.pdf" target="_blank">Concert programme</a></p> -->
            <p><a href="https://tesseraquartet.co.uk/" target="_blank">
               More about Tessera Quartet</a>
            </p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="NewFocus">
          <div class="col-sm-3">
            <h3>New Focus</h3>
            <h4 class="text-info">Sunday, 10<span class="subscript">th</span> January 2027</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--              <p>Pre-concert performance from 2:45pm</p>-->
            <div id="buyticket-newfocus">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/f/27461" target="_blank">Buy tickets
              </a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2627/New-Focus-1-240.jpg" alt="Image of New Focus duo"/>
          </div>
          <div class="col-sm-6">
            <p>Award-winning piano-saxophone duo Euan Stevenson and Konrad Wiszniewski explore the relationship between classical music and jazz.
            </p>
            <p>Ranging from jazz improvisation on a Bach theme, to playing a Duke Ellington standard
              in the style of a Mozart sonata, each piece fascinates, delights and educates!
              Stevenson is a well established composer, performer and teacher (including our own Fergus McCreadie).
              Wiszniewski is one of the Scottish National Jazz Orchestra’s star soloists and twice winner of the Best Instrumentalist title at the Scottish Jazz Awards.
            </p>
            <p>With rave reviews from around Scotland, New Focus is forging a unique and imaginative sound.
            </p>
            <p><span class="fa fa-quote-left"></span><i>Concise, hauntingly original pieces</i>
              <span class="fa fa-quote-right"></span> – The Sunday Times</p>
            <p><span class="fa fa-quote-left"></span><i>It’s all about class and quality: Stevenson has a beautiful touch, caressing the keys Bill Evans-style but rhythmically perfect too…</i>
              <span class="fa fa-quote-right"></span> – Jazzwise Magazine</p>
             <!--<p><a href="/season/2526/Programme-270110-NewFocus.pdf" target="_blank">Concert programme</a></p> -->
            <p><a href="https://www.euanstevenson.com/new-focus" target="_blank">More about New Focus</a></p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="CromlitsLilt">
          <div class="col-sm-3">
            <h3>Cromlit's Lilt</h3>
            <h4 class="text-info">Sunday, 31<span class="subscript">st</span> January 2027</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--                        <p>Pre-concert performance from 2:50pm</p>-->
            <div id="buyticket-cromlitslilt">
              <a type="button" class="btn btn-info btn-blocks"
                 href="https://wegottickets.com/f/27469"
                 target="_blank">Buy tickets</a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2627/cromlitslilt-1-240.jpg" alt="Image of Cromlits Lilt group"/>
          </div>
          <div class="col-sm-6">
            <p>Cromlit’s Lilt is a unique Scottish ensemble dedicated to music of the baroque era,
              including Vivaldi, Handel, Bach and many superb but unjustly neglected Scottish composers
              such as Oswald, Erskine and McGibbon.
            </p>
            <p>The name <i>Cromlit's Lilt</i> comes from the slow air written by Scottish composer James Oswald, published in 1760.</p>
            <p><span class="fa fa-quote-left"></span><i>Rarely have I heard baroque masterpieces played with so much flair and enthusiasm</i>
              <!--<span class="fa fa-quote-right"></span> – xxx -->
            </p>
            <!--<p><a href="/season/2627/Programme-270131-CromlitsLilt.pdf" target="_blank">Concert programme</a></p> -->
            <p><a href="https://www.facebook.com/people/Cromlits-Lilt/100041636506213/" target="_blank">More about the Cromlit's Lilt</a></p>
          </div>
        </li>

<!--
        <li class="clearfix list-group-item dms-list-item" id="WePlayPiano2">
          <div class="col-sm-3">
            <h3>We Play Piano Feb 26</h3>
            <p class="specialhilite italic">Free of charge - all welcome</p>
            <h4 class="text-info">Sunday, 22<span class="subscript">nd</span> February 2026</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
          </div>
          <div class="col-sm-3">
            <img src="/image/2122/piano-keyboardangle-240.jpg" alt="Image of piano keyboard"/>
          </div>
          <div class="col-sm-6">
            <p>By popular demand, we have scheduled another piano performance afternoon, <b>We Play Piano</b>.
              See the <a href="season/2324/WEPLAYPIANO-info.pdf" target="_blank">accompanying information</a>.
            </p>
            <p>This is an afternoon for young pianists ages 5-18, of all abilities and all styles,
              to play for family and friends, with a supportive and encouraging audience.
            </p>
            <p>It showcases young courageous pianists who are dedicated to performance.
              Come and join us for what will be an inspirational afternoon of young talent!
            </p>
            <p>Several advanced students from the RCS are playing in this event. Hear the stars of the future!
            </p>
            <p>Refreshments will be provided.</p>
          </div>
        </li>
-->
        <li class="clearfix list-group-item dms-list-item" id="RogersHammerstein">
          <div class="col-sm-3">
            <h3>Celebrate! Rogers & Hammerstein</h3>
            <h4 class="text-info">Sunday, 21<span class="subscript">st</span> February 2027</h4>
            <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
            <!--            <p>Pre-concert performance from 2:45pm</p>-->
            <div id="buyticket-rogershammerstein">
              <a type="button" class="btn btn-info btn-blocks" href="https://wegottickets.com/f/27464"
                 target="_blank">Buy tickets
              </a>
              <p></p>
            </div>
          </div>
          <div class="col-sm-3">
            <img src="/image/2627/celebrate-rh-1.jpeg" alt="Image of Celebrate singers"/>
          </div>
          <div class="col-sm-6">
            <p>Come and hear the popular and uplifting music of Rogers and Hammerstein
              performed by classically trained professional singers, appearing in opera, chamber and ensemble vocal roles.
              Accompanied by ex-director of Scottish Opera Derek Clark, familiar from last season’s magnificent Night at the Opera.
            </p>
            <p>Prepare to be transported from the Alps (Sound of Music), to Oklahoma and the exotic South Pacific.
              Impossible to leave without a smile on your face!
            </p>
            <p><span class="fa fa-quote-left"></span>
              <i>Brilliant expressive musicians and a well crafted repertoire</i>
              <span class="fa fa-quote-right"></span> – Stranraer Music For All
            </p>
            <p><span class="fa fa-quote-left"></span>
              <i>Greatly enjoyed by the sell out audience</i>
              <span class="fa fa-quote-right"></span> – Westbourne Music Society
            </p>
            <p><span class="fa fa-quote-left"></span>
              <i>A sparkling concert.... which prompted rapturous applause</i>
              <span class="fa fa-quote-right"></span> – Isle of Bute News
            </p>
            <!--<p><a href="/season/2627/Programme-270221-RogersHammerstein.pdf" target="_blank">Concert programme</a></p> -->
            <p><a href="https://www.classicalmusiciansscotland.com/artists/celebrating-irving-berlin/" target="_blank">More about Celebrate!</a></p>
          </div>
        </li>

        <li class="clearfix list-group-item dms-list-item" id="Dauntless">
            <div class="col-sm-3">
                <h3>Dauntless</h3>
                <h4 class="text-info">Sunday, 14<span class="subscript">th</span> March 2027</h4>
                <p>3:00pm Gibson Hall, Dollar <a href="https://maps.app.goo.gl/ZGZdA8GLVcdQeRT79">FK14 7DU</a></p>
                <!--<p>Pre-concert performance from 2:45pm</p>-->
                <div id="buyticket-dauntless">
                  <a type="button" class="btn btn-info btn-blocks"
                     href="https://wegottickets.com/f/27465" target="_blank">Buy tickets</a>
                  <p></p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="/image/2627/dauntless-4-240.jpg" alt="Image of Dauntless band"/>
            </div>
            <div class="col-sm-6">
                <p>Dauntless are a Scottish traditional music trio, winners of the Battle of the Folk Bands at Celtic Connections 2025.
                  They combine 18th-century fiddle music with original compositions to create a unique listening experience.
                  Their repertoire ranges from energetic foot-stomping tunes to thoughtful, melodic pieces that will enchant any audience.
                </p>
                <p>The Trio's name comes from their approach - blending older traditional tunes and forms and contemporary arrangements without fear!
                </p>
                <p>Featuring fiddle, cello, bodhran & octave-mandolin, their programmes dig deep into the rich history of Scottish Music, alongside their own work.
                </p>
                <!--<p><a href="/season/2627/Programme-270314-Dauntless.pdf" target="_blank">Concert programme</a></p> -->
                <p><a href="https://www.facebook.com/people/Dauntless-Band/61568350988319/" target="_blank">More about Dauntless Trio</a></p>
                <p><a href="https://dauntlesstrad.bandcamp.com/track/corrie-man" target="_blank">Listen to Dauntless Trio reinterpret a traditional tune in 7/8 time!</a></p>
            </div>
        </li>

      </ul>
    </div>
  </div>

<!--
  <div id="PrevConcert" class="row">
    <div class="col-sm-12">
      <h3 class="text-info">Previous concerts</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <ul class="list-group">

      </ul>
    </div>
  </div>
-->
</div>

<?php require "footer.php"; ?>

</body>
</html>
