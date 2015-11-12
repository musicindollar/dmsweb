<!DOCTYPE html>
<html>
<head>
<?php
require "header.php";
$title = "Music in Dollar";
htmlHead ( $title );
?>







<body>

	<div class="container-fluid">
<?php
showHeaderBar ( "index" );
?>

<div class="navbar navbar-nomargin well clearfix home-subheader">
			<div class="row">
				<div class="col-sm-12" style="">
					<img src="image/dollarthumbs2.jpeg" class="widthfull" />
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-info">Who are we?</h4>
						</div>
						<div class="panel-body">
							<p>Dollar Music Society is an independent organisation with a
								mission to promote music and the arts around Dollar,
								Clackmannanshire, Scotland.</p>
							<a type="button" class="btn btn-default btn-xs" href="about.php">read
								more</a>
						</div>
						<div class="panel-body">
							<p>
								Want to keep up with music in Dollar? Why not <a
									href="contact.php">sign up</a> for our mailing list. We won't
								swamp you with mail and you can unsubscribe at any time
							</p>
						</div>

					</div>
				</div>

				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="text-info">News</h4>
						</div>
						<div class="panel-body">
							<p>
								The <a href="#NextConcert">final concert</a> of the current
								season (2014-15) is on Thursday 21<span class="subscript">st</span>
								May, at 7:30pm. It will feature outstanding local talent, jazz
								pianist Fergus McCreadie. A short AGM will also be held. Note
								that venue is the Burnside Hall. Don&#39;t miss it.
							</p>
							<p>This year we are 50! To celebrate half a century of music in
								Dollar, we will hold some special events. Watch this space for
								details.</p>
							<p>
								<a href="/season/1516/season1516.php">Next season&#39;s programme</a>
								is released. Another varied and classy line-up, including jazz,
								chamber (with a twist), vocal and piano.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="WhatsOn" class="row">
			<div class="col-sm-6">
				<h2>2014-15 Season</h2>
			</div>
			<div class="col-sm-6 margintop10">
				<div class="panel panel-default">
					<div class="panel-body">
						<a href="season/1415/DMS-Leaflet-2014-15.pdf" target="_blank">View</a>
						the full programme for the current season [PDF 3.6Mb] <a
							href="season/1415/DMS-Leaflet-2014-15.pdf" target="_blank"><img
							src="image/pdf.jpeg" /></a>
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
							<h3>Fergus McCreadie and AGM</h3>
							<h4 class="text-info">
								Thursday, 21<span class="subscript">st</span> May 2015
							</h4>
							<p>
								7:30pm <b>Burnside Hall</b>, Dollar FK14 7AT
							</p>
						</div>
						<div class="col-sm-3">
							<img src="image/fergusmcc1.jpeg" />
						</div>
						<div class="col-sm-6">
							<p>Outstanding young local jazz pianist Fergus McCreadie will
								show us why he won young Scottish jazz musician two years
								running!</p>
							<p>A short AGM will accompany the recital.</p>
							<a href="http://www.fergusmccreadiejazzpiano.com/"
								target="_blank">More about Fergus McCreadie</a>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<!-- 		<div class="row"> -->
		<!-- 			<div class="col-sm-12"> -->
		<!-- 				<h3 class="text-info">Still to come</h3> -->
		<!-- 			</div> -->
		<!-- 		</div> -->
		<!-- 		<div class="row"> -->
		<!-- 			<div class="col-sm-12"> -->
		<!-- 				<ul class="list-group"> -->
		<!-- 				</ul> -->
		<!-- 			</div> -->
		<!-- 		</div> -->

		<div id="PrevConcert" class="row">
			<div class="col-sm-12">
				<h3 class="text-info">Previous concerts</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<ul class="list-group">
					<li class="clearfix list-group-item dms-list-item-prev">
						<div class="col-sm-3">
							<h3>RCS Brass Ensemble</h3>
							<h4 class="text-info">
								Saturday, 21<span class="subscript">st</span> March 2015
							</h4>
							<p>7:30pm Gibson Hall, Dollar FK7 1QW</p>
						</div>
						<div class="col-sm-3">
							<img src="image/brass-sm.jpeg" />
						</div>
						<div class="col-sm-6">
							<p>We are excited to present the cream of young Scottish brass
								musicians from the Royal Conservatoire of Scotland. The stars of
								the future are coming together to play a unique concert in
								Dollar.</p>
							<p>The programme will range widely, with music from Russia and
								Norway to Spain and Italy, including composers such as Bizet,
								Elgar and Dougie MacLean! Should be a night to remember.</p>
							<a href="http://www.rcs.ac.uk" target="_blank">More about the
								Royal Conservatoire of Scotland</a>
						</div>
					</li>

					<li class="clearfix list-group-item dms-list-item-prev">
						<div class="col-sm-3">
							<h3>The Whistlebinkies</h3>
							<h4 class="text-info">
								Saturday, 21<span class="subscript">st</span> February 2015
							</h4>
							<p>7:30pm Gibson Hall, Dollar FK7 1QW</p>
						</div>
						<div class="col-sm-3">
							<img src="image/binkies-on-stage-sm.jpg" />
						</div>
						<div class="col-sm-6">
							<p>For more than 40 years the Whistlebinkies have toured the
								world with their own brand of authentic Scottish traditional
								music.</p>
							<p>With a very wide ranging repertoire, based around (but never
								limited by) traditional themes and styles, the 'binkies have
								been a key part of the reinvention of traditional music for the
								modern age.</p>
							<a href="http://whistlebinkies.co.uk" target="_blank">More about
								The Whistlebinkies</a>
						</div>
					</li>

					<li
						class="clearfix list-group-item dms-list-item dms-list-item-prev">
						<div class="col-sm-3">
							<h3>Opera on a Shoestring</h3>
							<h4 class="text-info">
								Sunday, 18<span class="subscript">th</span> January 2015
							</h4>
							<p>2:00pm Gibson Hall, Dollar FK7 1QW</p>
							<p class="text-warning">
								<img src="image/warning24.png" /> Afternoon concert
							</p>
						</div>
						<div class="col-sm-3">
							<img src="image/operaonshoestring-sm.jpg" />
						</div>
						<div class="col-sm-6">
							<p>Opera On a Shoestring is a small, independent, professional
								company based in Glasgow, presenting high quality opera
								highlights on a smaller scale than the grand productions in
								major cities.</p>
							<p>With a long record of critical acclaim and delighted
								audiences, the group continues to perform to the highest
								standards.</p>
							<p>Featuring works by Bellini, Puccini, Britten, Offenbach,
								Mozart, Weber, Weill, Rossini,Wagner,Bizet, Handel, Delibes,
								Gershwin, there is literally something for everyone!</p>
							<a href="http://www.operaonashoestring.co.uk" target="_blank">More
								about Opera on a Shoestring</a>
						</div>
					</li>

					<li class="clearfix list-group-item dms-list-item-prev">
						<div class="col-sm-3">
							<h3>Edinburgh String Quartet</h3>
							<h4 class="text-info">
								Saturday, 15<span class="subscript">th</span> November 2014
							</h4>
							<p>7:30pm Gibson Hall, Dollar FK7 1QW</p>
						</div>
						<div class="col-sm-3">
							<img src="image/edinburghquartet-sm.jpeg" />
						</div>
						<div class="col-sm-6">
							<p>We are delighted to welcome the Edinburgh Quartet back to
								Dollar. It is a rare privilege to have such distinguished
								artistes playing for us.</p>
							<p>The Edinburgh Quartet has a long and colourful history as one
								of Britain&#39;s foremost chamber ensembles, having appeared
								regularly at prestigious venues across the UK and toured
								extensively across Europe, the Far and Middle East, and North
								and South America.</p>
							<p>The quartet will play Haydn Quartet Op 54 no.2, Debussy
								Quartet & Schumann Quartet No.3</p>
							<a href="http://www.edinburghquartet.com" target="_blank">More
								about Edinburgh String Quartet</a>
						</div>
					</li>

					<li class="clearfix list-group-item dms-list-item-prev">
						<div class="col-sm-3">
							<h3>Philip Contini</h3>
							<h4 class="text-info">
								Saturday, 11<span class="subscript">th</span> October 2014
							</h4>
							<p>7:30pm Gibson Hall, Dollar FK7 1QW</p>
						</div>
						<div class="col-sm-3">
							<img src="image/philipcontini-sm.jpeg" />
						</div>
						<div class="col-sm-6">
							<p>Philip will make you happy!</p>
							<p>He sings Italian and Neapolitan and American classics plus
								American songs from the likes of Cole Porter, Louis Prima and
								Dean Martin. He tells stories, in music and words, of
								sweethearts, broken hearts, love, loss and children, but the
								humour of life always shines through.</p>
							<p>The music is expertly arranged by Dick Lee and played by a
								stellar band of musical talents, all well known in Scottish
								musical circles.</p>
							<a
								href="http://www.enterprisemusicscotland.com/discover/tours-book/philip_contini_and_his_be_happy_band"
								target="_blank">More about Philip and his band</a>
						</div>
					</li>

				</ul>
			</div>
		</div>

<?php require "footer.php";?>
		
	</div>

</body>
</html>
