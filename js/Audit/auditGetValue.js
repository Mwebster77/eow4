var venueScore = localStorage.getItem("venuePercentage");
var auditScore = localStorage.getItem("auditPercentage");

function getScores(){
    document.getElementById("venueToSend").value = venueScore;
    document.getElementById("auditToSend").value = auditScore;
    console.log('the Audit Percentage sent to the form was ' + auditScore + '%');
	console.log('the Venue Percentage sent to the form was ' + venueScore + '%');
    console.log(document.getElementById('venueToSend').value);
    console.log(document.getElementById('auditToSend').value);
};