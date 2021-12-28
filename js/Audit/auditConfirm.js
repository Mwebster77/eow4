const submitForm = document.querySelector('.submitResults-form');
// takes the variables from auditCheck.js, these are stored in localstaorage and can be accessed from other files.

var av = localStorage.getItem("venuePercentage");
var aa = localStorage.getItem("auditPercentage");

// function audit_Scores(auditScores) {
//     av; aa;
//     $.ajax({
//         type: "POST",
//         url: "../php/auditConfirm.php",
//         data: (audit_Scores: av, audit_Scores: aa),
//         success: function(data)
//     });
// }



// $.ajax({
//     url: "php/auditConfirm.php",
//     method: "POST",
//     data: {auditScores},
//     success: function(res) {
//         console.log(res);
//     }
// })

submitForm.addEventListener('', e => {
	e.preventDefault();

    $.ajax({
        
    })

});
	const venueAuditForm = document.querySelector('.venueAudit-form');
	const auditNow = new Date();
	const addResults = {

		//the variables stored in local storage are called and put into the form to be submitted to the database.
		admin_score: localAuditPercentage,
		audit_score: localVenuePercentage,
		created_at: firebase.firestore.Timestamp.fromDate(auditNow)
	};

		
// 	auditDB.collection('audit_result').add(addResults).then(() => {
// 		console.log('An Audit Score of ' + localAuditPercentage + '% has been added to the Database');
// 		console.log('An Venue Score of ' + localVenuePercentage + '% has been added to the Database');
// 		venueAuditForm.reset();
// 	}).catch(error => {
// 		console.log(error);
// 	});


// 	var localVenuePercentage = localStorage.getItem("venuePercentage");	
// 	var localAuditPercentage = localStorage.getItem("auditPercentage");



// });
