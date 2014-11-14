$(document).ready(function() {
	$("#contactForm").submit(function(e) {
		e.preventDefault();
	    var url = $("#contactForm").prop("action");
	    $.ajax({
	       type: "POST",
	       url: url,
	       data: $("#contactForm").serialize(),
	       success: function(ret) {
	    	   alert(ret);
	       }
     });

    return false; // avoid to execute the actual submit of the form.
	});	
});

/******************************************************************************
 * signUp()
 * Placeholder function for email list sign-up
 */
function signUp() {
	alert("Please use the Contact form while the website is being built");
	return false;
}
