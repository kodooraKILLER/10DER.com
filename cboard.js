
$(document).ready(function()
{
$(".description").hide();
$(".kn").hide();
$(".procure").hide();
$(".shortlist").hide();
$("#step2").hide();
$("#popover").hide();

$("#popover2").hide();
$("body").fadeIn("100");


$(".procure").click(function()
{
	
$("#sellerdetails").html("Dear M/S. "+$(this).parent().find(".sellerid").html()+",");

	$("#popover2").css("opacity","1");
$("article").fadeTo("slow",0.25);$("#popover2").fadeIn("slow").delay("slow");

});
$("#ct1").click(function()
{
	$("article").fadeTo("slow",1);
	$("#popover2").fadeOut("slow");
	
});
$("#ct2").click(function()
{
	$("article").fadeTo("slow",1);
	$("#popover2").fadeOut("slow");
	
});

$(".bid").hover(function(){
    $(this).css("background-color", "#eeeeee");
    $(this).find(".sellerid").css("color","#0F2D6B");
	//$(this).find(".sellerid").css("text-shadow","2px 2px 1px black");
	$(this).find(".kn").fadeIn("fast");
	},
	
	function()
	{
	$(this).css("background-color", "white");
	$(this).find(".sellerid").css("color","#2874f0");
	$(this).find(".sellerid").css("text-shadow","0px 0px white");
	$(this).find(".kn").fadeOut("fast");
	}
);
	
$(".kn").click(function()
{
	if($(this).html().includes("Know more"))
	{
	$(this).html("&nbsp;&#9432;&nbsp;<i>See less&nbsp;&nbsp;</i>");
	$(this).parent().find(".description").slideDown("slow");
	$(this).parent().find(".procure").fadeIn("medium");
	$(this).parent().find(".shortlist").fadeIn("medium");
	$(this).parent().hover(function()
	{
		
	},
	function()
	{$(this).parent().find(".procure").fadeOut("medium");
	$(this).parent().find(".shortlist").fadeOut("medium");
	});
	}
	else
	{
	$(this).html("&nbsp;&#9432;&nbsp;<i>Know more&nbsp;&nbsp;</i>");
	$(this).parent().find(".procure").fadeOut("medium");
	$(this).parent().find(".shortlist").fadeOut("medium");
	
	$(this).parent().find(".description").slideUp("slow");
	
	}	
});



$("#create").click(function()
{
	$("#step2").hide();
	$("#s2").hide();
	$("#s1").show();
	$("#desc1").show();
	$("#desc2").hide();
	$("#step1").show();
	$("#popover").css("opacity","1");
	$("article").fadeTo("slow",0.25);
	$("#popover").fadeIn("slow");
});

$("#s1").click(function()
{
	$("#step1").fadeOut("slow");
	$("#desc1").fadeOut("slow");
	$("#s1").fadeOut("slow");
	$("#step2").delay("slow").fadeIn("slow");
	$("#s2").delay("slow").fadeIn("slow");
	
	$("#desc2").delay("slow").fadeIn("slow");
	
});

$("#close").click(function()
{
	console.log("hi");
	$("article").fadeTo("slow",1);
	$("#popover").fadeOut("slow");
});

$("#s2").click(function()
{
	//console.log("hi");
	$("article").fadeTo("slow",1);
	$("#popover").fadeOut("slow");
});

});
