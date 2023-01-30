function showTime(){
var dateTime = new Date();
var hrs = dateTime.getHours();
var min = dateTime.getMinutes();
var sec = dateTime.getSeconds();
var session = document.getElementById('session');

if(hrs >=12){
    session.innerHTML = 'PM';
}else{
    session.innerHTML = 'AM';
}

if(min<10){
    min = "0" + min;

}
if(sec<10){
    min = "0" + min;

}
document.getElementById('hours').innerHTML = hrs;
document.getElementById('minutes').innerHTML = min;
document.getElementById('seconds').innerHTML = sec;

}

setInterval(showTime,10);