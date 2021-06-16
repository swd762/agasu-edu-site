jQuery(document).ready(function($) {
	$('.supermenu .block:not(#ben6)').click(function(){
	var destination = $(".supermenu").offset().top-10;	
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
	});
	
	$('#ben1').hover(
		function(){
		 $('.circ1').removeClass("hidden");
		},
		function(){
		  $('.circ1').addClass("hidden");
	});
	
	$('#ben2').hover(
		function(){
		 $('.circ2').removeClass("hidden");
		},
		function(){
		  $('.circ2').addClass("hidden");
	});
	
	$('#ben3').hover(
		function(){
		 $('.circ3').removeClass("hidden");
		},
		function(){
		  $('.circ3').addClass("hidden");
	});
	
	$('#ben4').hover(
		function(){
		 $('.circ4').removeClass("hidden");
		},
		function(){
		  $('.circ4').addClass("hidden");
	});
	
	$('#ben5').hover(
		function(){
		 $('.circ5').removeClass("hidden");
		},
		function(){
		  $('.circ5').addClass("hidden");
	});
			
	$('#ben1').click(function(){
		$('.information').removeClass("infoshow");
		$('.information').addClass("infohide");
		//$('.arr').addClass("arrowunactive");
		//$('.circ1').removeClass("hidden");
        $('#info1').addClass("infoshow");
        $('#info1').removeClass("infohide");
		//$('#arrow1').addClass("arrowactive");
      //  $('#arrow1').removeClass("arrowunactive");
        return false;
    });
	$('#ben2').click(function(){
		$('.information').removeClass("infoshow");
		$('.information').addClass("infohide");
		$('.arr').addClass("arrowunactive");
		$('.arr').removeClass("arrowactive");
        $('#info2').addClass("infoshow");
        $('#info2').removeClass("infohide");
		$('#arrow2').addClass("arrowactive");
        $('#arrow2').removeClass("arrowunactive");
        return false;
    });
	$('#ben3').click(function(){
		$('.information').removeClass("infoshow");
		$('.information').addClass("infohide");
		$('.arr').addClass("arrowunactive");
		$('.arr').removeClass("arrowactive");
        $('#info3').addClass("infoshow");
        $('#info3').removeClass("infohide");
		$('#arrow3').addClass("arrowactive");
        $('#arrow3').removeClass("arrowunactive");
        return false;
    });
	$('#ben4').click(function(){
		$('.information').removeClass("infoshow");
		$('.information').addClass("infohide");
		$('.arr').addClass("arrowunactive");
		$('.arr').removeClass("arrowactive");
        $('#info4').addClass("infoshow");
        $('#info4').removeClass("infohide");
		$('#arrow4').addClass("arrowactive");
        $('#arrow4').removeClass("arrowunactive");
        return false;
    });
	$('#ben5').click(function(){
		$('.information').removeClass("infoshow");
		$('.information').addClass("infohide");
		$('.arr').addClass("arrowunactive");
		$('.arr').removeClass("arrowactive");
        $('#info5').addClass("infoshow");
        $('#info5').removeClass("infohide");
		$('#arrow5').addClass("arrowactive");
        $('#arrow5').removeClass("arrowunactive");
        return false;
    });
	/*$('#ben6').click(function(){
		$('.information').removeClass("infoshow");
		$('.information').addClass("infohide");
		$('.arr').addClass("arrowunactive");
		$('.arr').removeClass("arrowactive");
        $('#info6').addClass("infoshow");
        $('#info6').removeClass("infohide");
		$('#arrow6').addClass("arrowactive");
        $('#arrow6').removeClass("arrowunactive");
        return false;
    });  */  
	
	$(document).click(function(e)
	{
		if (e.target == document.getElementById("info1"))
			return;
			$('#info1').addClass("infohide");
			$('#info1').removeClass("infoshow");
			$('#arrow1').addClass("arrowunactive");
			//$('.circ').addClass("hidden");
			$('#arrow1').removeClass("arrowactive");
	}); 
	
	$(document).click(function(e)
	{
		if (e.target == document.getElementById("info2"))
		return;
			$('#info2').addClass("infohide");
			$('#info2').removeClass("infoshow");
			$('#arrow2').addClass("arrowunactive");
			$('#arrow2').removeClass("arrowactive");
			//$('.circ').addClass("hidden");
	});

	$(document).click(function(e)
	{
		if (e.target == document.getElementById("info3"))
		return;
			$('#info3').addClass("infohide");
			$('#info3').removeClass("infoshow");
			$('#arrow3').addClass("arrowunactive");
			$('#arrow3').removeClass("arrowactive");
			//$('.circ').addClass("hidden");
	});
	$(document).click(function(e)
	{
		if (e.target == document.getElementById("info4"))
		return;
			$('#info4').addClass("infohide");
			$('#info4').removeClass("infoshow");
			$('#arrow4').addClass("arrowunactive");
			$('#arrow4').removeClass("arrowactive");
			//$('.circ').addClass("hidden");
	});
	
	$(document).click(function(e)
	{
		if (e.target == document.getElementById("info5"))
		return;
			$('#info5').addClass("infohide");
			$('#info5').removeClass("infoshow");
			$('#arrow5').addClass("arrowunactive");
			$('#arrow5').removeClass("arrowactive");
			//$('.circ').addClass("hidden");
	});
    
	$(document).click(function(e)
	{
		if (e.target == document.getElementById("info6"))
		return;
			$('#info6').addClass("infohide");
			$('#info6').removeClass("infoshow");
			$('#arrow6').addClass("arrowunactive");
			$('#arrow6').removeClass("arrowactive");
			//$('.circ').addClass("hidden");
	});    
 });