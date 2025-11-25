<!DOCTYPE html>
<html>
<?php
require "header.php";
$title = "About Music in Dollar";
htmlHead($title);
?>

<body>

<div class="container-fluid">
  <?php
  showHeaderBar("about");
  ?>

  <div class="row page-header">
    <div class="col-sm-12">
      <h2><?php echo $title; ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <p>Music in Dollar (formerly known as Dollar Music Society) has been promoting music and the arts around
        Dollar, Clackmannanshire, Scotland, since 1965.</p>
      <p>We organise an annual series of concerts, featuring professional
        musicians and a wide range of musical styles. We also run
        community events such as singing and piano performance by young people.
        Other event like music excursions, one-off concerts and music competitions are organised from time to
        time.</p>
      <p>For example, we put on a concert for children, which was
        a huge sell-out hit. Before most concerts we provide a platform for a student to perform.
        And our community events are always popular.</p>
      <p>All events are open to anyone, so if a concert or other event
        appeals to you then please just turn up. If you like what we do
        then why not become a member? It only costs &#163;5 per year, and
        comes with benefits such as cheaper entry to concerts and priority
        booking for events.</p>
    </div>
  </div>

  <div id="Membership" class="row">
    <div class="col-sm-12">
      <h3>Membership scheme</h3>
      <p>We have a simple flat-rate membership.
        For only &#163;5 per year you get all of the benefits of being a
        member, including:
      <p>
      <ul>
        <li>Discount of 33&#37; on all concerts</li>
        <li>Priority booking for other events</li>
        <li>Free entry to the Open Evening concert</li>
        <li>Satisfaction of supporting us to bring the best music to Dollar</li>
      </ul>
    </div>
  </div>

  <div id="Dollar" class="row">
    <div class="col-sm-6">
      <h3>Dollar</h3>
      <p>Dollar is a pretty town nestling under the Ochil hills in
        Clackmannanshire, Scotland. Population around 3000.
      </p>
      <p>
        The name Dollar has nothing to do with <a href="http://en.wikipedia.org/wiki/Dollar">money or silver</a>!
        It is probably derived from the <a
          href="http://en.wikipedia.org/wiki/Picts">Pictish</a> word <cite>dol</cite>,
        meaning <i>field</i>.
      </p>
      <p>
        The town is dominated by two iconic buildings.
        <a href="https://en.wikipedia.org/wiki/Castle_Campbell">Castle Campbell</a>
        sits high above the town at the head of Dollar Glen.
        It was the lowland seat of the <a href="https://en.wikipedia.org/wiki/Duke_of_Argyll">Duke of Argyll</a>.
        In recent times Dollar has been closely associated with
        <a href="http://dollaracademy.org/">Dollar Academy</a>, with its
        magnificent Greek influenced <a href="https://en.wikipedia.org/wiki/William_Henry_Playfair">Playfair</a>
        building.
      </p>
      <p>
        Read more about Dollar on
        <a href="https://en.wikipedia.org/wiki/Dollar,_Clackmannanshire">Wikipedia</a>
        and <a href="https://www.dollarcommunity.org.uk/">Dollar Community</a>
      </p>
    </div>
    <div class="col-sm-6">
      <img src="image/dollarthumbs1-300.jpeg" alt="Images of Dollar"/>
    </div>
  </div>

  <div id="SCOMS" class="row">
    <div class="col-sm-12">
      <h3>Scottish Consortium of Music Societies</h3>
      <p><a href="https://scoms.org.uk/" target="_blank"><img
            src="image/logo/SCOMSMemberLogo-2025-175.jpg" alt="SCOMS logo"/></a></p>
      <p>SCOMS is a charitable organisation
        which supports music societies around Scotland.
        Its mission is to "enrich the cultural life of Scotland" by:
      </p>
      <ul>
        <li>Encouraging collaboration and support among music societies.</li>
        <li>Advocating for the importance of live classical music in the community and in educational settings.</li>
      </ul>
    </div>
  </div>

  <div id="Sponsors" class="row">
    <div class="col-sm-12">
      <h3>Sponsors</h3>
      <p>Grateful thanks to our sponsors, who help to bring the best musicians to Dollar:</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <p>
        <a href="https://www.chambermusicscotland.com/" target="_blank"><img
            src="image/logo/chamber-music-scotland-logo.svg" alt="Chamber Music Scotland logo"/>
          <p>Chamber Music Scotland</p></a>
      </p>
    </div>
    <div class="col-sm-4">
      <p>
        <a href="http://www.creativescotland.com" target="_blank"><img
            src="image/logo/Creative_Scotland_bw-sm.png" alt="Creative Scotland logo"/>
          <p>Creative Scotland</p></a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <p>
        <a href="https://www.harperstone.co.uk/" target="_blank"><img
            src="image/logo/harper-stone.png" alt="Harper Stone logo" width="382"/>
          <p>Harper & Stone Estate & Letting Agents</p></a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <p>
        <a href="https://www.movingstillarchitecture.com/" target="_blank"><img
            src="image/logo/MovingStillArchitecture--logo.png" alt="Moving Still Architecture logo" width="257"/>
          <p>Moving Still Architecture</p></a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <p>
        <a href="https://jtrfitting.co.uk/" target="_blank"><img
            src="image/logo/jtrlogo.png" alt="JTR Fitting logo" width="240"/>
          <p>JTR Fitting - Kitchens and Bathrooms</p></a>
      </p>
    </div>
  </div>

  <?php require "footer.php"; ?>

</div>


</body>
</html>

