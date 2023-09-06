<?php
function showHeaderBar($tag)
{
// 	print "tag [" . $tag . "]";
    ?>

    <div class="navbar navbar-inverse navbar-nomargin navbar-squarebottom">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php"><img
                        src="/image/dmslogo-oval-trans-48.png" style="padding-right: 5px;"/>
                Music in Dollar </a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php if ($tag == "whatson") echo "active"; ?>"><a
                            href="/index.php#WhatsOn">What&#39;s on</a></li>
                <li class="<?php if ($tag == "about") echo "active"; ?>"><a
                            href="/about.php">About</a></li>
                <li class="dropdown <?php if ($tag == "archive") echo "active"; ?>"><a
                            href="/archive.php" class="dropdown-toggle" data-toggle="dropdown">Archive
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?php if ($tag == "archive2223") echo "active"; ?>"><a
                                    href="/season/2223/season2223.php">Season 2022-23</a></li>
                        <li class="<?php if ($tag == "archive2122") echo "active"; ?>"><a
                                    href="/season/2122/season2122.php">Season 2021-22</a></li>
                        <li class="<?php if ($tag == "archive1920") echo "active"; ?>"><a
                                    href="/season/1920/season1920.php">Season 2019-20</a></li>
                        <li class="<?php if ($tag == "archive1819") echo "active"; ?>"><a
                                    href="/season/1819/season1819.php">Season 2018-19</a></li>
                        <li class="<?php if ($tag == "archive1718") echo "active"; ?>"><a
                                    href="/season/1718/season1718.php">Season 2017-18</a></li>
                        <li class="<?php if ($tag == "archive1617") echo "active"; ?>"><a
                                    href="/season/1617/season1617.php">Season 2016-17</a></li>
                        <li class="<?php if ($tag == "archive1516") echo "active"; ?>"><a
                                    href="/season/1516/season1516.php">Season 2015-16</a></li>
                        <li class="<?php if ($tag == "archive1415") echo "active"; ?>"><a
                                    href="/season/1415/season1415.php">Season 2014-15</a></li>
                        <li class="<?php if ($tag == "archive1314") echo "active"; ?>"><a
                                    href="/season/1314/season1314.php">Season 2013-14</a></li>
                        <li class="<?php if ($tag == "archive1213") echo "active"; ?>"><a
                                    href="/season/1213/season1213.php">Season 2012-13</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php if ($tag == "blogs") echo "active"; ?>"><a
                            href="/blogs.php" class="dropdown-toggle" data-toggle="dropdown">Blogs
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="disabled <?php if ($tag == "blog1") echo "active"; ?>"><a
                                    href="#">Concert Reviews</a></li>
                        <li class="disabled <?php if ($tag == "blog2") echo "active"; ?>"><a
                                    href="#">Ochil echoes</a></li>
                    </ul>
                </li>
                <li class="<?php if ($tag == "contact") echo "active"; ?>"><a
                            href="/contact.php">Contact</a></li>
            </ul>

            <a class="btn btn-small btn-facebook navbar-right navbar-centred"
               href="https://www.facebook.com/MusicInDollar" target="_blank"> <i
                        class="fa fa-facebook"></i>
            </a>
        </div>
    </div>

    <?php
}

function htmlHead($title)
{
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <meta name="Description" content="Promoting and encouraging music in Dollar, Scotland."/>

        <link rel="stylesheet" type="text/css"
              href="/assets/components/themebootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="/css/dms.css"/>
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="/css/social-buttons.css"/>

        <script src="/assets/components/jquery/jquery-1.11.1.min.js"></script>
        <script src="/assets/components/themebootstrap/js/bootstrap.min.js"></script>
        <script src="/js/dms.js"></script>
    </head>
    <?php
}

?>
