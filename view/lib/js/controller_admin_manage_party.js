$(function(){

	$("#search-input").blur(function(){
		
		if($("#search-combobox").val() == "nome"){
			createMaskPartyName($("#search-input"));
		}
		
		if($("#search-combobox").val() == "sigla" || $("#search-combobox").val() == "idPartido"){
			createMaskPartyNum($("#search-input"));
		}
		
	});
	
});

$(function(){
	
	$("#register-name").blur(function(){
		
		createMaskPartyName($(this));
	});
	
	$("#register-acronym").blur(function(){
		
		createMaskPartyNum($(this));
		
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
                  url:'../controller/controller_admin_manage_voter.php',
                  success: function(result)
                  {
					  
                  }
		});
		
		return false;	
		
	});
});

$(function(){
	
	$("#form-register-party").submit(function(){
		
		$.ajax({
                  dataType: 'script',
                  data: $("#form-register-party").serialize(),
                  type: 'POST',
                  url:'../controller/controller_admin_manage_voter.php',
                  success: function(result)
                  {
					  
                  }
		});
		
		return false;
		
	});
	
});