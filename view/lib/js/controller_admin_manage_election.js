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
                  url:'../controller/controller_admin_manage_election.php',
                  success: function(result)
                  {

                  }
		});
		
		return false;	
		
	});

	$("#form-newElection").submit(function(){

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
			if($("#register-federalDeputy").val() == "" || $("#register-federalDeputy").val() < 0){
				return false;
			} else if($("#register-stateDeputy").val() == "" || $("#register-stateDeputy").val() < 0){
				return false;
			} else if($("#register-senator").val() == "" || $("#register-federalDeputy").val() < 0){
				return false;
			}
		} else if($("#register-type").val() == "municipal"){
			if($("#register-vereador").val() == "" || $("#register-vereador").val() < 0){
				return false;
			}
		}

		$.ajax({
                  dataType: 'script',
                  data: $("#form-newElection").serialize(),
                  type: 'POST',
                  url:'../controller/controller_register_election/controller_register_election.php',
		});
		
		return false;
		
	});
	
	$("#status-remove").click(function(){
		var idElection = $("#status-idElection").val();
		$.ajax({
                  dataType: 'script',
                  data: { 'idElection' : idElection },
                  type: 'POST',
                  url:'../controller/controller_delete/controller_delete_election.php'
		});
		
		return false;
		
	});
	
	$("#status-update").click(function(){
		var idElection = $("#status-idElection").val();
		var period = $("#status-period").val();
		var startTime = $("#status-startTime").val();
		var endTime = $("#status-endTime").val();
		
		$.ajax({
                  dataType: 'script',
                  data: { 'idElection' : idElection,
                  'period' : period,
                  'startTime' : startTime,
                  'endTime' : endTime },
                  type: 'POST',
                  url:'../controller/controller_update_election.php'
		});
		
		return false;
		
	});
	
	$("#status-manageCandidates").click(function(){
		var idElection = $("#status-idElection").val();

		$.ajax({
                  dataType: 'script',
                  data: { 'idElection' : idElection },
                  type: 'POST',
                  url:'../controller/controller_save_election_session.php',
				  success: function(result)
                  {
                  	  //alert('Ola tudo bem');
					  window.location.href = 'admin_manage_candidate.php';
                  }
		});
		
		return false;
		
	});
  
  $("#status-reportResult").click(function(){
		  var idElection = $("#status-idElection").val();

		  $.ajax({
                dataType: 'script',
                data: { 'idElection' : idElection },
                type: 'POST',
                url:'../controller/controller_save_election_session.php',
				  success: function(result)
                  {
					  window.open('../controller/controller_election_report.php','_blank');
                  }
	   	});
		  return false;
	});
  
  $("#status-reportTickets").click(function(){
		  var idElection = $("#status-idElection").val();

		  $.ajax({
                dataType: 'script',
                data: { 'idElection' : idElection },
                type: 'POST',
                url:'../controller/controller_save_election_session.php',
				  success: function(result)
                  {
					 window.open('../controller/controller_ticket_report.php','_blank');
                  }
	   	});
		  return false;
	});
	
});