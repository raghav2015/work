function validateForm() 
{
	var firstName= document.registrationForm.fname.value; //  assigning value to first name.
	var regex = /^[a-zA-Z ]{1,30}$/;
	if (!regex.test(firstName)) 
	{
		alert("Please enter your first name");
        return false;
	}
	var lastName= document.registrationForm.lname.value; //  assigning value to  last name.
	if (!regex.test(lastName)) 
	{
		alert("Please enter your last name");
        return false;
	}
	if (firstName == lastName) 
	{
        alert("Firstname should differ from Lastname");
		return false;
    }
	if( document.registrationForm.contact.value=="") // condition for contact information
	{
		alert("Please provide your mobile number");
		document.registrationForm.contact.focus();
		return false;
	}
	if(document.registrationForm.contact.value.length>10 || document.registrationForm.contact.value.length<10) // condition for lenght of contact
	{
		alert("Contact should be 10 digits");
		return false;
	}
	var email = document.registrationForm.email.value;// condition for email validation
	if(email == "")
	{
		alert("Please provide your E-mail");
		document.registrationForm.contact.focus();
		return false;
	}
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) 
	{
        alert("Enter valid Email Id");
    }
	if( document.registrationForm.password.value=="") // condition for password information
	{
		alert("please enter password");
		document.registrationForm.password.focus();
		return false;
	}
	
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}



















































