

$(function(){
	
	$("#search-input").blur(function(){

		var combo = indentifyCombo($("#search-combobox"));	
		var input = $("#search-input").val();

		if(combo == "cpf") {
			createMaskVoterCPF(combo, $(this));
		}
		
		if(combo == "nome") {
			createMaskVoterName(combo, $(this));
		}
		
		if(combo == "tituloEleitor") {
			createMaskVoterVotingCard(combo, $(this));
		}
	});
	
	$("#search-combobox").change(function(){
		$("#search-input").val("");
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
	
	$("#status-removeButton").click(function(){
		var idCandidate = $("#status-removeButton").val();
		
		$.ajax({
			dataType: 'script',
			data: { 'idCandidate' : idCandidate },
			type: 'POST',
			url:'../controller/controller_register_election/controller_register_election.php',
		});
		
		return false;
		
	});
});