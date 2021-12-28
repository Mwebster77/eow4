const submitForm = document.querySelector('.submitResults-form');


// takes the variables from auditCheck.js, these are stored in localstaorage and can be accessed from other files.
var localAuditPercentage = localStorage.getItem("auditPercentage");
var localVenuePercentage = localStorage.getItem("venuePercentage");

// submitForm.addEventListener('', e => {
// 	e.preventDefault();

// 	const venueAuditForm = document.querySelector('.venueAudit-form');
// 	const auditNow = new Date();
// 	const addResults = {

// 		//the variables stored in local storage are called and put into the form to be submitted to the database.
// 		admin_score: localAuditPercentage,
// 		audit_score: localVenuePercentage,
// 		created_at: firebase.firestore.Timestamp.fromDate(auditNow)
// 	};

		
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

var 