/* Script for Exhibition - Developed by Morteza Iravani reBuild with Sayid Moghadam - i@sayid.ir */
function secondsToTime(secs)
{
    var days = Math.floor(secs / (24 * 60 * 60));
    var divisor_for_hours = secs % (24 * 60 * 60);
    var hours = Math.floor(divisor_for_hours / (60 * 60));
	//var hours = Math.floor(secs / (60 * 60));
	var divisor_for_minutes = divisor_for_hours % (60 * 60);
	//var divisor_for_minutes = secs % (60 * 60);
    var minutes = Math.floor(divisor_for_minutes / 60);
    var divisor_for_seconds = divisor_for_minutes % 60;
    var seconds = Math.ceil(divisor_for_seconds);

	return '0000.' + Leading2Zero(days) + '.' + LeadingZero(hours) + ':' + LeadingZero(minutes) + ':' + LeadingZero(seconds);
}
function Leading2Zero (Time) {
	Time = (Time < 10)? "00" + Time : + Time;
	Time = (Time*1 < 100)? "0" + Time : + Time;
	return Time;
}
function LeadingZero (Time) {
	return (Time < 10) ? "0" + Time : + Time;
}
function countdown_timer(id , entry_sec){
	if(entry_sec < 0){
	// countdown is over
	document.getElementById(id).innerHTML = "از زمان مشخص شده گذشته";
	return;
	}
	var res = secondsToTime(entry_sec);
	document.getElementById(id).innerHTML = res;
	entry_sec--;
	setTimeout("countdown_timer('"+id+"',"+entry_sec+");",1000);
}