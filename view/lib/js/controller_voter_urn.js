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
	
	var office = $.trim($("#urn-candidateOffice").text());
	
	$("#urn-number").on("DOMSubtreeModified",function(){

		if (office == "presidente" || office == "prefeito" || office == "governador") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
				
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'candidate' : num },
            	    type: 'POST',
            	    url:'url que está localizado o controller que vai mostrar candidato na tela',
            	    success: function(result)
            	    {
						  
            	    }
        	    });
		
			}
			
		} else if(office == "vereador" || office == "deputado estadual") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do partido na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'party' : num },
            	    type: 'POST',
            	    url:'url que está localizado o controller que vai mostrar partido na tela',
            	    success: function(result)
            	    {
						  
            	    }
        	    });
		
			}
			
			//Quando cinco numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 5){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'candidate' : num },
            	    type: 'POST',
            	    url:'url que está localizado o controller que vai mostrar candidato na tela',
            	    success: function(result)
            	    {
						  
            	    }
        	    });
		
			}
			
		} else if(office == "deputado federal") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do partido na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'party' : num },
            	    type: 'POST',
            	    url:'url que está localizado o controller que vai mostrar partido na tela',
            	    success: function(result)
            	    {
						  
            	    }
        	    });
		
			}
			
			//Quando quatro numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 4){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'candidate' : num },
            	    type: 'POST',
            	    url:'url que está localizado o controller que vai mostrar candidato na tela',
            	    success: function(result)
            	    {
						  
            	    }
        	    });
		
			}

		} else if(office == "senador") {
			
			//Quando dois numeros forem digitados, envia um ajax para a inserção do partido na tela
			if($.trim($("#urn-number").text()).length == 2){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'party' : num },
            	    type: 'POST',
            	    url:'url que está localizado o controller que vai mostrar partido na tela',
            	    success: function(result)
            	    {
						  
            	    }
        	    });
		
			}
			
			//Quando três numeros forem digitados, envia um ajax para a inserção do candidato na tela
			if($.trim($("#urn-number").text()).length == 3){
				var num = $.trim($("#urn-number").text());
		
				$.ajax({
        	    	dataType: 'script',
            	    data: { 'candidate' : num },
            	    type: 'POST',
            	    url:'url que está localizado o controller que vai mostrar candidato na tela',
            	    success: function(result)
            	    {
						  
            	    }
        	    });
		
			}
		}
	});

});