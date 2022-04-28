// JavaScript Document

function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

function validateForm() {
    var x = document.forms["conflict_of_intrest"]["emp_name"].value;
    if (x == null || x == "") {
        alert("Please enter your name");
		document.conflict_of_intrest.emp_name.focus();
        return false;
    }
	var x = document.forms["conflict_of_intrest"]["emp_dept"].value;
    if (x == null || x == "") {
        alert("Please enter your department");
		document.conflict_of_intrest.emp_dept.focus();		
        return false;
    }
	var x = document.forms["conflict_of_intrest"]["emp_division"].value;
    if (x == null || x == "") {
        alert("Please enter your division");
		document.conflict_of_intrest.emp_division.focus();		
        return false;
    }	
	
	var x = document.forms["conflict_of_intrest"]["emp_desig"].value;
    if (x == null || x == "") {
        alert("Please enter your designation");
		document.conflict_of_intrest.emp_desig.focus();		
        return false;
    }
	var x = document.forms["conflict_of_intrest"]["emp_level"].value;
    if (x == null || x == "") {
        alert("Please enter your level");
		document.conflict_of_intrest.emp_level.focus();		
        return false;
    }
	var x = document.forms["conflict_of_intrest"]["dod"].value;
    if (x == null || x == "") {
        alert("Please enter your date of declaration");
		document.conflict_of_intrest.dod.focus();		
        return false;
    }	

/*	---------------------------------*/
	var x = document.forms["conflict_of_intrest"]["location"].value;
    if (x == null || x == "") {
        alert("Please enter your location");
		document.conflict_of_intrest.location.focus();		
        return false;
    }	
}