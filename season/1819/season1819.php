<!DOCTYPE html>
<html>
<?php
require "../../header.php";
$title = "Previous season archive: 2018-19";
htmlHead($title);
?>

<body>

<div class="container-fluid">
    <?php
    showHeaderBar("archive1718");
    ?>

    <div class="row page-header">
        <div class="col-sm-12">
            <h2><?php echo $title; ?></h2>
        </div>
    </div>

    <div class="row page-header">
        <div class="col-sm-12">
            <a href="DMS-Leaflet-2017-18.pdf" target="_blank">View</a>
            the full programme for the current season [PDF XXX.XMb] <a
                    href="DMS-Leaflet-2017-18.pdf" target="_blank"><img
                        src="../../image/pdf.jpeg"/></a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">


            </ul>
        </div>

    </div>

    <?php require "../../footer.php"; ?>

</div>


</body>
</html>

