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
	

	$("#register-number").blur(function(){
		createMaskCandidateNum($(this));
	});
	
	$("#register-number").focus(function(){
		var content = $("#register-party").val();
		var office = $("#register-office").val();
		var length = verifyOffice(office);
		
		fillInput(content, $(this));
		
		$("#register-number").attr('maxlength', length);
	});
	
});

$(function(){
	
	$("#search-submit").click(function(){
		
		$.ajax({
                  dataType: 'script',
                  data: $("#form-search").serialize(),
                  type: 'POST',
                  url:'../controller/controller_admin_manage_candidate.php'
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
		if($("#register-number").val() == ""){
			return false;
		}

		//Se o partido do candidato sem preenchimento, para o .submit
		if($("#register-name-party").val() == ""){
			return false;
		}

		
	    var formData = new FormData(this);

	    $.ajax({
	        url: '../controller/controller_register_candidate/controller_register_candidate.php',
	        type: 'POST',
	        data: formData,
	        dataType: 'script',
	        cache: false,
	        contentType: false,
	        processData: false,
	    });
	   return false;
	});
	
	$("#status-removeButton").click(function(){
		var idCandidate = $("#status-number").val();
		var idElection = $("#status-idElection").val();
    
		$.ajax({
			dataType: 'script',
			data: { 'idCandidate' : idCandidate, 'idElection': idElection  },
			type: 'POST',
			url:'../controller/controller_delete/controller_delete_candidate.php'
		});
		
		return false;
		
	});
	
});