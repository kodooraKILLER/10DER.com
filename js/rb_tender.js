var request;
count=0;
$(document).ready(function(){
	
$("#create_tender").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();
	console.log(count);

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
	
    var $form = $(this);
	if($("#flagger").val()=='')
		return;
	else{
    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();
	
	console.log(serializedData);
    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);
	$.post('/tender_create.php', serializedData, function(response) {
    // Log the response to the console
    console.log("Response: "+response);
	if(response=="yes")
	{
		$inputs.prop("disabled", false);
	
	}
	
	});
    // Fire off the request to /form.php
    // Callback handler that will be called on success
	}
 
});

  
});