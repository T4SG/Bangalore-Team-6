var getInfo = false;
getInfo = function() {
	var inputs = $(":input");
	for(var i = 0; i < inputs.length; i++) {
		val = inputs[i];
		if(val.type == 'button')
			continue;	
		if (val.value == null || val.value == "") {
	        alert(val.name+" must be filled out");
	        return false;
    	}
    	if(val.type == "number") {
    		var number = "^[0-9]*$";
    		if(!(val.value.match(number)))
    		{
    			alert(val.name + " must be a number");
    			return false;
    		}
    	}
	}
	$.ajax({
		url:"../mrnd-html5/submitted.html",
		type:'GET',
		success: function(data) {
				$('body').html(data);
			}
	});
	return true;
}

$('button').on('click', getInfo);

if(getInfo)
{

}
// $('button').on('click', validateForm);