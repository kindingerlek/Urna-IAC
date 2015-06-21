$(function(){
	
	clearUrn();
	
	var office = $.trim($("#urn-candidateOffice").text());
	
	$("#key-0").click(function(){
		addNum(0, verifyOffice(office));
	});
	
	$("#key-1").click(function(){
		addNum(1, verifyOffice(office));
	});
	
	$("#key-2").click(function(){
		addNum(2, verifyOffice(office));
	});
	
	$("#key-3").click(function(){
		addNum(3, verifyOffice(office));
	});
	
	$("#key-4").click(function(){
		addNum(4, verifyOffice(office));
	});
	
	$("#key-5").click(function(){
		addNum(5, verifyOffice(office));
	});
	
	$("#key-6").click(function(){
		addNum(6, verifyOffice(office));
	});
	
	$("#key-7").click(function(){
		addNum(7, verifyOffice(office));
	});
	
	$("#key-8").click(function(){
		addNum(8, verifyOffice(office));
	});
	
	$("#key-9").click(function(){
		addNum(9, verifyOffice(office));
	});
	
	$("#key-correct").click(function(){
		clearUrn();
	});
	
});

$(function(){
	
   var num = $.trim($("#urn-number").text());
   var office = $.trim($("#urn-candidateOffice").text());
   
   $("#key-empty").click(function(){
	   clearUrn();
	   var num = $.trim($("#urn-number").text());
	   var office = $.trim($("#urn-candidateOffice").text());
	   alert("oi");
	    $.ajax(
            {     
                  dataType: 'script',
                  type: 'POST',
                  data: { 'idCandidate' : num ,'office' : office },
                  url: '../controller/controller_urn/controller_urn_vote.php',
                  success: function(result)
                        {
                              
                        }
            });
		 return false;
	   
   });
   
	$("#key-confirm").click(function(){
	   var num = $.trim($("#urn-number").text());
	   var office = $.trim($("#urn-candidateOffice").text());
	   $.ajax(
            {     
                  dataType: 'script',
                  type: 'POST',
                  data: { 'idCandidate' : num ,'office' : office },
                  url: '../controller/controller_urn/controller_urn_vote.php',
                  success: function(result)
                        {
                              
                        }
            });
		 return false;
	});
            
           
	var office = $.trim($("#urn-candidateOffice").text());
	
	$("#urn-number").on("DOMSubtreeModified",function(){

		if (office == "PRESIDENTE" || office == "PREFEITO" || office == "GOVERNADOR") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do partido na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'party' : num },
            	    type: 'POST',
            	    url:'../controller/controller_urn/controller_urn_show_party_2_digit.php',
        	    });
		
			}

			//Quando dois numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
				
				$.ajax({
        	    	dataType: 'script',
            	     data: { 'idCandidate' : num ,'office' : office },
            	    type: 'POST',
            	    url:'../controller/controller_urn/controller_urn_show_candidate.php',
        	    });
		
			}
			
		} else if(office == "VEREADOR" || office == "DEPUTADO ESTADUAL") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do partido na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'party' : num },
            	    type: 'POST',
            	    url:'../controller/controller_urn/controller_urn_show_party.php',
        	    });
		
			}
			
			//Quando cinco numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 5){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'idCandidate' : num ,'office' : office },
            	    type: 'POST',
            	    url:'../controller/controller_urn/controller_urn_show_candidate.php',
        	    });
		
			}
			
		} else if(office == "DEPUTADO FEDERAL") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do partido na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'party' : num },
            	    type: 'POST',
            	    url:'../controller/controller_urn/controller_urn_show_party.php',
        	    });
		
			}
			
			//Quando quatro numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 4){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	     data: { 'idCandidate' : num ,'office' : office },
            	    type: 'POST',
            	    url:'../controller/controller_urn/controller_urn_show_candidate.php',
        	    });
		
			}

		} else if(office == "SENADOR") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do partido na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'party' : num },
            	    type: 'POST',
            	   	url:'../controller/controller_urn/controller_urn_show_party.php',
        	    });
		
			}
			
			//Quando três numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 3){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'idCandidate' : num ,'office' : office },
            	    type: 'POST',
            	    url:'../controller/controller_urn/controller_urn_show_candidate.php',
        	    });
		
			}
		}
	});

});