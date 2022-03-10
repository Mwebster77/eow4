var venueScore = localStorage.getItem("venuePercentage");
var auditScore = localStorage.getItem("auditPercentage");

function getScores(){
    document.getElementById("venueToSend").value = venueScore;
    document.getElementById("auditToSend").value = auditScore;
    console.log('the Audit Percentage sent to the form was ' + auditScore + '%');
	console.log('the Venue Percentage sent to the form was ' + venueScore + '%');
    console.log(document.getElementById('venueToSend').value);
    console.log(document.getElementById('auditToSend').value);


    	// //AJAX
	// function submitData(auditData){
	// 	var auditArray = [ localStorage.getItem("venuePercentage"), localStorage.getItem("auditPercentage")];
	// 	var auditXmlHttp = new XMLHttpRequest();
	// 	auditXmlHttp.onload = function(){
	// 		console.log(auditXmlHttp.responseText);
	// 	}
	// auditXmlHttp.open(auditData.venuePercentage,auditData.auditPercentage,true);
	// auditXmlHttp.send(new FormData(auditData));
	// return false;
	// }

	
	// //takes audit values and turns them into JSON string
	// const auditObj = {'Audit Score' : auditPercentage, 'Venue Score' : venuePercentage}
	// const auditJSON = JSON.stringify(auditObj);

	// //sends JSON string to php file
	// auditXmlHttp = new XMLHttpRequest();
	// var auditUrl = "../php/auditConfirm.php";
	// auditXmlHttp.open("POST", auditUrl, true);
	// auditXmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// auditXmlHttp.send(auditJSON);
	// // console.log(auditJSON);
	// // console.log(auditJSON.method);
};