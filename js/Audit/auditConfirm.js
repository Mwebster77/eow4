const submitForm = document.querySelector('.checkResult');
// takes the variables from auditCheck.js, these are stored in localstaorage and can be accessed from other files.

// var vp = localStorage.getItem("venuePercentage");
// var ap = localStorage.getItem("auditPercentage");

// //takes audit values and turns them into JSON string
const auditObj = { 'Venue Score' : vp, 'Audit Score' : ap}
const auditJSON = JSON.stringify(auditObj);
// // console.log(auditObj);

//AJAX
function submitData(){
	var auditXmlHttp = new XMLHttpRequest();
	auditXmlHttp.onload = function(){
		console.log(auditXmlHttp.responseText);
		console.log(auditJSON);
	}
auditXmlHttp.open(auditJSON,true);
auditXmlHttp.send(new FormData(auditJSON));
return false;
}