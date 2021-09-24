<!DOCTYPE html>
<html>
<?php
require "header.php";
$title = "About Dollar Music Society";
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
            <p>Dollar Music Society has been promoting music and the arts around
                Dollar, Clackmannanshire, Scotland, since 1965.</p>
            <p>We organise an annual series of concerts, featuring professional
                musicians and a wide range of musical styles. We also organise
                events such as excursions, one-off concerts and music competitions.</p>
            <p>For example, in 2013 we put on a concert for children, which was
                a huge sell-out hit. In 2015 we will pass the half century mark, so
                will be celebrating with some events - watch the news section!</p>
            <p>All events are open to anyone, so if a concert or other event
                appeals to you then please just turn up. If you like what we do
                then why not become a member? It only costs &#163;5 per year, and
                comes with benefits such as cheaper entry to concerts and priority
                booking for events.</p>
        </div>
    </div>

    <div id="Membership" class="row">
        <div class="col-sm-12">
            <h3>New membership scheme</h3>
            <p>We have a simple flat-rate membership.
                For only &#163;5 per year you get all of the benefits of being a
                member, including:
            <p>
            <ul>
                <li>Discount of 30&#37; on all concerts</li>
                <li>Priority booking for other events</li>
                <li>Free entry to the AGM concert</li>
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
                It is
                probably derived from the <a
                    href="http://en.wikipedia.org/wiki/Picts">Pictish</a> word <cite>dol</cite>,
                meaning <i>field</i>.
            </p>
            <p>
                The town is dominated by two iconic buildings. <a
                    href="https://en.wikipedia.org/wiki/Castle_Campbell">Castle
                    Campbell</a> sits high above the town at the head of Dollar Glen.
                It was the lowland seat of the <a href="https://en.wikipedia.org/wiki/Duke_of_Argyll">Duke of Argyll</a>. In
                recent times
                Dollar has been closely associated with <a href="http://dollaracademy.org/">Dollar Academy</a>, with its
                magnificent Greek influenced <a href="https://en.wikipedia.org/wiki/William_Henry_Playfair">Playfair</a>
                building.
            </p>
            <p>
                Read more about Dollar on <a
                    href="https://en.wikipedia.org/wiki/Dollar,_Clackmannanshire">Wikipedia</a>
                and <a href="https://www.dollarcommunity.org.uk/">Dollar Community</a>
            </p>
        </div>
        <div class="col-sm-6">
            <img src="image/dollarthumbs1-300.jpeg"/>
        </div>
    </div>

    <div id="Sponsors" class="row">
        <div class="col-sm-12">
            <h3>Sponsors</h3>
            <p>Thanks to our sponsors, who help to bring the best musicians to Dollar:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <p>
                <a href="https://www.chambermusicscotland.com/"><img
                        src="image/chamber-music-scotland-logo.svg"/>
            <p>Chamber Music Scotland</p></a>
            </p>
        </div>
        <div class="col-sm-4">
            <p>
                <a href="http://www.creativescotland.com"><img
                        src="image/Creative_Scotland_bw-sm.png"/>
            <p>Creative Scotland</p></a>
            </p>
        </div>
    </div>

    <?php require "footer.php"; ?>

</div>


</body>
</html>

