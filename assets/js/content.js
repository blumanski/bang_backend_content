$(function(){
		
	var options = {
		url: "/content/ajax/findauthor/", 
		dataType: 'json',
		type: 'post',
			matchResponseProperty: "inputPhrase"
		};

	$("#author").easyAutocomplete(options);
		
});
