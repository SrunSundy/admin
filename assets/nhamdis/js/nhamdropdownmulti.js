$(".nham-dropdown-inputbox-multi").on("focus",function(){
 	var trigger = false;
 	$(this).parent().siblings(".nham-dropdown-detail").css("top", 34);
	$(this).parent().siblings(".nham-dropdown-detail").show();
	
	 $(document).on("mousedown",".nham-dropdown-multi-result",function(){	
		
		 trigger = true;	
		 var textlng = $(this).find("p").textWidth()+55;
		 var selectedcls =  $(this).parent().siblings("input").val();
		 var boxlng = $("."+selectedcls).length;
		 var selectedval = $(this).find("input").val();
		
		 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".error-selected-result").css({
			 "height" : "0px",
			 "visibility" : "hidden"
		 });
		 var iserror = false;
		
		 for(var i=0; i<boxlng; i++){
			 
			var val = $("."+selectedcls).eq(i).find("input").val();
			console.log("VAULE:  "+val);
			if(val == selectedval){
				iserror = true;
				break;				
			}			
		 }
		 if(iserror){
			// var errormsg = ' <div class="error-selected-result"><p>ITEM IS SELECTED!</p></div>';			
			 //$(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".error-selected-result").css({
				// "height" : "20px",
			 //	 "visibility" : "visible"
			 //});
			// $(this).parents(".nham-dropdown-detail").hide();
			// $(document).off("mousedown");	
			//return;
			 
		}else{
			 var box = "<div class='selected-category-box "+selectedcls+" pull-left' style='width:"+textlng+"px'>";
			 box += "<input type='hidden' value='"+selectedval+"' />";
			 box += "<img class='pull-left icon-after-select' src='"+$(this).find("img").attr("src").trim()+"' />";
			 box += "<p class='text-serve-category-selected'>";
			 box += "<span>"+$(this).find("p").text().trim()+"</span>";
	 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
	 		
	 		 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".serve-category-result").append(box);
		}
		
		 $(this).parents(".nham-dropdown-detail").hide();
		 if (typeof top.resizeIframe !== 'undefined' && $.isFunction(top.resizeIframe)) {
			 top.resizeIframe();
		 }
		
		 $(document).off("mousedown");	
		 			 
	});
	 
		
	 $(document).on("click" , "i.close-item", function(){
		 
		 $(this).parents(".selected-category-box").remove();
		 if (typeof top.resizeIframe !== 'undefined' && $.isFunction(top.resizeIframe)) {
			 top.resizeIframe();
		 }
	 });
	 
	 $(document).on("blur",".nham-dropdown-inputbox-multi",function(){
 		 if(!trigger){
 			$(".nham-dropdown-detail").hide();	
 			
 		 }		
	}); 

});




$(".nham-dropdown-inputbox-multi-tags").on("focus",function(){
 	var trigger = false;
 	$(this).parent().siblings(".nham-dropdown-detail").css("top", 34);
	$(this).parent().siblings(".nham-dropdown-detail").show();
	
	 $(document).on("mousedown",".nham-dropdown-multi-result",function(){	
		
		 trigger = true;	
		 var textlng = $(this).find("p").textWidth()+55;
		 var selectedcls =  $(this).parent().siblings("input").val();
		 var boxlng = $("."+selectedcls).length;
		 var selectedval = $(this).find("input").val();
		
		 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".error-selected-result").css({
			 "height" : "0px",
			 "visibility" : "hidden"
		 });
		 var iserror = false;
		
		 for(var i=0; i<boxlng; i++){
			 
			var val = $("."+selectedcls).eq(i).find("input").val();
			console.log("VAULE:  "+val);
			if(val == selectedval){
				iserror = true;
				break;				
			}			
		 }
		 if(iserror){
			// var errormsg = ' <div class="error-selected-result"><p>ITEM IS SELECTED!</p></div>';			
			 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".error-selected-result").css({
				 "height" : "20px",
			 	 "visibility" : "visible"
			 });
			 $(this).parents(".nham-dropdown-detail").hide();
			 $(document).off("mousedown");	
			return;
			 
		}else{
			 var box = "<div class='selected-category-box "+selectedcls+" pull-left' style='width:"+textlng+"px'>";
			 box += "<input type='hidden' value='"+selectedval+"' />";
			 box += "<span class='pull-left icon-after-select'></span>";
			 box += "<p class='text-serve-category-selected'>";
			 box += "<span>"+$(this).find("p").text().trim()+"</span>";
	 		 box += "<i class='fa fa-times close-item' style='margin-left:10px;'  aria-hidden='true'></i></p></div>";
	 		
	 		 $(this).parents(".nham-dropdown-detail").siblings(".selected-dropdown").find(".serve-category-result").append(box);
		}
		
		 $(this).parents(".nham-dropdown-detail").hide();
		 $(document).off("mousedown");	
		 			 
	});
	
	 $(document).on("click" , "i.close-item", function(){
		 
		 $(this).parents(".selected-category-box").remove();
	 });
	 $(".nham-dropdown-inputbox-multi-tags").on("blur",function(){
 		 if(!trigger){
 			$(".nham-dropdown-detail").hide();	
 		 }		
	}); 

});