$(function(){

	$("#search-input").focus(function(){
		
		var combo = indentifyCombo($("#search-combobox"));	
		
		if(combo == 3) {
			createMaskVoterCPF(combo, $(this));
		}
		
		if(combo == 1 || combo == 2){
			removeMask($(this));
		}
		
	});
	
	$("#search-input").blur(function(){
		
		var combo = indentifyCombo($("#search-combobox"));	
		var input = $("#search-input").val();

		if(combo == 3 && evalCPF(input) == 0) {  
				 alert("CPF incorreto");
		}
		
		if(combo == 1) {
			createMaskVoterName(combo);
		};
		
		if(combo == 2 && evalVotingCard($(this).val()) == 0) {
			alert("Título errado");
		}
	});
	
	$("#search-combobox").change(function(){
		$("#search-input").val("");
	});
});