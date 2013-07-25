<?php
$msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
if ($msie){$isIE = "true";}else{ $isIE = "false";}
// Design and Developed by Sayid Moghadam - i@sayid.ir
$securImg = array("dnow3hn8dn3.jpg","kdm2lfno3ndoi35.jpg","new081643nkf3.jpg","oj890h4iubn9.jpg","skd9he4ui9d3.jpg");
$curRandSecur = rand(0,4);
function date_diff_in_days($from,$to){
	$date1 = strtotime($from);
	$date2 = strtotime($to);
	$dateDiff = $date1 - $date2;
	return $dateDiff;
}
function convertDate($dateTime){
	$info = getdate();
	$date = $info['mday'];
	$month = $info['mon'];
	$year = $info['year'];
	$hour = $info['hours'];
	$min = $info['minutes'];
	$sec = $info['seconds'];
	$now=$year.'-'.$month.'-'.$date.' '.$hour.':'.$min.':'.$sec;
	
	$time=date_diff_in_days($dateTime,$now);
	print $time;
}
// --------------
require 'mysql.php' ;
$query='select * from user_vote';
$dt = mysql::sql_execute_return_table($query);

//foreach($dt as $row){
// $row['field'];
//}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>نمایشگاه عکس</title>
	<meta name="description" content="نمایشگاه عمومی شش دوره دانش آموختگان کلاسهای عکاسی استاد گیلانی فر">
	<meta name="viewport" content="width=device-width">
    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="social-share" href="social_icon.jpg">
	<link rel="stylesheet" href="sitemedia/stylesheet/style.css">
    <script>
	var IEbrowser = <?=$isIE ?> ;
	function checkIE(){
		if(IEbrowser) window.location = "http://ey3.ir/exhibition/IEbrowser.html";
	}
	var securAns = "<?=$securImg[$curRandSecur];?>";
	var count01 = <?=convertDate('2013-10-11 00:00:00');?>;
	var count02 = <?=convertDate('2013-08-11 00:00:00');?>;
	var count03 = <?=convertDate('2013-09-22 00:00:00');?>;
	</script>
    <script src="sitemedia/jscript/jquery.min.js" type="text/javascript"></script>
    <script src="sitemedia/jscript/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="sitemedia/jscript/countdown.js" type="text/javascript"></script>
    <script src="sitemedia/jscript/ready.js" type="text/javascript"></script>
	
    <script>
	function preloader(){
		document.getElementById("preloader").className = "fade_out";
		setTimeout(function(){
			var preload = document.getElementById("preloader");
			preload.parentNode.removeChild(preload);
		}, 1000);
		window.stopAnim = false;
		$('.rightContent .p1').animate({width:288},1000, 'easeOutBounce',function(){
			$('.rightContent .p2').animate({width:288},800, 'easeOutBounce',function(){
				$('.rightContent .p3').animate({width:288},800, 'easeOutBounce',function(){
					$('.rightContent .p4').animate({width:288},1000, 'easeOutBounce');
				});
			});
		});
		$('.leftContent .p1').animate({width:288},1000, 'easeOutBounce',function(){
			$('.leftContent .p2').animate({width:288},800, 'easeOutBounce',function(){
				$('.leftContent .p3').animate({width:288},800, 'easeOutBounce',function(){
					$('.leftContent .p4').animate({width:288},1000, 'easeOutBounce');
				});
			});
		});
	}
	</script>
</head>
<body onload="preloader();">
	<div id="preloader">
        <div class="centerScreen">
            <div id="loadingGif"></div>
            <div id="pleasWait">لطفا کمی صبور باشید ، شما مصرف کننده اینترنت ایران هستید ...</div>
        </div>
    </div>
    <div id="siteBackground">
    	<?php for($i=1;$i<=88;$i++) { if ($i<10) $i = '0'.$i;?>
    	<div class="bgPictureHolder">
        	<img class="colored" src="./imgs/particle_<?=$i ?>.jpg" id="particle_<?=$i ?>" width="144" height="81">
            <img class="blackwhite" src="./imgs/particle_<?=$i ?>a.jpg" id="particle_<?=$i ?>a" width="144" height="81">
        </div>
		<?php }?>
        <?php for($i=1;$i<=88;$i++) { if ($i<10) $i = '0'.$i;?>
    	<div class="bgPictureHolder">
        	<img class="colored" src="./imgs/particle_<?=$i ?>i.jpg" id="particle_<?=$i ?>i" width="144" height="81">
            <img class="blackwhite" src="./imgs/particle_<?=$i ?>ai.jpg" id="particle_<?=$i ?>ai" width="144" height="81">
        </div>
		<?php }?>
    </div>
    <div class="container">
    	<div class="containerHolder">
            <div id="centerStone">
            	<div id="poster"></div>
                <a href="http://eyestudio.ir" id="eyeLogo">
                	<div id="eyeLogoHolder">
                        <div class="eye eyeup"></div>
                        <div class="eye eyedown"></div>
                    </div>
                </a>
            </div>
            <div class="leftContent">
            	<div class="leftConHolder">
                	<div class="linkMenu p1 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('left','01','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">محل برگزاری نمایشگاه</span>
                        </a>
                    </div>
                    <div class="linkMenu p2 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('left','02','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">نظرات و پیشنهادات</span>
                        </a>
                    </div>
                    <div class="linkMenu p3 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('left','03','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">هیئت داوری و مسئولین</span>
                        </a>
                    </div>
                    <div class="linkMenu p4 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('left','04','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">فرم ثبت نام</span>
                        </a>
                    </div>
                    <div class="menuContent displayOff">
                        <div class="titleContent"  onClick="menuClick('left','00','close');">
                        	<span class="reversePointer"></span>
                            <span class="linkValue">
                                <div class="link01 displayOff">محل برگزاری نمایشگاه</div>
                                <div class="link02 displayOff">نظرات و پیشنهادات</div>
                                <div class="link03 displayOff">هیئت داوری و مسئولین</div>
                                <div class="link04 displayOff">فرم ثبت نام</div>
                            </span>
                        </div>
                        <div class="bodyContent">
                        	<div class="content01 displayOff">
                            	<div class="rowPointer blueRow"></div>طبق صحبت های انجام شده و اختیارات موجود <h1>نگارخانه فردوسی جهاد دانشگاهی مشهد</h1> واقع در سه راه ادبیات، مورد انتخاب مسئولین قرار گرفت این سالن ظرفیت 38 الی 50 اثر را دارا میباشد که این ظرفیت به نحوه چینش و سایز عکس ها بستگی دارد.<br><div class="rowPointer blueRow"></div> افتتاحیه نمایشگاه نیز در تالار همایش های جهاد واقع در همان مکان برگزار میشود.<br><div class="rowPointer blueRow"></div>در صورتی که تعداد عکس های قابل ارائه برای نمایشگاه بیش از این تعداد شود جزئیات در مورد سالن دوم نیز در همین سایت اطلاع رسانی میشود.
                            </div>
                            <div class="content02 displayOff">
                            	<div><div class="rowPointer blueRow"></div>
	                           	صمیمانه از اینکه با نظراتتون مارو در بهبود برگزاری نمایشگاه همراهی میکنید متشکریم
                                </div>
                                <div><div class="rowPointer blueRow"></div>دوستان لطفا پیام فارسی بگذارید</div>
                                <textarea class="voteTextarea" name="msgContent" tabindex="20" placeholder="لطفا نظر و پیشنهاد خود را بنویسید ..."></textarea>
                                <input type="text" name="email" class="emailInput" tabindex="21" placeholder="لطفا ایمیل خود را وارد نمایید ..." maxlength="100">
                                <input type="text" name="username" class="userInput" tabindex="22" placeholder="لطفا نام خود را وارد نمایید ..." maxlength="20">
                                <div style="margin:7px 0;float:right;">سوال امنیتی (لطفا پاسخ دهید) : </div>
                                <img src="./secur/<?=$securImg[$curRandSecur];?>" class="securImg" width="150" height="32" >
                                <input type="text" name="security" class="secureInput" maxlength="2" tabindex="23">
                                <div class="clear"></div>
                                <input type="button" name="submit" class="submitBtn" value="ارسال" onClick="voteClicked();" tabindex="24">
                                <input type="hidden" class="voteCounter" value="<?=count($dt)+1; ?>">
                                <?php foreach($dt as $row){ ?>
                                <div class="voteLine">
                                	<div class="voteNumber"><?= $row['vote_counter']; ?></div>
                                    <div class="voteUser"><?= $row['vote_user']; ?></div>
                                    <div class="voteDate"><?= $row['vote_date']; ?></div>
                                    <div class="voteContent"><?= $row['vote_content']; ?></div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="content03 displayOff">
                                <div class="admins">
                                	<div class="adminImgBox"><div class="posRel">
                                    	<img src="sitemedia/images/img01p.jpg" width="80" height="80">
                                		<div class="adminImgShadow"></div>
                                    </div></div>
                                    <div class="adminName">حمیدرضا گیلانی فر</div>
                                    <div class="adminDetail">داور ، منتقد و استاد کارگاه تحلیل</div>
                                </div>
                                <div class="admins">
                                	<div class="adminImgBox"><div class="posRel">
                                    	<img src="sitemedia/images/img02p.jpg" width="80" height="80">
                                		<div class="adminImgShadow"></div>
                                    </div></div>
                                    <div class="adminName">افروز عابدینی</div>
                                    <div class="adminDetail">داور و نماینده کلاس دوره بهار 92</div>
                                </div>
                                <div class="admins">
                                	<div class="adminImgBox"><div class="posRel">
                                    	<img src="sitemedia/images/img03p.jpg" width="80" height="80">
                                		<div class="adminImgShadow"></div>
                                    </div></div>
                                    <div class="adminName">سعید مقدم</div>
                                    <div class="adminDetail">داور و نماینده کلاس دوره زمستان 91</div>
                                </div>
                                <div class="admins">
                                	<div class="adminImgBox"><div class="posRel">
                                    	<img src="sitemedia/images/img04p.jpg" width="80" height="80">
                                		<div class="adminImgShadow"></div>
                                    </div></div>
                                    <div class="adminName">شهرام شیخ زاده</div>
                                    <div class="adminDetail">داور و نماینده کلاس دوره زمستان 91</div>
                                </div>
                                <div class="admins">
                                	<div class="adminImgBox"><div class="posRel">
                                    	<img src="sitemedia/images/img05p.jpg" width="80" height="80">
                                		<div class="adminImgShadow"></div>
                                    </div></div>
                                    <div class="adminName">مهدی نظری</div>
                                    <div class="adminDetail">داور و نماینده کلاس دوره بهار 92</div>
                                </div>
                                <div class="admins">
                                	<div class="adminImgBox"><div class="posRel">
                                    	<img src="sitemedia/images/img06p.jpg" width="80" height="80">
                                		<div class="adminImgShadow"></div>
                                    </div></div>
                                    <div class="adminName">سعید بقیری</div>
                                    <div class="adminDetail">داور و نماینده کلاس دوره پاییز 91</div>
                                </div>
                                <div class="admins">
                                	<div class="adminImgBox"><div class="posRel">
                                    	<img src="sitemedia/images/img07p.jpg" width="80" height="80">
                                		<div class="adminImgShadow"></div>
                                    </div></div>
                                    <div class="adminName">آقای توتونچیان</div>
                                    <div class="adminDetail">داور و نماینده کلاس دوره پاییز 91</div>
                                </div>
                            </div>
                            <div class="content04 displayOff">
                            	<div class="rowPointer blueRow"></div>نمایندگان کلاس ها با همه افراد کلاس خود جهت شرکت در نمایشگاه تماس گرفته اند ، برای تائید تبت نام از شنبه 5 مرداد به مدت دوهفته برای تکمیل لیست شرکت کنندگان به همین آدرس مراجعه نمایید.
                            </div>
                        </div>
                    </div>
            	</div>
            </div>
            <div class="rightContent">
            	<div class="rightConHolder">
                	<div class="linkMenu p1 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('right','01','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">تقویم نمایشگاه</span>
                        </a>
                    </div>
                    <div class="linkMenu p2 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('right','02','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">کارگاه تحلیل ، بررسی آثار</span>
                        </a>
                    </div>
                    <div class="linkMenu p3 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('right','03','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">قوانین و چارچوب ها</span>
                        </a>
                    </div>
                    <div class="linkMenu p4 w0">
                    	<a href="javascript:void(0);" onClick="menuClick('right','04','open');">
                            <span class="pointer"></span>
                            <span class="linkValue">نشست عکاسانه با اساتید</span>
                        </a>
                    </div>
                    <div class="menuContent displayOff">
                        <div class="titleContent"  onClick="menuClick('right','00','close');">
                        	<span class="reversePointer"></span>
                            <span class="linkValue">
                                <div class="link01 displayOff">تقویم نمایشگاه</div>
                                <div class="link02 displayOff">کارگاه تحلیل ، بررسی آثار</div>
                                <div class="link03 displayOff">قوانین و چارچوب ها</div>
                                <div class="link04 displayOff">نشست عکاسانه با اساتید</div>
                            </span>
                        </div>
                        <div class="bodyContent">
                        	<div class="content01 displayOff">
                            	<div style="display:inline;"><div class="rowPointer"></div><b>تاریخ افتتاحیه نمایشگاه</b> : جمعه 19 مهر 1392<br>ساعت شروع افتتاحیه بعدا اعلام میشود.<br>زمان باقی مانده تا افتتاحیه : </div>
                                <div class="counter" id="count01">0000:010:10:01:01</div>
                                <br><br>
                                <div style="display:inline;"><div class="rowPointer"></div>نمایشگاه از روز جمعه شروع و به مدت <h1>پنج روز</h1> یعنی تا سه شنبه 23 مهر ادامه خواهد داشت.</div>
                                <br><br>
                                <div style="display:inline;"><div class="rowPointer"></div><b>زمان تحویل آثار اولیه</b> : یکشنبه 20 مرداد 1392<br>زمان باقی مانده تا تحویل اولیه آثار : </div>
                                <div class="counter" id="count02">0000:010:10:01:01</div>
                                <br><br>
                                <div style="display:inline;"><div class="rowPointer"></div><b>زمان تحویل آثار نهایی</b> : یکشنبه 31 شهریور 1392<br>زمان باقی مانده تا تحویل نهایی : </div>
                                <div class="counter" id="count03">0000:010:10:01:01</div>
                                <br><br>
                                <div style="display:inline;"><div class="rowPointer"></div><b>نحوه تحویل آثار</b> : لطفا آثار خود را داخل یک سی دی به نماینده خود تحویل دهید</div>
                                <script>
									countdown_timer("count01", count01);
									countdown_timer("count02", count02);
									countdown_timer("count03", count03);
								</script>
                            </div>
                            <div class="content02 displayOff">
                            	<div><div class="rowPointer"></div>یک هفته بعد از تحویل اولیه آثار، کارگاهی تحت عنوان &quot;کارگاه تحلیل&quot; برای آموزش و بازنگری دید افراد نسبت به &quot;عکس نمایشگاهی&quot; برگزار میشود ، در این کارگاه که با حضور <h1> استاد گیلانی فر</h1> میباشد به نقد و بررسی آثار و نمایش عکس های نمایشگاهی پرداخته میشود.<br><div class="rowPointer"></div> بدیهی است زمان میان تحویل اولیه و تحویل نهایی برای بهتر نمودن آثار توسط شرکت کنندگان میباشد</div>
                            </div>
                            <div class="content03 displayOff">
                            	<div>
<div><div class="rowPointer"></div>طی جلسات متعدد برگزار شده با همه ی هنرجویان شش دوره و جلسات خصوصی با نمایندگان و استاد گیلانی فر تصمیم بر این شد که موضوع نمایشگاه با <h1>دو بخش عکس آزاد و عکس پرتره</h1> انتخاب شود.</div>
<div><div class="rowPointer"></div>عکاسان محترم موظف هستند تا تاریخ اعلام شده <h1>تعداد 30 قطعه عکس</h1> برای کمیته داوری ارسال نمایند</div>
<div><div class="rowPointer"></div>این 30 قطعه متشکل از 20 عکس مربوط به حیطه عکاسی آزاد و 10 قطعه مربوط به عکاسی پرتره میباشد.</div>
<div><div class="rowPointer"></div>لازم به ذکر است شرکت کنندگان باید به این موضوع دقت کنند که تعداد عکس ها از 30 قطعه تجاوز نکند ، این قانون برای تقویت قدرت انتخاب شماست ، در صورتی که تعداد بیشتر شود نمایندگان موظف هستند بدون توجه به برجستگی و مرغوبیت عکس های اضافه را حذف نموده و تعداد مشخص را به کمیته داوری تحویل دهند.</div>
<div><div class="rowPointer"></div>تعداد عکس ها میتواند کمتر باشد و مغایرتی با قوانین نمایشگاه ندارد.</div>
<div><div class="rowPointer"></div>درهنگام داوری عکس ها بدون نام و ترتیب میباشد تا احتمال سوء تفاهم ،داوری از روی شناخت قبلی نصبت به فرد شرکت کننده کمتر شود.</div>
<div><div class="rowPointer"></div>عنوان نمایشگاه بعد از بررسی نظرهای شما و بعد از کارگاه تحلیل انتخاب و به سایت و پوستر های نمایشگاه اضافه میشود.</div>
<div><div class="rowPointer"></div>پس از برگزاری کارگاه تحلیل شرکت کنندگان موظف به پرداخت هزینه شرکت در نمایشگاه میباشند ، لازم به ذکر است وجه پرداختی شما برای هزینه های نمایشگاه شامل تبلیغات ، چاپ پوستر و دعوت نامه ، افتتاحیه و ... استفاده میشود و هیچ یک از کمیته های دواری و برگزاری هزینه ای دریافت نمی کنند.</div>
                                </div>
                            </div>
                            <div class="content04 displayOff">
                            	<div class="rowPointer"></div>به پیشنهاد <h1>استاد گیلانی فر</h1> طی مراسمی بعد از &quot;کارگاه تحلیل&quot; نشست عکاسانه ایی با دعوت پرتره کارهای مطرح برگزار می شود. <br>
                                <div class="rowPointer"></div>طبق بررسی های کمیته داوری در قالب یک طرح فرهنگی از طرف سازمان دانشجویان تائید شد و پس از انتخاب میهمان در همین سایت مراتب اعلام میشود.
                            </div>
                        </div>
                    </div>
            	</div>
            </div>
        </div>
    </div>
</body>
</html>