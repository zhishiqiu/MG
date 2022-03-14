var lbtn = document.querySelector('.logobutton');
var zhang = document.querySelector('#zhang');
var mima = document.querySelector('#mima');
var yanzheng = document.querySelector('#yanzheng');
var huoquyan = document.querySelector('#huoquyan');
var check = document.querySelector('#check');
huoquyan.onclick=function(){
	alert('Verification code has been sent！');
}
lbtn.onclick=function(){
	if(zhang.value=='' || mima.value=='' || yanzheng.value=='' || check.checked==false){
		alert('This text box cannot be empty！');
	}
}