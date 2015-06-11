$(function(){
	
	$("#search-input").blur(function(){
		
		if($("#search-combobox").val() == "nomeFantasia"){
			createMaskCandidateName($("#search-input"));
		}
		
		if($("#search-combobox").val() == "idCandidato"){
			createMaskCandidateNum($("#search-input"));
		}
		
		if($("#search-combobox").val() == "idPartido"){
			createMaskCandidateNum($("#search-input"));
		}
		
		if($("#search-combobox").val() == "idTipo"){
			createMaskCandidateName($("#search-input"));
		}
		
	});
	
	$("#register-name-candidate").blur(function(){
		createMaskCandidateName($(this));
	});
	
	$("#register-num").blur(function(){
		createMaskCandidateNum($(this));
	});
	
	
	
});

$(function(){
	
	$("#search-submit").click(function(){
		
		$.ajax({
                  dataType: 'script',
                  data: $("#form-search").serialize(),
                  type: 'POST',
                  url:'../controller/controller_admin_manage_candidate.php',
                  success: function(result)
                  {
					  
                  }
		});
		
		return false;	
		
	});
});

$(function(){
	
	$("#form-register-candidate").submit(function(){
		
		//Se o nome do candidato sem preenchimento, para o .submit
		if($("#register-name-candidate").val() == "") {
			return false;
		}
		
		//Se o numero do candidato sem preenchimento, para o .submit
		if($("#register-name-num").val() == ""){
			return false;
		}

		//Se o partido do candidato sem preenchimento, para o .submit
		if($("#register-name-party").val() == ""){
			return false;
		}

		
	    alert("loucura");
	    var formData = new FormData(this);

	    $.ajax({
	        url: '../controller/controller_register_candidate/controller_register_candidate.php',
	        type: 'POST',
	        data: formData,
	        cache: false,
	        contentType: false,
	        processData: false,
	    });
	   return false;
	});
	
});