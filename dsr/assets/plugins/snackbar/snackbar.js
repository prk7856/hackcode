$(document).ready(function(){

   	$("div#snackbar").click(function(){
   		
    	$("div#snackbar").fadeOut(1000);
    	$("div#snackbar").removeClass("show");
   	});
   
   	$("#shoprocessing").click(function(){
    	$("div#snackbar").addClass("show");
   	});
   
});
