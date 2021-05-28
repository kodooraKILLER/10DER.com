$(document).ready(function()
{
	$(".cx").hover(function()
	$(this).css("background-color", "#eeeeee");
    $(this).find(".card-title").css("color","#0F2D6B");
	//$(this).find(".sellerid").css("text-shadow","2px 2px 1px black");
	
	},
	
	function()
	{
	$(this).css("background-color", "white");
	$(this).find(".card-title").css("color","#black");
	//$(this).find(".sellerid").css("text-shadow","0px 0px white");
	//$(this).find(".kn").fadeOut("fast");
	}):
});