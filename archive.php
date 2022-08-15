<!DOCTYPE html>
<html>
<?php
require "header.php";
$title = "Previous Seasons";
htmlHead($title);
?>

<body>

<div class="container-fluid">
    <?php
    showHeaderBar("archive");
    ?>

    <div class="row page-header">
        <div class="col-sm-12">
            <h2><?php echo $title; ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h4>Select a season:</h4>
            <ul class="list-group">
                <li class="row list-group-item"><a
                            href="/season/2122/season2122.php">2021-22</a></li>
                <li class="row list-group-item"><a
                            href="/season/1920/season1920.php">2019-20</a></li>
                <li class="row list-group-item"><a
                            href="/season/1819/season1819.php">2018-19</a></li>
                <li class="row list-group-item"><a
                            href="/season/1718/season1718.php">2017-18</a></li>
                <li class="row list-group-item"><a
                            href="/season/1617/season1617.php">2016-17</a></li>
                <li class="row list-group-item"><a
                            href="/season/1516/season1516.php">2015-16</a></li>
                <li class="row list-group-item"><a
                            href="/season/1415/season1415.php">2014-15</a></li>
                <li class="row list-group-item"><a
                            href="/season/1314/season1314.php">2013-14</a></li>
                <li class="row list-group-item"><a
                            href="/season/1213/season1213.php">2012-13</a></li>
            </ul>
        </div>
    </div>

    <?php require "footer.php"; ?>
</div>

</div>

</body>
</html>

