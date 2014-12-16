<!DOCTYPE html>
<html>
<?php
require "header.php";
$title = "Contact Music in Dollar";
htmlHead ( $title );
?>

<body>

	<div class="container-fluid">
<?php
showHeaderBar ( "contact" );
?>

	<div class="row page-header">
			<div class="col-sm-12">
				<h2><?php echo $title;?></h2>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<p>We'd love to hear from you, whether it's a suggestion, request
					for information, membership application, or just a comment.</p>
				<p>Either send us an email, or fill in the form and we'll get back
					to you.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<p>
							Send mail to: <span class="text-info">info (at) musicindollar
								(dot) org (dot) uk</span>
						</p>
						<p class="text-warning text-sm">Make sure to replace text in
							brackets () with the appropriate symbol and remove spaces</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="well">
					<form id="contactForm" class="bs-example form-horizontal"
						action="contactform.php">
						<fieldset>
							<legend>Ask a question or give feedback</legend>
							<div class="form-group">
								<div class="col-sm-12">
									<label for="inputName" class="control-label">Your name</label>
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control" id="inputName"
										name="inputName" placeholder="name...">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<label for="inputEmail" class="control-label">Your email</label>
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control" id="inputEmail"
										name="inputEmail" placeholder="email...">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<label for="inputEmail" class="control-label">Your phone (we
										can only call people locally)</label>
								</div>
								<div class="col-sm-12">
									<input type="text" class="form-control" id="inputPhone"
										name="inputPhone" placeholder="phone...">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<label for="textArea" class="control-label">Message</label>
								</div>
								<div class="col-sm-12">
									<textarea class="form-control" rows="3" id="textareaMsg"
										name="textareaMsg" placeholder="message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4">
									<button class="btn btn-default"
										onclick="$('contactForm').reset();">Cancel</button>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
								<div class="col-sm-8">
									<div id="mailAlert"
										class="alert alert-success">
										<span id="mailAlertMsg">Mail sent!</span> <a href="contact.php"
											class="alert-link">Continue</a>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>

<?php require "footer.php";?>

	</div>


</body>
</html>

<script>
$("document").ready(function() {
	$("#mailAlert").hide();
	
	$("#contactForm").submit(function() {
	  $.ajax({
				type: "POST",
				url: "contactform.php",
				data: $(this).serialize(),
				success: function(ret) {
					if(ret === "") {
						$("#mailAlertMsg").html("Mail sent!");
						$("#mailAlert").removeClass("alert-warning").addClass("alert-success").show();
					} else {
						$("#mailAlertMsg").html("<b>Error</b><br>"+ ret);
						$("#mailAlert").removeClass("alert-success").addClass("alert-danger").show();
					}					
				},
				error: function(ret) {
					$("#mailError").show();
				}
		});
		return false;
	});
});

</script>

<!-- 										formaction="contactform.php" formmethod="post">Submit</button> -->
