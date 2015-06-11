$(function(){
	
	clearUrn();
	
	$("#key-0").click(function(){
		addNum(0);
	});
	
	$("#key-1").click(function(){
		addNum(1);
	});
	
	$("#key-2").click(function(){
		addNum(2);
	});
	
	$("#key-3").click(function(){
		addNum(3);
	});
	
	$("#key-4").click(function(){
		addNum(4);
	});
	
	$("#key-5").click(function(){
		addNum(5);
	});
	
	$("#key-6").click(function(){
		addNum(6);
	});
	
	$("#key-7").click(function(){
		addNum(7);
	});
	
	$("#key-8").click(function(){
		addNum(8);
	});
	
	$("#key-9").click(function(){
		addNum(9);
	});
	
	$("#key-correct").click(function(){
		clearUrn();
	});
	
});

$(function(){
	
	$("#urn-number").on("DOMSubtreeModified",function(){
		if($.trim($("#urn-number").text()).length == 2){
			alert("oi");
			var num = $.trim($("#urn-number").text());
			$.ajax({
                  dataType: 'script',
                  data: { 'party' : num },
                  type: 'POST',
                  url:'../controller/controller_admin_manage_voter.php',
                  success: function(result)
                  {
					  
                  }
            });
		}	
	});

});