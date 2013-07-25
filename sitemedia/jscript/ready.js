/* Script for Exhibition - Developed by Sayid Moghadam - i@sayid.ir */
var winW = window.innerWidth;
var winH = window.innerHeight;
var stopAnim = true;
//=================================
window.onresize = function(event) {
	var winW = window.innerWidth;
	var winH = window.innerHeight;
	$('#siteBackground').css('width',Math.ceil(winW/144)*144);
	//position of container
	$('#centerStone').css('height',winH);
	validPos = selectPos(winW);
	$('.container').css('left',validPos);
}
//=================================
$().ready(function() {
	var Gif = $('#loadingGif');
	function runIt(){
		Gif.animate({height:'10px',top:'10px'},300,function(){
			Gif.animate({width:'10px',right:'10px'},300,function(){
				Gif.animate({height:'30px',top:'0px'},300,function(){
					Gif.animate({width:'30px',right:'0px'},300);
					runIt();
				});
			});
		});
	}
	if (stopAnim) runIt();
	$('#siteBackground').css('width',Math.ceil(winW/144)*144);
	//position of container
	$('#centerStone').css('height',winH);
	validPos = selectPos(winW);
	$('.container').css('left',validPos);
	// link over left
	$('.leftConHolder .linkMenu a').hover(function(){
		$(this).children('.linkValue').stop().animate({right:35},400);
		$(this).children('.pointer').stop().animate({left:15},400);
	},function(){
		$(this).children('.linkValue').stop().animate({right:15},200);
		$(this).children('.pointer').stop().animate({left:23},200);
	});
	//link over reverse left
	$('.leftConHolder .titleContent').hover(function(){
		$(this).children('.reversePointer').stop().animate({left:30},400);
	},function(){
		$(this).children('.reversePointer').stop().animate({left:23},200);
	});
	//link over right
	$('.rightConHolder .linkMenu a').hover(function(){
		$(this).children('.linkValue').stop().animate({left:35},400);
		$(this).children('.pointer').stop().animate({right:15},400);
	},function(){
		$(this).children('.linkValue').stop().animate({left:15},200);
		$(this).children('.pointer').stop().animate({right:23},200);
	});
	//link over reverse left
	$('.rightConHolder .titleContent').hover(function(){
		$(this).children('.reversePointer').stop().animate({right:30},400);
	},function(){
		$(this).children('.reversePointer').stop().animate({right:23},200);
	});
	//logo over 
	$('#eyeLogo').hover(function(){
		$(this).children().children('.eyedown').stop().animate({opacity:1},400);
	},function(){
		$(this).children().children('.eyedown').stop().animate({opacity:0},400);
	});
});
//=================================
function selectPos(ww){
	var pos = (ww/2)-504;
	if(pos<0){pos=0}
	else if(pos>0&&pos<72){pos=0}
	else if(pos>72&&pos<144){pos=144}
	else if(pos>144&&pos<216){pos=144}
	else if(pos>216&&pos<288){pos=288}
	else if(pos>288&&pos<360){pos=288}
	else if(pos>360&&pos<432){pos=432}
	else if(pos>432&&pos<504){pos=432}
	else if(pos>504&&pos<576){pos=576}
	else if(pos>576&&pos<648){pos=576}
	else if(pos>648&&pos<720){pos=720}
	else if(pos>720&&pos<792){pos=720}
	else if(pos>792&&pos<864){pos=864}
	else if(pos>864&&pos<936){pos=864}
	else if(pos>936&&pos<1008){pos=1008}
	return pos;
}
function openRightMenus(){
	$('.rightContent .p1').animate({width:288},900, 'easeOutBounce');
	$('.rightContent .p2').animate({width:288},300, 'easeOutBounce');
	$('.rightContent .p3').animate({width:288},500, 'easeOutBounce');
	$('.rightContent .p4').animate({width:288},1000, 'easeOutBounce');
}
function openLeftMenus(){
	$('.leftContent .p1').animate({width:288},1000, 'easeOutBounce');
	$('.leftContent .p2').animate({width:288},300, 'easeOutBounce');
	$('.leftContent .p3').animate({width:288},600, 'easeOutBounce');
	$('.leftContent .p4').animate({width:288},800, 'easeOutBounce');
}
function closeRightMenus(start){
	$('.rightContent .p1').animate({width:0},900, 'easeOutQuint');
	$('.rightContent .p2').animate({width:0},600, 'easeOutQuint');
	$('.rightContent .p3').animate({width:0},300, 'easeOutQuint');
	$('.rightContent .p4').animate({width:0},1000, 'easeOutQuint');
}
function closeLeftMenus(start){
	$('.leftContent .p1').animate({width:0},1000, 'easeOutQuint');
	$('.leftContent .p2').animate({width:0},600, 'easeOutQuint');
	$('.leftContent .p3').animate({width:0},300, 'easeOutQuint');
	$('.leftContent .p4').animate({width:0},900, 'easeOutQuint');
}
function menuClick(side,val,sw){
	if(sw == 'open'){
		if(side == 'left'){
			if(val == '01') {
				$('.leftContent .link01').addClass('displayOn');
				$('.leftContent .content01').addClass('displayOn');
			}
			if(val == '02') {
				$('.leftContent .link02').addClass('displayOn');
				$('.leftContent .content02').addClass('displayOn');
			}
			if(val == '03') {
				$('.leftContent .link03').addClass('displayOn');
				$('.leftContent .content03').addClass('displayOn');
			}
			if(val == '04') {
				$('.leftContent .link04').addClass('displayOn');
				$('.leftContent .content04').addClass('displayOn');
			}
			closeLeftMenus(val);
			setTimeout(function(){$('.leftContent .menuContent').fadeIn(1000);}, 500);
		}else if(side == 'right'){
			if(val == '01') {
				$('.rightContent .link01').addClass('displayOn');
				$('.rightContent .content01').addClass('displayOn');
			}
			if(val == '02') {
				$('.rightContent .link02').addClass('displayOn');
				$('.rightContent .content02').addClass('displayOn');
			}
			if(val == '03') {
				$('.rightContent .link03').addClass('displayOn');
				$('.rightContent .content03').addClass('displayOn');
			}
			if(val == '04') {
				$('.rightContent .link04').addClass('displayOn');
				$('.rightContent .content04').addClass('displayOn');
			}
			closeRightMenus(val);
			setTimeout(function(){$('.rightContent .menuContent').fadeIn(1000);}, 500);
		}
	}else if (sw == 'close'){
		if(side == 'left'){
			$('.leftContent .content01').removeClass('displayOn');$('.leftContent .link01').removeClass('displayOn');
			$('.leftContent .content02').removeClass('displayOn');$('.leftContent .link02').removeClass('displayOn');
			$('.leftContent .content03').removeClass('displayOn');$('.leftContent .link03').removeClass('displayOn');
			$('.leftContent .content04').removeClass('displayOn');$('.leftContent .link04').removeClass('displayOn');
			$('.leftContent .menuContent').fadeOut(200,function(){
				openLeftMenus();
			});
		}else if(side == 'right'){
			$('.rightContent .content01').removeClass('displayOn');$('.rightContent .link01').removeClass('displayOn');
			$('.rightContent .content02').removeClass('displayOn');$('.rightContent .link02').removeClass('displayOn');
			$('.rightContent .content03').removeClass('displayOn');$('.rightContent .link03').removeClass('displayOn');
			$('.rightContent .content04').removeClass('displayOn');$('.rightContent .link04').removeClass('displayOn');
			$('.rightContent .menuContent').fadeOut(200,function(){
				openRightMenus();
			});
		}
	}
}
function checkValid(){
	var emailValid = false;
	var msgValid = false;
	var email = $('.emailInput').val();
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!regex.test(email)){
		$('.emailInput').css('box-shadow','0 0 3px rgba(255, 0, 82, 0.8) inset');
		emailValid = false;
	}else{$('.emailInput').css('box-shadow','0 0 3px rgba(0, 255, 51, 0.4) inset');emailValid = true;}
	if($('.voteTextarea').val().length < 1){
		//$('.voteTextarea').attr("placeholder", "لطفا پیام خود را بنویسید ...");
		$('.voteTextarea').css('box-shadow','0 0 3px rgba(255, 0, 82, 0.8) inset');
		msgValid = false;
	}else{$('.voteTextarea').css('box-shadow','none');msgValid= true;}
	if(msgValid && emailValid){return true;}
	else{return false;}
}
function voteClicked(){
	if(checkValid()){
		var voteNumber = window.LeadingZero($('.voteCounter').val());
		var userStr = $('.userInput').val();
		var msgStr = $('.voteTextarea').val();
		var emailStr = $('.emailInput').val();
		var secur = window.securAns;
		var securUsrAns = $('.secureInput').val();
		ajaxReq('syncReq.php','msgStr='+msgStr+'&emailStr='+emailStr+'&userStr='+userStr+'&secur='+secur+'&securUsrAns='+securUsrAns+'&voteNumber='+voteNumber);
	}
}
function reloadSecurImg(newImgSrc){
	var newSrc = './secur/'+newImgSrc+'?'+Math.random();
	$(".securImg").fadeOut(function() { 
		$(this).load(function() { $(this).fadeIn(); }); 
		$(this).attr("src", newSrc); 
	}); 
}
function insertVoteLine(date,time){
	var voteCounter = window.LeadingZero($('.voteCounter').val());
	$('.leftContent .content02').append('<div class="voteLine"><div class="voteNumber" id="newLine">'+voteCounter+'</div><div class="voteUser">'+$('.userInput').val()+'</div><div class="voteDate">'+date+' '+time+'</div><div class="voteContent">'+$('.voteTextarea').val()+'</div></div>');

	var plus = $('.voteCounter').val();
	plus++;
	$('.voteCounter').val(plus);
	scroll(0,$('#newLine').position().bottom);
	$('.voteTextarea').val('').empty();
	$('.emailInput').val('').empty();
	$('.userInput').val('').empty();
	$('.secureInput').val('').empty();
}
function myAlert(){
	alert("You Are Success !");
}
function ajaxReq(myUrl,myQs){
	$.ajax({
		type:"POST",
		url:myUrl,  
		data:myQs,
		success:function(result) {
			// use result
			resSplite = result.split(' ');
			if (resSplite[0] == 'false'){
				$('.secureInput').css('box-shadow','0 0 3px rgba(255, 0, 82, 0.8) inset');
				reloadSecurImg(resSplite[1]);
				$('.secureInput').val() = '';
			}else if (resSplite[0] == 'true'){
				$('.secureInput').css('box-shadow','none');
				myAlert();
				reloadSecurImg(resSplite[1]);
				insertVoteLine(resSplite[2],resSplite[3]);
			}
		}
	});
}