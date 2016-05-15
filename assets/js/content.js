$(function(){
		
	/** Autocomplete author */
	var options = {
			url: function(phrase) {
			    return "/content/ajax/findauthor/";
			  },

			  getValue: function(element) {
				  console.log(element.name);
			    return element.name;
			  },
			  
//			  template: {
//			        type: "description",
//			        fields: {
//			            description: "id"
//			        }
//			    },
			  
			  list: {
				  onSelectItemEvent: function() {
					  var value = $("#author").getSelectedItemData().id;
					  $("#authorid").val(value).trigger("change");
					}
			  },

			  ajaxSettings: {
				  dataType: "json",
				  method: "POST",
				  data: {
					  dataType: "json"
				  }
			  },

			  preparePostData: function(data) {
				  data.phrase = $("#author").val();
				  return data;
			  },

			  requestDelay: 400
	};

	$("#author").easyAutocomplete(options);
	
	/** autocomplete end */
		
});
