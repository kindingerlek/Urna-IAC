$(function(){

	$("#search-input").blur(function(){
		
		if($("#search-combobox").val() == "sigla" || $("#search-combobox").val() == "nome"){
			createMaskPartyName($("#search-input"));
		}
		
		if($("#search-combobox").val() == "idPartido"){
			createMaskPartyNum($("#search-input"));
		}
		
	});
	
});

$(function(){
	
	$("#register-name").blur(function(){
		
		createMaskPartyName($(this));
	});
	
	$("#register-acronym").blur(function(){
		
		createMaskPartyName($(this));
		
	});
	
	$("#register-number").blur(function(){
		
		createMaskPartyNum($(this));
		
	});
});

$(function(){
	
	$("#search-submit").click(function(){
		
		$.ajax({
                  dataType: 'script',
                  data: $("#form-search").serialize(),
                  type: 'POST',
                  url:'../controller/controller_admin_manage_party.php',
                  success: function(result)
                  {
					  
                  }
		});
		
		return false;	
		
	});
});


$(function(){
	
	$("#form-register-party").submit(function () {
    var formData = new FormData(this);

	    $.ajax({
	        url: '../controller/controller_register_party/controller_register_party.php',
	        type: 'POST',
	        data: formData,
	        dataType: 'script',
	        cache: false,
	        contentType: false,
	        processData: false,
	         success: function(result)
                  {
					alert("Ola esta gostando?");  
                  }
	    });
	   return false;
	});
	
});