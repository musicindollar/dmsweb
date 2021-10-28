<!DOCTYPE html>
<html>
<?php
require "header.php";
$title = "Covid 19 Guidelines";
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
            <p>For everyone's safety and in line with current recommended practice for small public venues, Music in
                Dollar has put in place some Covid-19 precautions.
                We've tried to keep this simple and pragmatic, so we can stay safe and enjoy the concerts.</p>
            <ul>
                <li>We ask everyone to <b>sanitise</b> their hands when entering the concert venue.</li>
                <li>Note your name and phone number on the <b>Test and Protect</b> sheet. Only one person in each group
                    needs to do this.
                </li>
                <li>As with all indoor venues, please wear a <b>face mask</b> while moving around. It can be taken off
                    while seated.
                </li>
                <li>We don't operate an allocated seating policy, but instead ask groups to <b>sit together</b> and keep
                    a gap of 1-2 seats between yourselves and other groups. We have slightly rearranged the seating so
                    that there is an additional 'corridor' down the middle, to help avoid having to squeeze past others
                    while taking your seat.
                </li>
                <li>Drinks will be available during the interval, as usual. However, the lobby is quite narrow so a
                    <b>one-way system</b> will be operated. People should make their way to the South exit to the hall
                    (furthest away from the outside door). To make this easy to understand, posters will indicate which
                    way to move. Drinks will be sitting on a table in the lobby and can be picked up quickly. As always
                    donations are appreciated to cover the cost. Please take your drink back to your seat. Glasses can
                    be dropped off in the lobby when you leave at the end of the concert.
                </li>
                <li>We don't yet have a bank card reader and still rely on cash for entrance payment and drinks. Please
                    try to have the <b>correct change</b> available to avoid exchange of coins and notes.
                </li>
                <li>At the end of the concert, it's important that everyone <b>leaves in order</b>, to avoid a lot of
                    people bunched together in the lobby. We will ask that each row leaves in turn, starting from the
                    top of the hall, and going out through the marked door.
                </li>
            </ul>
        </div>
    </div>

    <div id="Membership" class="row">
        <div class="col-sm-12">
            <h3>Thanks</h3>
            <p>for your cooperation. Hopefully it will all be straightforward and we can relax and enjoy live
                music again!
            <p>
        </div>
    </div>

    <?php require "footer.php"; ?>

</div>


</body>
</html>

