$(function(){
	
	$("#search-input").blur(function(){
		
		if($("#search-combobox").val() == "idEleicao"){
			createMaskElectionNum($(this));
		}
		
		if($("#search-combobox").val() == "tipo" || ($("#search-combobox").val() == "status")){
			createMaskElectionName($(this));
		}
		
	});
	
	$("#search-input").focus(function(){
		
		if($("#search-combobox").val() == "data"){
			createMaskElectionDate($(this));
		} else {
			removeMask($(this));
		}
		
	});
	
	$("#search-combobox").change(function(){
		
		$("#search-input").val("");
		
	});
	
	$("#register-startTime").focus(function(){

		createMaskElectionTime($(this));
		
	});
	
	$("#register-endTime").focus(function(){
		
		createMaskElectionTime($(this));
		
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
	
	$("#form_newElection").submit(function(){
		
		//Se hora preenchida incorretamente, para o .submit
		if(evalTime($("#register-startTime")) == 0 || evalTime($("#register-endTime")) == 0){
			return false;
		}
		
		//Se hora preenchida incorretamente, para o .submit
		if($("#register-startTime").val() == ""){
			return false;
		}
		
		//Se hora preenchida incorretamente, para o .submit
		if($("#register-endTime").val() == ""){
			return false;
		}

		//Valida os campos do tipo de eleição escolhida
		if($("#register-type").val() == "federal"){
			if($("#register-FederalDeputy").val() == "" || $("#register-FederalDeputy").val() < 0){
				return false;
			} else if($("#register-stateDeputy").val() == "" || $("#register-stateDeputy").val() < 0){
				return false;
			} else if($("#register-senator").val() == "" || $("#register-FederalDeputy").val() < 0){
				return false;
			}
		} else if($("#register-type").val() == "municipal"){
			if($("#register-vereador").val() == "" || $("#register-vereador").val() < 0){
				return false;
			}
		}
		alert("oi");
		$.ajax({
                  dataType: 'script',
                  data: $("#form-newElection").serialize(),
                  type: 'POST',
                  url:'../controller/controller_admin_manage_voter.php',
                  success: function(result)
                  {
					 alert("1") ;
                  }
		});
		
		return false;
		
	});
	
});