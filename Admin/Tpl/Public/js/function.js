$(document).ready(function(){
	//listmenu
	var objleftmenu = $(".leftmenu");
	objleftmenu.find("p a").click(function(){
		$(this).parent("p").parent("li").find("ul").toggle("fast");//toggleClass("disnone");
		$(this).parent("p").toggleClass("c_on");
	});
});

$( document ).ready( function(){
	$( ".tablinkbox a" ).click( function( e ) {
		e.preventDefault();
		$( this ).addClass( "tablink_on" ).siblings().removeClass();
		$( ".tabmainbox ul" ).eq( $(".tablinkbox a").index(this) ).addClass( "on_tab" ).siblings().removeClass();
	} );
} );
$(document).ready(function(){
	$(".boxshow").click(function(){
		/*发送邮件box*/
		$(".ctopbox").css("display", "block");
		$("#add_tb_bg").css("display", "block");
	});
		$("#boxnone").click(function(){
		$(".ctopbox").css("display", "none");
		$("#add_tb_bg").css("display", "none");
	});
	/*分组管理box*/
	$(".showit_f").click(function(){
		$(".show_q").css("display", "block");
		$("#add_tb_bg").css("display", "block");
	});
		$(".boxnone").click(function(){
		$(".show_q").css("display", "none");
		$("#add_tb_bg").css("display", "none");
	});
	/*选择资质box*/
	$(".showit_z").click(function(){
		$(".show_zz").css("display", "block");
		$("#add_tb_bg").css("display", "block");
	});
		$(".boxnone").click(function(){
		$(".show_zz").css("display", "none");
		$("#add_tb_bg").css("display", "none");
	});
	
} );

$(document).ready(function(){
	$(".show_z02 li").hover(function(){
		$(this).find("span").toggle();
	});
} );

$(document).ready(function(){
	$(".iti").hover(function(){
		$(this).find(".overpic").toggle();
	});
	
	$(".addzz").click(function(){
		$(".addzzshow").css("display", "block");
	});
	
	$(".addxx").click(function(){
		$(".addxxshow").css("display", "block");
		$(".addxx").css("display", "none");
	});
	
	
		$(".tologinbut").click(function(){
		$(".topboxshow").css("display", "block");
		$("#add_tb_bg").css("display", "block");
	});
		$(".closelogin").click(function(){
		$(".topboxshow").css("display", "none");
		$("#add_tb_bg").css("display", "none");
	});
	
	$(".pms").click(function(){
		$(".shenq1").css("display", "block");
		$("#add_tb_bg").css("display", "block");
	});
	$(".closelogin").click(function(){
		$(".shenq1").css("display", "none");
		$("#add_tb_bg").css("display", "none");
	});
	
	$(".ggs").click(function(){
		$(".shenq2").css("display", "block");
		$("#add_tb_bg").css("display", "block");
	});
	$(".closelogin").click(function(){
		$(".shenq2").css("display", "none");
		$("#add_tb_bg").css("display", "none");
	});
	
	$(".upimglink").click(function(){
		$(".uppic").css("display", "block");
		$("#add_tb_bg").css("display", "block");
	});
	$(".closelogin").click(function(){
		$(".uppic").css("display", "none");
		$("#add_tb_bg").css("display", "none");
	});
	
	$( ".choicead .tit02 i" ).click( function(){
		$( this ).parent( ".tit02" ).parent( ".choicead" ).find(".choicebox").toggle();
		$( this ).parent( ".tit02" ).find(".closec").toggle();
		$( this ).parent( ".tit02" ).find(".openc").toggle();
	});
	
	$( ".tr1show a" ).click( function(){
		$( this ).parent( ".tr1show" ).find(".td1show").toggle();
		$( this ).parent( ".tr1show" ).find(".opentd1").toggle();
		$( this ).parent( ".tr1show" ).find(".closetd1").toggle();
	});
	$( ".tr1show img" ).click( function(){
		$( this ).parent( "td" ).parent( "tr" ).parent( "tbody" ).parent( "table" ).parent( ".td1show" ).parent( ".tr1show" ).find(".td1show").toggle();
		$( this ).parent( "td" ).parent( "tr" ).parent( "tbody" ).parent( "table" ).parent( "div" ).parent( "div" ).find(".closetd1").toggle();
		$( this ).parent( "td" ).parent( "tr" ).parent( "tbody" ).parent( "table" ).parent( "div" ).parent( "div" ).find(".opentd1").toggle();
	});
	
	$( ".jgshow a" ).click( function(){
		$( this ).parent( ".jgshow" ).find(".jgdiv").toggle();
		$( this ).parent( ".jgshow" ).find(".zkjg").toggle();
		$( this ).parent( ".jgshow" ).find(".sqjg").toggle();
	});
	
	$( ".tr1show .tdtableNone" ).click( function(){
		$( this ).parent( "td" ).parent( "tr" ).parent( "tbody" ).parent( "table" ).parent( "td" ).parent( "tr" ).parent( "tbody" ).parent( "table" ).parent( ".td1show" ).parent( ".tr1show" ).find(".td1show").toggle();
		
	} );
	
	$( "#pmxju" ).click( function(){
		$(".pmxj").toggle();
	});
	$( ".pmsj" ).click( function(){
		$(".pmxj").toggle();
	});
	
	$(".upul li").hover(function(){
		$(this).find(".del").toggle();
	});
	
	$(".upul li").hover(function(){
		$(this).find(".szs").toggle();
	});
	
	 $('#hzlx').change(function(){
	   if($('#hzlx').val()=="22"){
		    $('.ztp').show();$('.hzp').hide();
		   }else{
			 $('.ztp').hide();$('.hzp').show();
			   }
	 });
	 
	  $('#pmxlshow').change(function(){
	   if($('#pmxlshow').val()=="22"){
		    $('.xptr').show();$('.dptr').hide();
		   }else{
			 $('.dptr').hide();$('.xptr').show();
			   }
	 });
	 
	 $('#pmxlshow').change(function(){
	   if($('#pmxlshow').val()=="11"){
		    $('.xptr').hide();$('.dptr').show();
		   }else{
			 $('.dptr').hide();$('.xptr').show();
			   }
	 });
	
	$('#pmdjselect').change(function(){
	   if($('#pmdjselect').val()=="11"){
		    $('.sqit').show();$('.szdy').hide();
		   }
	 });
	 
	  $('#pmdjselect').change(function(){
	   if($('#pmdjselect').val()=="22"){
		    $('.szdy').show();$('.sqit').hide();
		   }
	 });
	 $('#pmdjselect').change(function(){
	   if($('#pmdjselect').val()=="0"){
		    $('.sqit').hide();$('.szdy').hide();
		   }
	 });
	 
	 $( ".replyit" ).click( function(){
		$( this ).parent( "div" ).parent( "i" ).parent( "div" ).parent( "div" ).find(".replymsg").toggle();
	});
	 $( ".opentr" ).click( function(){
		$( this ).parent( "td" ).parent( "tr" ).parent( "tbody" ).parent( "table" ).parent( "td" ).find(".trshow").toggle();
		$( this ).parent( "td" ).parent( "tr" ).find( "td" ).toggleClass("botborder");
		$( this ).parent( "td" ).find(".opentr").toggle();
		$( this ).parent( "td" ).find(".closetr").toggle();
	});
	
	$( ".closetr" ).click( function(){
		$( this ).parent( "td" ).parent( "tr" ).parent( "tbody" ).parent( "table" ).parent( "td" ).find(".trshow").toggle();
		$( this ).parent( "td" ).parent( "tr" ).find( "td" ).toggleClass("botborder");
		$( this ).parent( "td" ).find(".opentr").toggle();
		$( this ).parent( "td" ).find(".closetr").toggle();
	});
	
	
	$( ".tabletop .tabletd a" ).click( function( e ) {
		e.preventDefault();
		$( this ).addClass( "tabletop_a" ).siblings().removeClass();
	} );
	
} );